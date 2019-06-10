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
				<?php 
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "projectmms";

							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
							$sql="SELECT * FROM registraton WHERE email='" . $_SESSION["email"] . "'";
			
							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);
							
							$data=mysqli_fetch_array($q);
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




	<!-- this is for donor registraton -->
	<div class="updateprofiles">
		<h3 class="text-center" style="background-color:black;color: #fff;padding: 4px;">My Details</h3>
		<div class="formstyle" style="padding:15px;border:1px solid lightgrey;background-color:#101011;color: #fff;margin-right: 300px;margin-left: 250px;">
		   <form action="" method="post">
			 
			 	
					<label>
						User Name: <input type="text" name="username" value="<?php echo $username; ?>" required>
					</label><br><br>

					<label>
						Your sex:<input type="text" name="gender" value="<?php echo $gender;?>" required>

					</label> <br><br>
					
					<label>
						Contact: <input type="text" name="contact" value="<?php echo $contact;?>" required pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no." />
					</label><br><br>
					<label>
						You are:<input type="text" name="type" value="<?php echo $type;?>" required>
					</label><br><br>
					<label>
						Your City:<input type="text" name="city" value="<?php echo $city;?>" required>
					</label><br><br>
					<label>
						Address: <input type="text" name="address" value="<?php echo $address;?>" required>
					</label><br><br>
					<label>
						Blood Group: <input type="text" name="bgroup" value="<?php echo $bgroup;?>"  required>
					</label><br><br>

					<label>
						Email: <input type="email" name="email"  value="<?php echo $email;?>" required>
					</label><br><br>

				<label><button name="submit" type="submit" style="margin-right: 170px;width:112px;border-radius: 3px;color: #000;">UpdateProfile</button></label><br><br>
				
			
		</form>

	</div>
		
		
		
</div> <br><br>
	
		
			

	



	 <?php include('footer.php'); ?>
	</div><!--  containerFluid Ends --> 
	<!-- update information -->

				<?php
						if(isset($_POST['submit'])){
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "projectmms";

							// Create connection
							$conn = mysqli_connect($servername, $username, $password, $dbname);
							// Check connection
							if (!$conn) {
							    die("Connection failed: " . mysqli_connect_error());
							}

							$sql="UPDATE registraton SET username='" .$_POST["username"]. "' ,gender='" .$_POST["gender"]."',age='" .$_POST["age"]."' , contact='" .$_POST["contact"]. "',type='" .$_POST["type"]. "',city='" .$_POST["city"]. "', address='" .$_POST["address"]. "',bgroup='" .$_POST["bgroup"]. "', email='".$_POST["email"]."' WHERE email='" .$_SESSION["email"]. "'";
		
							if (mysqli_query($conn, $sql)) {
						    echo "<script>alert(' Record Has been Updated Successfully');</script>";
							} else {
							    echo "<script>alert('There was a Error Updating profile');</script>";
							}

						mysqli_close($conn);
													}
					?> 
			<!-- update information End -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
