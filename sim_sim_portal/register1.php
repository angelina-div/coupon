<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "abrakadabra_portal";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check the connection
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
if (!isset($_POST['submit'])) {
  $employeeid = $_POST['employeeid'];
  $ename = $_POST['ename'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

$sql = "INSERT INTO user ('employeeid', 'ename', 'email', 'address', 'password') VALUES ('$employeeid', '$ename', '$email', '$address', '$password')";
if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
     $_SESSION['ename'] = $ename;
     $_SESSION['success'] = "You are now logged in";
        header('location: service.php');
} else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>







