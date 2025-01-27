<?php
function login($username, $password) {
    // Predefined credentials (hashed password example)
    $validUsername = "admin@gmail.com";
    $validPasswordHash = password_hash("12345", PASSWORD_DEFAULT); // Secure password hash

    // Check credentials
    if ($username === $validUsername && password_verify($password, $validPasswordHash)) {
        return "Successfully logged in.";
    } else {
        return "Failed to login. Please check your username and password.";
    }
}

// Example usage
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validate inputs (basic example)
    if (empty($username) || empty($password)) {
        echo "Both username and password are required.";
    } else {
        $message = login($username, $password);
        echo $message;
    }
}
?>
