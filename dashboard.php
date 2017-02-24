<?php
session_start();
include_once("config.php");
?>
<?php 
	if ($_SESSION['mail'] == NULL) {
		$url='index.php';
 echo '<script>window.location = "'.$url.'";</script>';
 die;
	}
 ?> 
<?php 
	if (isset($_POST['logout'])) {
session_unset();
session_destroy();

		 $url='index.php';
 echo '<script>window.location = "'.$url.'";</script>';
 die;
	}
 ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>profile</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/all.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header" style="float: right;">   
        	<form method="post" action="">
  
    <ul class="nav navbar-nav navbar-right">
    	<li><a href="profile.php"><button type="button" class="btn btn-danger" value="profile">Profile </button></a></li>
		<li><a href="#"><input name="logout" type="submit"  value="logout"></a></li>
    </ul>
    </form>
  </div>
</nav>
<div class="container">
	<h2>Welcome to customer dashboard</h2>
	<a href="create-product.php">Create New Product</a>
</div>
</body>
</html>
	</div>

</body>
</html>