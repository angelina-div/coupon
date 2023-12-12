<?php
include_once 'database/config.php';

 if(isset($_POST['submit']))
 {	 
  $ename = $_POST['ename'];
  $email = $_POST['email'];
  $password = $_POST['pass'];
  $cpassword = $_POST['cpassword'];
   
    $sql = "INSERT INTO user ('ename','email','pass','cpassword')VALUES($ename, $email, $password, $cpassword)";
    if(mysqli_query($conn, $sql)) {
     echo "New record created successfully !";
    } else {
     echo "Error: " . $sql . " " . mysqli_error($conn);
    }
    mysqli_close($conn);
 }
?>
