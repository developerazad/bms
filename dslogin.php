<?php session_start();  ?>
<?php include('header.php'); ?>





	<!-- this is for donor registraton -->
	<div class="login" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Blood Donor/Seeker Login</h3>
			<div class="formstyle" >


			<div class="col-md-12">

				<div class="col-md-4"></div>
				<div class="col-md-4 border">
					<form method="post">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Your Email</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" required="required">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required="required">
					  </div>

					  <button type="submit" class="btn btn-default" name="submit">Login</button>

					  <span style="color:#fff;">Not a member yet?</span> <a href="dsregistration.php" title="create a account" target="" style="color:#000;">&nbsp;Sign Up</a> <br> <br>
					  <!-- login validation -->

					  			<!-- login validation -->
					<?php 
							$_SESSION['donorstatus']="";
									
						if(isset($_POST["submit"])){

									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "projectmms";

									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
									// Check connection
									if ($conn->connect_error) {
									  die("Connection failed: " . $conn->connect_error);
									}

									$sql= "SELECT * FROM registration WHERE email= '" . $_POST["email"]."' AND password= '" . $_POST["password"]."'";

									$result = $conn->query($sql);

											if ($result->num_rows > 0) {
													$_SESSION["email"]= $_POST["email"];
													// $_SESSION["donar_id"]= $_POST["donar_id"];
													$_SESSION["password"]= $_POST["password"];
													$_SESSION['donorstatus']= "yes";
												    echo "<script>location.replace('donor/dashboard.php');</script>";
														// echo "u are supposed to redirect to ur profile";
												} else {
												    echo "<span style='color:red;'>Invalid username or password</span>";
												}
								$conn->close();		
							}
							
		 			?>
		<!-- login validation End-->
					  <!-- login validation -->
				</form><br>&nbsp;&nbsp;&nbsp;
				</div>
				<div class="col-md-4"></div>

			</div>
				
					
					<!-- validation was here -->
					<!-- validation was here -->
				<br>

				
		
				
			
		
	</div>
	
	
</div>
	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>

