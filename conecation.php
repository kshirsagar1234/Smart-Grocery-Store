<?php

// Database connection
$servername = "localhost";
$username = "root"; // Change this if necessary
$password = ""; // Change this if necessary
$dbname = "create_account";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['registerName'];
    $email = $_POST['registerEmail'];
    $mobileNumber = $_POST['registerMobile'];
    $password = password_hash($_POST['registerPassword'], PASSWORD_BCRYPT); // Hashing the password
    $otp = $_POST['registerOTP'] ?? '';

    // Insert user into the database
    $sql = "INSERT INTO users (full_name, email, mobile_number, password, otp) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $fullName, $email, $mobileNumber, $password, $otp);

    if ($stmt->execute()) {
        $successMessage = "Registration successful! Redirecting to login page...";
        header("refresh:2;url=login.php");
    } else {
        $errorMessage = "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>