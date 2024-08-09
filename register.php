<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "mydatabase"; 


$conn = new mysqli($servername, $username, $password, $dbname ,3306);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$user = $_POST['username'];
$pass = $_POST['password'];
$mobile = $_POST['mobile'];


if (empty($user) || empty($pass) || empty($mobile)) {
    die("Please fill in all fields.");
}

$hashed_password = password_hash($pass, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (username, password, mobile) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $user, $hashed_password, $mobile);


if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}


$stmt->close();
$conn->close();
?>
