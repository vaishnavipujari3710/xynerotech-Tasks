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
$fullname = trim($_POST['fullname']);
$email = trim($_POST['email']);
$password = $_POST['password'];

// Basic validation (you can add more)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format");
}

// Check if user already exists
$stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
    $stmt->close();
    die("Email is already registered.");
}
$stmt->close();

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert new user
$stmt = $conn->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $fullname, $email, $hashedPassword);
if ($stmt->execute()) {
    $_SESSION['success_message'] = "Registration successful. Please login.";
    header("Location: index.html"); // Or wherever your login page is
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>
