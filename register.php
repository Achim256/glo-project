<?php
include("connection.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    //Something was posted

$Names = $_POST['Names'];  // Assuming 'Names' is the correct POST key name
$email = $_POST['email'];
$password = $_POST['password'];
$passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Database connection
$conn = new mysqli('localhost', 'root', '', 'test');

if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(Names, email, password) values(?, ?, ?)");
    $stmt->bind_param("sss", $Names, $email, $passwordHash);
    $stmt->execute();
    echo "Registration successfully....";
    $stmt->close();
    $conn->close();
}
 }
?>