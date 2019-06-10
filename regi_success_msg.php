<?php include('header.php'); ?>

<?php include('Admin/function.php'); ?>



	<!-- this is for donor registraton -->
	<div class="login" style="background-color:#fff;">
		<h1 class="text-center" style="background-color:#272327;color: #fff;">Congratulations....!!!</h1>
		 		<p class="text-center">You have been registered!</p>
			<div class="formstyle" >
				<div class="col-md-12">

				<div class="col-md-4"></div>
				<div class="col-md-4 border">
					<form method="post">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
					  </div>

					  <button type="submit" class="btn btn-default" name="submit">Login</button>

					 
				</form><br>&nbsp;&nbsp;&nbsp;
				</div>
				<div class="col-md-4"></div>

			</div>
						<!-- login validation -->
			<?php 
		
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
											// $_SESSION["email"]= $_POST["email"];
											// $_SESSION['userstatus']= "yes";
										    echo "<script>location.replace('donor/dashboard.php');</script>";
												// echo "u are supposed to redirect to ur profile";
										} else {
										    echo "<span style='color:red;'>Please, check  username and password</span>";
										}
						$conn->close();		
					}
					
 			?>
		<!-- login validation End-->

				


				<br>

				
		
				
			
		
	</div>
	
	
</div>
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


	
</body>
</html>
