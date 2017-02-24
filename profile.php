	<?php

	include_once("config.php");

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
    <div id="content">
<?php
  $msg = ""; 
 if (isset($_POST['upload'])) {
  $target = "profilepic/".basename($_FILES['image']['name']);
  $image = $_FILES['image']['name'];
  $did = $_SESSION['id'];
  $pname = $_POST['pname'];
  $pimage = $_POST['$pimage'];
  $pcategory = $_POST['$pcategory'];
  $price = $_POST['$price'];
  $discription = $_POST['$pdiscription'];
  $ownername = $_POST['$ownername'];
  $ownerid = $_POST['ownerid'];

 $sql = "INSERT INTO products (pid, pname, pimage, pcategory, price, pdiscription, ownername, ownerid) VALUES ('$pname','$pimage','$pcategory','$price','$pdiscription','$ownername','$ownerid',)";



  
  mysqli_query($connection, $sql);

  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

    $msg = "Image uploaded successfully";
  }else{
    $msg = "there is a problem uploading image";
  }
 }

 ?>
<?php
  $sql = "SELECT * FROM signup";
  $result = mysqli_query($connection, $sql);
  while ($row = mysqli_fetch_array($result)) {
    echo "<div id='img_dev'> ";
      echo "<img style=width:200px;  src ='profilepic/".$row['image']."' >";
    echo "</div>";

  }
  ?>






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