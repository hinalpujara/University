<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $confirm  = $_POST['confirm_password'];
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "INSERT INTO User_data (first_name, last_name, username, email,  user_password)
 VALUES ('$fname','$lname','$uname','$email','$pass')";
if ($conn->query($sql) === TRUE) {
    echo "\nNew record created successfully";
    header("Location: login.php");
} else {
    echo "ERROR: " . $sql . "<br>" . $conn->error;
}
$conn->close();
