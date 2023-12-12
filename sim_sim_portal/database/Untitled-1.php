


// initializing variables
$ename = "";
$email = "";
// first check the database to make sure 
// a user does not already exist with the same username and/or email
if (!isset($_POST['submit'])) {
    $employeeid = $_POST['employeeid'];
    $ename = $_POST['ename'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
  

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if ($password == $cpassword) {
      
        // Finally, register user if there are no errors in the form
        $query = "INSERT INTO user(`employeeid`, `ename`, `email`, `address`, `password`) VALUES('$employeeid', '$ename', '$email', '$address', '$password')";
        mysqli_query($conn, $query);
        $_SESSION['ename'] = $ename;
        $_SESSION['success'] = "You are now logged in";
        header('location: service.php');
    }
   
  }
?>