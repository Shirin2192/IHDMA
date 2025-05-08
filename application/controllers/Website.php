<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('form_validation');
		$this->load->model('model'); // Load your model here
    }

	public function index()
	{
		$this->load->view('index');
	}
	public function register(){
		$this->load->view('register');
	}
	// public function register_user() {
	// 	$name         = $this->input->post('name');
	// 	$user_name    = $this->input->post('user_name');
	// 	$email        = $this->input->post('email');
	// 	$password     = $this->input->post('password');
	// 	$mobile       = $this->input->post('mobile');
	// 	$address1     = $this->input->post('address1');
	// 	$address2     = $this->input->post('address2');
	// 	$city         = $this->input->post('city');
	// 	$state        = $this->input->post('state');
	// 	$postal_code  = $this->input->post('postal_code');
	// 	$country      = $this->input->post('country');
	// 	$dob          = $this->input->post('dob');		
	
	// 	// Check for existing email or username
	// 	$exist_email = $this->model->selectWhereData('tbl_users', ['email' => $email, 'user_name' => $user_name, 'is_delete' => '0']);
	// 	if ($exist_email) {
	// 		echo json_encode([
	// 			'status' => 'error',
	// 			'message' => 'Email or Username already exists.'
	// 		]);
	// 		return;
	// 	}
	// 	$exist_contact = $this->model->selectWhereData('tbl_users', ['mobile' => $mobile, 'is_delete' => '0']);
	// 	if ($exist_contact) {
	// 		echo json_encode([
	// 			'status' => 'error',
	// 			'message' => 'Mobile number already exists.'
	// 		]);
	// 		return;
	// 	}	
	// 	// Hash the password (strongly recommended)
	// 	$hashed_password = decy_ency('encrypt', $password);
	
	// 	// Insert new user
	// 	$insertData = [
	// 		'name'           => $name,
	// 		'user_name'      => $user_name,
	// 		'email'          => $email,
	// 		'password'       => $hashed_password,
	// 		'mobile'         => $mobile,
	// 		'address1'       => $address1,
	// 		'address2'       => $address2,
	// 		'city'           => $city,
	// 		'state'          => $state,
	// 		'postal_code'    => $postal_code,
	// 		'country'        => $country,
	// 		'dob'            => $dob,			
	// 	];
	
	// 	$insert = $this->model->insertData('tbl_users', $insertData);
	// 	if ($insert) {
	// 		echo json_encode([
	// 			'status' => 'success',
	// 			'message' => 'User registered successfully.'
	// 		]);
	// 	} else {
	// 		echo json_encode([
	// 			'status' => 'error',
	// 			'message' => 'User registration failed.'
	// 		]);
	// 	}
	// }

	// Controller: Register.php

	public function submit_registration()
	{
		$this->load->library('form_validation');
		
		// Validation Rules
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
		$this->form_validation->set_rules('paymentmethod', 'Payment Method', 'required');
		$this->form_validation->set_rules('cardnumber', 'Card Number', 'required');
		$this->form_validation->set_rules('cvvcode', 'CVV', 'required');
		$this->form_validation->set_rules('cardholdername', 'Card Holder Name', 'required');
		$this->form_validation->set_rules('expiry', 'Expiry Date', 'required');
	
		if ($this->form_validation->run() == FALSE) {
			// Collect individual validation errors and return them as an associative array
			$errors = [];
			foreach ($_POST as $key => $value) {
				if (form_error($key)) {
					$errors[$key] = strip_tags(form_error($key));
				}
			}
	
			echo json_encode(['status' => 'error', 'errors' => $errors]);
		} else {
			// Insert into tbl_members
		    $password = $this->input->post('password');			// Send email to user (optional)
			$hashpassword = decy_ency('encrypt', $password);
			$member_data = [
				'membership_type' => $this->input->post('membershiptype'),
				'user_name'        => $this->input->post('username'),
				'password'        => $hashpassword,
				'name'            => $this->input->post('fullname'),
				'mobile'          => $this->input->post('phone'),
				'email'           => $this->input->post('email'),
				'address1'        => $this->input->post('address'),
				'city'            => $this->input->post('city'),
				'state'           => $this->input->post('state'),
				'country'         => $this->input->post('country'),
				'postal_code'     => $this->input->post('pincode'),
				'user_type'       => 'member',
				'referred_by_member' => $this->input->post('referred_by_member') ? 'Yes' : 'No',
				'contribute_registry' => $this->input->post('contribute_registry') ? 'Yes' : 'No',
			];
// 	print_r($member_data);die;
        	$member_id = $this->model->insertData('tbl_users',$member_data);
	
			// Insert into tbl_payments
			$payment_data = [
				'fk_user_id'        => $member_id,
				'payment_method'    => $this->input->post('paymentmethod'),
				'coupon_code'       => $this->input->post('coupon'),
				'amount'            => $this->input->post('price'),
				'card_last4'        => $this->input->post('cardnumber'),
				'card_expiry'       => $this->input->post('expiry'),
				'cvv_code'          => $this->input->post('cvvcode'),
				'card_holder_name'  => $this->input->post('cardholdername'),
				'transaction_id'    => $this->input->post('transaction_id'),
				'payment_response'  => $this->input->post('payment_response'),
				'payment_date'      => date('Y-m-d H:i:s'),
				'status'            => 'success', // Assuming payment is successful
			];
				
			$this->model->insertData('tbl_payments',$payment_data);
			
			$email = $this->input->post('email');
			
			$this->load->library('email');
			$html = "<h3>Login Details</h3>";
    		$html .= "<p><strong>Email</strong> {$email}</p>";
    		$html .= "<p><strong>Password</strong> {$password}</p>";
    		
    	   //Email config
        	$to_email = 'shirin@sda-zone.com';    		
    		$subject = "IHDMA Login Details";
    		$send = send_inventory_email($to_email, $subject, $html);
			
	
			echo json_encode(['status' => 'success', 'message' => 'Registration successful.']);
		}
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
		// Load the dashboard view

		
	}
	public function about() {
		$this->load->view('about');
	}
	public function benefits_of_membership() {
		$this->load->view('benefits-of-membership');
	}
	public function join_ihdma() {
		$this->load->view('join-ihdma');
	}
	public function contact_us() {
		$this->load->view('contactus');
	}
}
