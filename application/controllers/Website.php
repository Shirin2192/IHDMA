<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

class Website extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('form_validation');
		$this->load->model('model'); // Load your model here
    }

	public function index()
	{
		$response['team_members'] = $this->model->selectWhereData('tbl_team_members', ['is_delete' => '1'], '*',false);
		$this->load->view('index',$response);
	}
	public function register(){
		$encodedData = $this->input->get('price');
		$dataArray = json_decode(base64_decode(urldecode($encodedData)), true);

		$price = $dataArray['price'] ?? '';
		$symbol = $dataArray['symbol'] ?? '';
		$type_name = $dataArray['type_name'] ?? '';

		$data['price'] = $price;
		$data['symbol'] = $symbol;
		$data['type_name'] = $type_name;
		$this->load->view('register', $data);
	}
	public function submit_registration()
	{
		$this->load->library('form_validation');

		// Step 1: Form Validation
		$this->form_validation->set_rules('membershiptype', 'Membership Type', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[tbl_users.user_name]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('fullname', 'Full Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_users.email]');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('state', 'State', 'required');
		$this->form_validation->set_rules('country', 'Country', 'required');
		$this->form_validation->set_rules('pincode', 'Pincode', 'required|numeric');

		if ($this->form_validation->run() === FALSE) {
			$errors = [];
			foreach ($_POST as $key => $value) {
				if (form_error($key)) {
					$errors[$key] = strip_tags(form_error($key));
				}
			}
			echo json_encode(['status' => 'error', 'errors' => $errors]);
			return;
		}

		// Step 2: Razorpay Signature Verification
		$razorpay_order_id = $this->input->post('razorpay_order_id');
		$razorpay_payment_id = $this->input->post('razorpay_payment_id');
		$razorpay_signature = $this->input->post('razorpay_signature');

		if (!$razorpay_order_id || !$razorpay_payment_id || !$razorpay_signature) {
			echo json_encode(['status' => 'error', 'message' => 'Incomplete payment information.']);
			return;
		}

		try {
			$api = new Api('YOUR_KEY_ID', 'YOUR_KEY_SECRET'); // Replace with real keys
			$attributes = [
				'razorpay_order_id' => $razorpay_order_id,
				'razorpay_payment_id' => $razorpay_payment_id,
				'razorpay_signature' => $razorpay_signature
			];
			$api->utility->verifyPaymentSignature($attributes);
		} catch (SignatureVerificationError $e) {
			echo json_encode(['status' => 'error', 'message' => 'Payment verification failed.']);
			return;
		}

		// Step 3: Save Member Data
		$password = $this->input->post('password');
		$hashpassword = decy_ency('encrypt', $password); // Use your own encryption function

		$member_data = [
			'membership_type'       => $this->input->post('membershiptype'),
			'user_name'             => $this->input->post('username'),
			'password'              => $hashpassword,
			'name'                  => $this->input->post('fullname'),
			'mobile'                => $this->input->post('phone'),
			'email'                 => $this->input->post('email'),
			'address1'              => $this->input->post('address'),
			'city'                  => $this->input->post('city'),
			'state'                 => $this->input->post('state'),
			'country'               => $this->input->post('country'),
			'postal_code'           => $this->input->post('pincode'),
			'user_type'             => 'member',
			'referred_by_member'    => $this->input->post('referred_by_member') ? 'Yes' : 'No',
			'contribute_registry'   => $this->input->post('contribute_registry') ? 'Yes' : 'No',
		];

		$member_id = $this->model->insertData('tbl_users', $member_data);

		// Step 4: Save Payment Data
		$payment_data = [
			'fk_user_id'        => $member_id,
			'payment_method'    => 'razorpay',
			'amount'            => $this->input->post('price'),
			'transaction_id'    => $razorpay_payment_id,
			'payment_response'  => json_encode($attributes),
			'payment_date'      => date('Y-m-d H:i:s'),
			'status'            => 'success',
		];
		$this->model->insertData('tbl_payments', $payment_data);

		// Step 5: Send Confirmation Email
		$email = $this->input->post('email');
		$this->load->library('email');

		$html = "<h3>Login Details</h3>";
		$html .= "<p><strong>Email:</strong> {$email}</p>";
		$html .= "<p><strong>Password:</strong> {$password}</p>";

		$to_email = $email;
		$subject = "IHDMA Login Details";
		send_inventory_email($to_email, $subject, $html);

		echo json_encode(['status' => 'success', 'message' => 'Registration successful.']);
	}
	public function create_order()
	{
		$this->load->helper('security');
		$amount = $this->input->post('price'); // price in rupees

		if (!$amount) {
			echo json_encode(['status' => 'error', 'message' => 'Invalid amount']);
			return;
		}

		$api = new \Razorpay\Api\Api('YOUR_KEY_ID', 'YOUR_KEY_SECRET');
		$order = $api->order->create([
			'receipt'         => 'rcptid_' . time(),
			'amount'          => $amount * 100, // amount in paise
			'currency'        => 'INR',
			'payment_capture' => 1
		]);

		echo json_encode([
			'status' => 'success',
			'order_id' => $order['id'],
			'amount' => $order['amount'],
			'key_id' => 'YOUR_KEY_ID' // Send to JS for Razorpay checkout
		]);
	}


	public function login_user()
	{
		// Load necessary libraries
		$this->load->library('form_validation');
		$this->load->library('session'); // Make sure session is loaded
	
		// Validate input
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
	
		if ($this->form_validation->run() == FALSE) {
			echo json_encode([
				'status' => 'error',
				'email_error' => form_error('email'),
				'password_error' => form_error('password')
			]);
			return;
		}
	
		$email = $this->input->post('email', TRUE);
		$password = $this->input->post('password', TRUE);
	
		// Check if user exists
		$user = $this->model->selectWhereData('tbl_users', ['email' => $email, 'is_delete' => '1'], '*');
	
		if ($user) {
			$storedPassword = decy_ency('decrypt', $user['password']);
	
			if ($storedPassword === $password) {
				// Create session
				$session_data = [
					'user_id' => $user['id'],
					'user_name' => $user['name'], // Add more fields if needed
					'email' => $user['email'],
					'is_logged_in' => TRUE
				];
				$this->session->set_userdata('user_session', $session_data);
	
				echo json_encode([
					'status' => 'success',
					'message' => 'Login successful.',
					'user_data' => $user,
					'url' => base_url('website/dashboard')
				]);
			} else {
				echo json_encode([
					'status' => 'error',
					'login_error' => 'Invalid password.'
				]);
			}
		} else {
			echo json_encode([
				'status' => 'error',
				'login_error' => 'User not found.'
			]);
		}
	}
	
	public function logout_user() {
		$this->session->unset_userdata('user_data');
		$this->session->sess_destroy();
		redirect('login');
	}
	public function dashboard() {
		// Check if user is logged in
		if (!$this->session->userdata('user_session')) {
			redirect(base_url()); // Redirect to login page if not logged in
		}else{
			$this->load->view('dashboard');
		}
	}
	public function about() {
		$response['about'] = $this->model->selectWhereData('tbl_about_us', ['is_delete' => '1'], '*');
		$response['objectives'] = $this->model->selectWhereData('tbl_objectives', ['is_delete' => '1'], '*');
		$response['team_members'] = $this->model->selectWhereData('tbl_team_members', ['is_delete' => '1'], '*',false);
		$this->load->view('about',$response);
	}
	public function benefits_of_membership() {
		$response['benefits'] = $this->model->selectWhereData('tbl_member_benefits', ['is_delete' => '1'], '*');
		// print_r($response['benefits']);die;
		$this->load->view('benefits-of-membership', $response);
	}
	public function join_ihdma(): void {
		$this->load->model('Member_model');
		$response['individual_category'] = $this->model->selectWhereData('tbl_membership_categories', ['is_delete' => '1','id'=>1], '*');
		$response['corporate_category'] = $this->model->selectWhereData('tbl_membership_categories', ['is_delete' => '1','id'=>2], '*');
		$response['membershiptype'] = $this->Member_model->get_membership_types();
		// print_r($response);die;
		$this->load->view('join-ihdma',$response);
	}
	public function contact_us() {
		$this->load->view('contactus');
	}
	public function submit_enquiry_form() {
        // Set rules for validation
        $this->form_validation->set_rules('fullname', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required|numeric|min_length[10]|max_length[12]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('pincode', 'Pincode', 'required|numeric|min_length[4]|max_length[6]');
        $this->form_validation->set_rules('w3review', 'Message', 'trim');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed – return errors as JSON
            $errors = array(
                'fullname_error' => form_error('fullname'),
                'phone_error' => form_error('phone'),
                'email_error' => form_error('email'),
                'address_error' => form_error('address'),
                'city_error' => form_error('city'),
                'state_error' => form_error('state'),
                'country_error' => form_error('country'),
                'pincode_error' => form_error('pincode'),
                'w3review_error' => form_error('w3review'),
            );
            echo json_encode(['status' => false, 'errors' => $errors]);
        } else {
			$fullname = $this->input->post('fullname');
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$address = $this->input->post('address');
			$city = $this->input->post('city');
			$state = $this->input->post('state');
			$country = $this->input->post('country');
			$pincode = $this->input->post('pincode');
			$message = $this->input->post('w3review');
			$data = array(
				'name' => $fullname,
				'phone' => $phone,
				'email' => $email,
				'address' => $address,
				'city' => $city,
				'state' => $state,
				'country' => $country,
				'pincode' => $pincode,
				'message' => $message,
			);

			$this->model->insertData('tbl_enquiries', $data);

            echo json_encode(['status' => true, 'message' => 'Form submitted successfully.']);
        }
    }
}
