<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cse309";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contact_us (first_name, last_name, mobile_number, email, message) VALUES ('$fname', '$lname', '$mobile', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    return true;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();