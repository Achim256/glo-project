<?php

// Include database connection details (replace with your credentials)
require_once('login.php');

// Function to sanitize user input (prevent SQL injection)
function sanitizeInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $conn->real_escape_string($data);
}

// Validate and sanitize user input
$names = sanitizeInput($_POST['names']);
$email = sanitizeInput($_POST['email']);
$password = sanitizeInput($_POST['password']);

// Check if email already exists (optional)
$sql_check = "SELECT email FROM users WHERE email = '$email'";
$result_check = $conn->query($sql_check);

if ($result_check->num_rows > 0) {
  echo "Error: Email already exists!";
  exit();
}

// Hash password for secure storage
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare SQL statement for registration
$sql = "INSERT INTO users (names, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $names, $email, $hashed_password);

if ($stmt->execute()) {
  echo "Registration successful!";
  // Optionally, redirect to login page
  // header('Location: login.php');
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
