<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>bms-donor</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>


	<?php
		$_SESSION["email"]="";
		$_SESSION["password"]="";

		$_SESSION['userstatus']="";
		      header("location:../index.php");

	 ?>
 <?php include('footer.php'); ?>


</body>
</html>
