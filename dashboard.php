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
<?php
	
 if (isset($_POST['upload'])) {
 	$target = "profilepic/".basename($_FILES['image']['name']);
 	$image = $_FILES['image']['name'];
    $did = $_SESSION['id'];


 	$sql = "UPDATE signup SET image = '$image' WHERE index = '$did' ";
 	mysqli_query($connection, $sql);

 	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

 		$msg = "Image uploaded successfully";
 	}else{
 		$msg = "there is a problem uploading image";
 	}
 }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>KUTOA</title>
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
	<h2>Welcome to customer dashboard</h2>
	</div>
	<div id="content">
		<form method="post" action="dashboard.php" enctype="multipart/form-data">
		<input type="hidden" name="size" value="1000000">
			<div>
				<input type="file" name="image">
			</div>			
			<div>
				<input type="submit" name="upload" value="upload image">
			</div>
		</form>
	</div>
</body>
</html>