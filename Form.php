 <?php
include("connection.php");
?>
<?php
include("user.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud Oprestion</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="continer">
    <form action="#" method="POST">
      <div class="title">
        Registration Form
      </div>
      <div class="Form">
        <div class="input_text">
          <label>First Name </label>
          <input type="text" class="input" name="fname">
        </div>
        <div class="input_text">
          <label>Last Name </label>
          <input type="text" class="input" name="lname">
        </div>
        <div class="input_text">
          <label>Email Id </label>
          <input type="Email" class="input" name="Email">
        </div>
        <div class="input_text">
          <label>Password </label>
          <input type="Password" class="input" name="password">
        </div>
        <div class="input_text">
          <label>Confirm Password </label>
          <input type="Password" class="input" name="conpassword">
        </div>
        <div class="input_text">
          <label>Gender </label>
          <select class="box" name="gender">
            <option value="note selected">select</option>
            <option value="male">Male</option>
            <option value="female">female</option>
          </select>
        </div>
        <div class="input_text">
          <label>Address </label>
          <textarea class="textarea" name="address"></textarea>
        </div>
        <div class="input_text">
          <label>Phone Number </label>
          <input type="text" class="input" name="phonenumber">
        </div>

        <div>
          <input type="submit" class="btn" value="Register" name="register">
        </div>
      </div>
    </form>
  </div>
</body>
</html>









