<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

						
						<?php include("config.php");

							$sql="SELECT * FROM registraton WHERE email= '" . $_SESSION["email"] . "'";

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row = $result->fetch_assoc()) {
							        $username = $row["username"];
									$gender = $row["gender"];
									$age = $row["age"];
									$contact = $row["contact"];
									$type = $row["type"];
									$city = $row["city"];
									$address = $row["address"];
									$bgroup = $row["bgroup"];
									$email = $row["email"];
							    }
							}
							
							
							
							//echo $name;
							$conn->close();

					?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blood management system</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php

if($_SESSION['donorstatus']==""){
	header("location:../userlogin.php");
}

?>

<div class="container-fluid">
		
			
					
					
	<?php include('uptomenu.php'); ?>




	<!-- this is for donor registraton -->
	<div class="updateprofile">
		<h3 class="text-center" style="background-color:black;color: #fff;padding: 4px;">Your Information</h3>
		<div class="">
		   <form action="" method="post">
			 <div class="col-md-12 styles">
			 	<div class="col-md-6">
					<label>
						User Name: <input type="text" name="username" value="<?php echo $username;?>" placeholder="" required>
					</label><br><br>

					<!-- <label>
						Last Name: <input type="text" name="lastname" value="" placeholder="lastname" required>
					</label><br><br> -->
					<label>
						Your sex:<select name="gender" required>
									<option value="">select</option>
									<option value="male">Male</option>
									<option value="female">Female </option>
								</select>

					</label> <br><br>
					<label>
						Age: <input type="text" name="age" required="required" value="<?php echo $age;?>" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" />
					</label><br><br>
					<label>
						Contact: <input type="number" name="contact" value="<?php echo $contact;?>" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no." />
					</label><br><br>
					<label>
						You are:<select name="type" required>
									<option value="">Select</option>
									<option value="Blood Donor">Blood Donor</option>
									<option value="Blood Seeker">Blood Seeker</option>
								</select> 
					</label><br>
					<label>
						Your City:<select name="city" required>
									<option value="">Select</option>
									<option value="Bogra">Bogra </option>
									<option value="Barguna">Barguna</option>
									<option value="Barisal">Barisal </option>
									<option value="Bhola">Bhola </option>
									<option value="Bandarban">Bandarban  </option>
									<option value="Brahmanbaria">Brahmanbaria  </option>
									<option value="Bagerhat">Bagerhat </option>

									
									
									
									<option value="Chandpur">Chandpur </option>
									<option value="Chittagong">Chittagong  </option>
									<option value="Comilla">Comilla </option>
									<option value="Cox's Bazar">Cox's Bazar  </option>
									<option value="Chapainawabganj">Chapainawabganj</option>
									<option value="Chuadanga">Chuadanga  </option>

									<option value="Dinajpur">Dinajpur</option>
									<option value="Dhaka">Dhaka </option>

									<option value="Feni">Feni </option>
									<option value="Faridpur">Faridpur </option>

									
									
									
									
									
									
									<option value="Gazipur">Gazipur </option>
									<option value="Gopalganj">Gopalganj </option>
									<option value="Gaibandha">Gaibandha</option>

									<option value="Habiganj">Habiganj</option>

									<option value="Jhalokati">Jhalokati </option>
									<option value="Jamalpur">Jamalpur</option>
									<option value="Joypurhat">Joypurhat</option>
									<option value="Jessore">Jessore </option>
									<option value="Jhenaidah">Jhenaidah </option>

									<option value="Kishoreganj">Kishoreganj  </option>
									<option value="Khagrachhari">Khagrachhari  </option>
									<option value="Kurigram">Kurigram</option>
									<option value="Khulna">Khulna </option>
									<option value="Kushtia">Kushtia </option>

									<option value="Lalmonirhat">Lalmonirhat </option>
									<option value="Lakshmipur">Lakshmipur  </option>

									<option value="Madaripur">Madaripur </option>
									<option value="Manikganj">Manikganj </option>
									<option value="Munshiganj">Munshiganj  </option>
									<option value="Magura">Magura </option>
									<option value="Meherpur">Meherpur</option>
									<option value="Mymensingh">Mymensingh </option>
									<option value="Moulvibazar">Moulvibazar </option>

									<option value="Narayanganj">Narayanganj  </option>
									<option value="Noakhali">Noakhali </option>
									<option value="Narsingdi">Narsingdi </option>
									<option value="Narail">Narail</option>
									<option value="Netrakona">Netrakona</option>
									<option value="Naogaon">Naogaon</option>
									<option value="Natore">Natore</option>
									<option value="Nilphamari">Nilphamari</option>

									<option value="Patuakhali">Patuakhali </option>
									<option value="Pirojpur">Pirojpur </option>
									<option value="Pabna">Pabna</option>
									<option value="Panchagarh">Panchagarh </option>

									<option value="Rajbari">Rajbari </option>
									<option value="Rangamati">Rangamati  </option>
									<option value="Rajshahi">Rajshahi</option>
									<option value="Rangpur">Rangpur</option>

									<option value="Shariatpu">Shariatpu </option>
									<option value="Satkhira">Satkhira</option>
									<option value="Sherpur">Sherpur</option>
									<option value="Sirajgonj">Sirajgonj</option>
									<option value="Sunamganj">Sunamganj  </option>
									<option value="Sylhet">Sylhet</option>

									<option value="Tangail">Tangail  </option>
									<option value="Thakurgaon">Thakurgaon </option>

									
									</select> 
					</label>
				</div>

				<div class="col-md-6">
					<label>
						Address: <input type="text" name="address" value="<?php echo $address;?>" placeholder="" required>
					</label><br><br>
					<label>
						Blood Group: <select name="bgroup" required>
										<option value="">select</option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
									</select>
					</label><br><br>

					<label>
						Email: <input type="email" name="email"  value="<?php echo $email;?>" placeholder="" required>
					</label><br><br>

					<label>
						Password: <input type="password" name="password" value="" placeholder="" required/>
					</label><br><br>

					<label>
						Confirm Password: <input type="password" name="password" value="" placeholder="" required>
					</label> <br>

					<input type="submit" value="Update Data" name="submit"/> <br><br><br>
				<div/> <!-- col-md-6 -->
			</div><!-- col-md-12 -->
		</form>

	</div>
		
		
		
</div>
	
		<!-- update information -->

				<?php include("config.php"); ?>	
				<?php
						if(isset($_POST['submit'])){
							

						$sql = "UPDATE registraton SET username='" .$_POST["username"]. "' ,gender='" .$_POST["gender"]."' , age='" .$_POST["age"]. "',contact='" .$_POST["contact"]. "',type='" .$_POST["type"]. "',city='" .$_POST["city"]. "', address='" .$_POST["address"]. "' , email='".$_POST['email']."' WHERE email='" .$_SESSION["email"]. "' ";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('Record has been updated successfully');</script>";
							} else {
							    echo "<script>alert('Record could not be updated');<script>";
							}

							$conn->close();
						}
					?> 
			<!-- update information End -->
			

	



	
	</div><!--  containerFluid Ends --> 




	<script src="js/bootstrap.min.js"></script>

<div class="break" style="margin: 15px;color: black">a</div>
 
			


 <?php include('footer.php'); ?>
	
</body>
</html>
