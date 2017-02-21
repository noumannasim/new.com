<?php
   include_once("config.php");
   
?>
<?php 
if (isset($_POST['signup'])) {


$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$pwd= $_POST['pwd'];

  $sql = "INSERT INTO signup (fname, lname, email, password, category) VALUE ('$fname', '$lname', '$email', '$pwd', '')";
  $var = mysqli_query($connection, $sql);
 
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/all.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="test">
  <div class="container">
  <h2>CREATE ACCOUNT</h2>
  <div class="col-sm-6">
  <form method="POST" action="">
    <div class="form-group">
      <label for="inputdefault">First Name</label>
      <input class="form-control" id="name" type="text" name="fname">
    </div>
    <div class="form-group">
      <label for="inputlg">Last Name</label>
      <input class="form-control" id="name" type="text" name="lname">
    </div>
    <div class="form-group">
      <label for="inputsm">Email</label>
      <input class="form-control" id="email" type="email" name="email">
    </div>
    <div class="form-group">
      <label for="inputsm">Password</label>
      <input class="form-control" id="pwd" type="password" name="pwd">
    </div>
   <input type="submit" name="signup" value="Sign Up">
    </form>
  </div>
</body>
</html>