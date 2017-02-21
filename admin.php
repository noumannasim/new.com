<?php
session_start();
include_once("config.php");
?>
<?php 

	if ($_SESSION['cat'] == NULL) {
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
		<div class="main-img">
			<div class="logo">
				<nav class="navbar">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>                        
							</button>
						</div>
						<ul class="nav navbar-nav">
							<li><a href="#"><img class="img-responsive" src="images/logo.png" alt="KUTOA" width="250"> </a></li>
							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SHOP<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li>Health BARS</li>
									<li><a href="#">Chocolate Banana</a></li>
									<li><a href="#">Peanut Butter & jelly</a></li>
									<li><a href="#">Blueberry Almond</a></li>
									<li><a href="#">Cherry Cashew</a></li>
									<li><a href="#">Chocolate Banana</a></li>
								</ul>
							</li>
							<form method="post" action="">
							<li><a href="#">OUR CAUSE</a></li>
							<li><a href="#">OUR STORY</a></li>
							<li><a href="#">BLOG</a></li>
							<li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="https://facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="https://instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="https://gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
							<li><a href="login.php" target="_new"><i class="fa fa-user" aria-hidden="true"></i></a></li>
							<li><a href="https://google.com"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							<input name="logout" type="submit"  value="logout">
							</form>
						</ul> 
					</div>
				</ul>
			</div>
		</div>
	</nav>
</div>
</div>
<div class="web-banner">
	<img class="img-responsive center-block" src="images/banner.jpg" alt="web-banner" width="950" height="200" >
	<h1>Welcome to Admin dashboard</h1>
</div>
</body>
</html>