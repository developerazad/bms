<?php if(!isset($_SESSION)){
	session_start();
	}  
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blood Management System</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php

if($_SESSION['donorstatus']==""){
	header("location:../dslogin.php");
}

?>

<?php include('uptomenu.php'); ?>

<!-- for retriving data -->
			
			
				<?php include('config2.php');
							$sql="SELECT * FROM registration where email='" . $_SESSION["email"] . "'";
			
							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);
							
							$data=mysqli_fetch_array($q);
							// $name=$data[2];
							// $address=$data[3];
							// $contact=$data[4];
							// $email=$data[5];
							// $expertise=$data[6];
							// $fee=$data[8];

							$username=$data[1];
							$gender=$data[2];
							$contact=$data[4];
							$type=$data[5];
							$city=$data[6];
							$address=$data[7];
							$bgroup=$data[8];
							$email=$data[10];
							

							mysqli_close($conn);
				?>
<!-- for retriving data -->


<div class="login" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">My Details</h3>
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color: #f7f7f7;">
				<form action="" method="post" class="text-center form-group" enctype="multipart/form-data">
					<label>
						Your Name: <input type="text" name="username" value="<?php echo $username; ?>" required>
					</label><br><br>
					<label>
						E-mail: <input type="email" name="email" value="<?php echo $email; ?>" required>
					</label><br><br>

 					<label>
						Gender: <input type="text" name="gender" value="<?php echo $gender; ?>" >

					</label><br><br>

					
					<label>
						Contact: <input type="text" name="contact" value="<?php echo $contact; ?>"  required="required" />
					</label><br><br>
 					<label>
						Type: <input type="text" name="type" value="<?php echo $type; ?>" >
					</label><br><br>
					<label>
						City: <input type="text" name="city" value="<?php echo $city; ?>">
					</label><br><br>

					<label>
						Address: <input type="text" name="address" value="<?php echo $address; ?>">
					</label><br><br>
					
					<label>
						Blood Group: <input type="text" name="bgroup" value="<?php echo $bgroup; ?>"  disabled>
					</label><br><br>

					
					
					<button name="submit" type="submit" style="margin-left:185px;width:108px;border-radius:2px;
					background-color: #fff;">Update Profile</button> <br>



					<!-- update information -->

				<?php include('config2.php');

					if (isset($_POST["submit"])) {
							$sql1="UPDATE registraton SET username='" .$_POST["username"]. "' ,gender='" .$_POST["gender"]."', contact='" .$_POST["contact"]. "',type='" .$_POST["type"]. "',city='" .$_POST["city"]. "', address='" .$_POST["address"]. "' WHERE email='".$_SESSION["email"]."'";
		
							if (mysqli_query($conn, $sql1)) {
						    echo "<script>alert(' Record Has been Updated Successfully');</script>";
							} else {
							    echo "<script>alert('There was a Error Updating profile');</script>";
							}

						mysqli_close($conn);
													}
					?> 
			<!-- update information End -->


			</form> <br><br>

	</div>
	
	
</div>

 <?php include('footer.php'); ?>
	</div><!--  containerFluid Ends --> 
	<script src="js/bootstrap.min.js"></script>


</body>
</html>