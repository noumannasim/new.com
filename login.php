<?php
    session_start();
   include_once("config.php");
?>
<?php 
  if(isset($_POST['login'])){
      $myusername = $_POST['email'];
      $mypassword = $_POST['password']; 
      $sql = "SELECT * FROM signup";
      $result = mysqli_query($connection, $sql);
     while( $row = mysqli_fetch_array($result)) {
      $mail = $row['email'];
      $pass = $row['password'];
      if($mail == $myusername AND $pass == $mypassword AND $row['category'] == '0') {
        $_SESSION['mail'] = $myusername; 
        $_SESSION['id'] = $row['index'];                 
        $url='dashboard.php';
 echo '<script>window.location = "'.$url.'";</script>';
 die;
      }
      elseif($mail == $myusername AND $pass == $mypassword AND $row['category'] == '1') {
         $_SESSION['mail'] = $myusername;
         $_SESSION['id'] = $row['index'];                  
        $url='admin.php';
 echo '<script>window.location = "'.$url.'";</script>';
 die;
}
     }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/all.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
<div class=" col-xs-4">
  <form id='login' action="" method='post'>
    <div class="form-group">
      <label for="email">Email:</label>
      <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input name="password" type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <input name="login" type="submit"  value="login">
    <a href="signup.php"><button type="button" class="btn btn-danger"> Sign Up</button></a>
  </form>
</div>
</body>
</html>
