<?php
include("connection.php");

$ID= $_GET['Id'];
$query = "SELECT * FROM formdata Where ID='$ID'";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
($row = mysqli_fetch_assoc($data));

?>
<!-- <?php
include("user.php");
?> -->

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
      UPDATE YOUR DETILES
      </div>
      <div class="Form">
        <div class="input_text">
          <label>First Name </label>
          <input type="text" class="input" name="fname" value="<?php echo$row ['fname'];?>">
        </div>
        <div class="input_text">
          <label>Last Name </label>
          <input type="text" class="input" name="lname" value="<?php echo$row ['lname'];?>" >
        </div>
        <div class="input_text">
          <label>Email Id </label>
          <input type="Email" class="input" name="Email" value="<?php echo$row ['email'];?>">
        </div>
        
        <div class="input_text">
          <label>Password </label>
          <input type="showPassword" class="input" name="password" value="<?php echo$row ['password'];?>">
        </div>
        <div class="input_text">
          <label>Confirm Password </label>
          <input type="showpassword" class="input" name="conpassword" value="<?php echo$row ['cpassword'];?>">
        </div>
        
        <div class="input_text">
          <label>Gender </label>
          <select class="box" name="gender">
            <option value="note selected">select</option>
            <option value="male"
                   <?php 
                        if($row['gender']=='male')
                        {
                          echo"selected";
                        } 
                     ?>
            >Male</option>
            <option value="female"
                      <?php 
                        if($row['gender']=='female')
                        {
                          echo"selected";
                        } 
                     ?>         
            >female</option>
          </select>
        </div>
       
        <div class="input_text">
          <label>Address </label>
          <textarea class="textarea" name="address">
            <?php echo $row ['address'];?>
          </textarea>
        </div>
       
        <div class="input_text">
          <label>Phone Number </label>
          <input type="text" class="input" name="phonenumber" value="<?php echo$row ['phonenumber'];?>">
        </div>

        <div>
          <input type="submit" class="btn" value="Update Detiles" name="update">
        </div>
      </div>
    </form>
  </div>
</body>
</html>




<?php
include("connection.php");

if(isset($_POST['update'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $Email = $_POST['Email'];
  $password = $_POST['password'];
  $conpassword = $_POST['conpassword'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $phonenumber = $_POST['phonenumber'];

  // $query = "INSERT INTO FORMDATA (fname,lname,email,password,cpassword,gender,address,phonenumber) values('$fname','$lname','$Email','$password','$conpassword','$gender','$address','$phonenumber')";

 $query = "update formdata set fname='$fname',lname='$lname',Email='$Email',password='$password',conpassword='$conpassword',gender='$gender',address='$address',phonenumber='$phonenumber' WHERE ID='$ID'";

  $data = mysqli_query($conn, $query);

  if ($data) {
    echo "Data updated into database";
  } else {
    echo "Failed";
  }
}
?>