<?php
session_start();
require_once 'db_config.php';
require_once 'common.php';

header('Content-Type: text/plain');  // Set to plain text for easy parsing

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

$response = '';

// Validate the form data
if (empty($email) || empty($password)) {
    $response = 'All fields are required.';
} else {
    // Prepare and execute the query to check the user
    $stmt = $conn->prepare("SELECT id, password FROM tbl_users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $stored_encrypted_password);
        $stmt->fetch();

        // Decrypt stored password and compare
        $decrypted_password = decy_ency('decrypt', $stored_encrypted_password);

        if ($password === $decrypted_password) {
            // Successful login
            $_SESSION['user_id'] = $user_id;
            $_SESSION['email'] = $email;
            $response = 'success';  // Success response
        } else {
            // Incorrect password
            $response = 'Invalid password.';
        }
    } else {
        // User not found
        $response = 'User not found.';
    }

    $stmt->close();
}

// Close the connection
$conn->close();

// Return the response message
echo $response;
?>
