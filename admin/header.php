<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>medical management system</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>


<?php
		if($_SESSION['adminstatus'] == ""){
			header("location:adminlogin.php");
		}
		
		   

	 ?>


<div class="container">
		<div class="header_top">
			<a href="../index.php"><img src="img/dash3.jpg" alt="logo img"></a>
			<span style="font-size:60px;color:#2c2f84;font-weight:bolder;margin-left:15px;font-family:inherit;">Name of the Hospital</span>
		</div>

	<!-- 	this is for menu -->
	<div class="navbar navbar-default nav">
		<nav class="menu">
			<ul>
				
				<li style="color: #6033a9;"><a href="donor.php">View Donor</a></li>
				<li style="color: #6033a9;"><a href="seeker.php">View Seeker</a></li>
				<li style="color: #6033a9;"><a href="donation_list.php">Donation List</a></li>
				<li><a href="viewFeedback.php">View Feedback</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</div>
	
