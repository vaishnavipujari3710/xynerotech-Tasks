<?php
session_start();

// Database connection parameters
$host = "localhost";
$dbUser = "root";
$dbPass = "";  // Set your DB password
$dbName = "homeease";  // Your DB name

// Create connection
$conn = new mysqli($host, $dbUser, $dbPass, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data and sanitize
$email = trim($_POST['email']);
$password = $_POST['password'];

// Fetch user by email
$stmt = $conn->prepare("SELECT id, fullname, password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows == 1) {
    $stmt->bind_result($id, $fullname, $hashedPassword);
    $stmt->fetch();

    // Verify password
    if (password_verify($password, $hashedPassword)) {
        // Password correct, set session
        $_SESSION['user_id'] = $id;
        $_SESSION['user_name'] = $fullname;

        // Redirect to dashboard or home page
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Incorrect password.";
    }
} else {
    echo "No user found with that email.";
}

$stmt->close();
$conn->close();
?>
