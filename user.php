<?php
include("connection.php");

if(isset($_POST['register'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $Email = $_POST['Email'];
  $password = $_POST['password'];
  $conpassword = $_POST['conpassword'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $phonenumber = $_POST['phonenumber'];

  $query = "INSERT INTO FORMDATA (fname,lname,email,password,cpassword,gender,address,phonenumber) values('$fname','$lname','$Email','$password','$conpassword','$gender','$address','$phonenumber')";

  $data = mysqli_query($conn, $query);

  if ($data) {
    echo "Data inserted into database";
  } else {
    echo "Failed";
  }
}
?>