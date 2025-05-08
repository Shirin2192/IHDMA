<?php
session_start();
header('Content-Type: application/json'); // Set content type to JSON

require 'db_config.php';

// Function to clean input
function sanitize($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

$errors = [];

// Validate required fields
$requiredFields = [
    'membershiptype', 'username', 'password', 'fullname', 'phone', 'email',
    'address', 'city', 'state', 'country', 'pincode',
    'paymentmethod', 'cardnumber', 'expiry', 'cvvcode', 'cardholdername'
];
foreach ($requiredFields as $field) {
    if (empty($_POST[$field])) {
        $errors[$field] = ucfirst($field) . " is required.";
    }
}

if (!empty($errors)) {
    echo json_encode(['status' => 'error', 'errors' => $errors]);
    exit;
}

// Sanitize all inputs
$data = [];
foreach ($_POST as $key => $value) {
    $data[$key] = sanitize($value);
}

// Handle checkboxes and optional fields
$referred = isset($_POST['referred_by_member']) ? 'Yes' : 'No';
$contribute = isset($_POST['contribute_registry']) ? 'Yes' : 'No';

// Check if username, email, or contact already exists
$stmt_check = $conn->prepare("SELECT id FROM tbl_users WHERE user_name = ? OR email = ? OR mobile = ?");
$stmt_check->bind_param("sss", $data['username'], $data['email'], $data['phone']);
$stmt_check->execute();
$stmt_check->store_result();
if ($stmt_check->num_rows > 0) {
    echo json_encode(['status' => 'error', 'message' => 'Username, Email, or Phone already exists.']);
    $stmt_check->close();
    exit;
}
$stmt_check->close();

// Insert into tbl_users
$user_stmt = $conn->prepare("INSERT INTO tbl_users 
(name, email, password, mobile, user_name, address1, city, state, postal_code, country, user_type, membership_type, referred_by_member, contribute_registry) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'member', ?, ?, ?)");

$hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);
$user_type = 'member'; // Static value for user_type

// Ensure you have 15 variables for 15 placeholders
$user_stmt->bind_param("sss", 
    $data['fullname'], $data['email'], $hashedPassword, $data['phone'], $data['username'],
    $data['address'], $data['city'], $data['state'], $data['pincode'], $data['country'],
    $user_type, $data['membershiptype'], $referred, $contribute
);

if ($user_stmt->execute()) {
    $user_id = $conn->insert_id;

    // Insert into tbl_payments
    $payment_stmt = $conn->prepare("INSERT INTO tbl_payments 
(fk_user_id, transaction_id, amount, payment_method, card_last4, card_expiry, cvv_code, card_holder_name, payment_date, status) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), 'success')");

    $card_last4 = substr($data['cardnumber'], -4);
    $transaction_id = 'TXN' . time() . rand(100, 999); // Example transaction ID
    $amount = 86.50; // Static, or fetch dynamically if needed

    $payment_stmt->bind_param(
        "isdssss",
        $user_id, $transaction_id, $amount,
        $data['paymentmethod'], $card_last4,
        $data['expiry'], $data['cvvcode'], $data['cardholdername']
    );

    if ($payment_stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Registration completed.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Payment error: ' . $conn->error]);
    }

    $payment_stmt->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'User error: ' . $conn->error]);
}

$user_stmt->close();
$conn->close();
?>
