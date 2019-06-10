<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>



	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;;color: #fff;padding: 5px;">Change Password</h3>
		<div class="formstyle" style="float: right;padding: 10px;border: 1px solid lightgrey;margin-right: 376px; margin-bottom: 10px;background-color: #f7f7f7;;">
				<form action="" method="post" class="text-center">
					<label>
						Current Password: <input type="password" name="password"  placeholder="Old password" required>
					</label><br><br>
					<label>
						New Password: <input type="password" name="newpassword"  placeholder="New password" required>
					</label><br><br>
					<label>
						Confirm Password: <input type="password" name="confpassword"  placeholder=" Confirm password" required>
					</label><br><br>
					<button name="submit" type="submit" style="border-radius: 3px;color:#000;background-color:#fff;margin-left: 200px;">Update Password</button> <br>

					


					<!-- login validation -->
			<?php include('config2.php');
					
							
							if(isset($_POST["submit"])){
								
							$sql= "SELECT * FROM registration WHERE email= '" . $_SESSION["email"]."' AND password= '" . $_POST["password"]."'";

							$query=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($query);

							if($row>0){
								//check the new password
								if($newpassword==$confpassword){
								
								$sql1="UPDATE registration SET password='" . $_POST["newpassword"]  ."' WHERE email='" .$_SESSION["email"] ."'";
								mysqli_query($conn,$sql1);
								mysqli_close($conn);
								echo "<script>alert('Password Has been Updated');</script>";
								}else{
									echo "<script>alert('Password did not match');</script>";

								}

							}else{
								echo "<script>alert('Input Correct Password');</script>";
							}
									
										
								
					}
					
 			?>
		<!-- login validation End-->


				</form> <br>&nbsp;&nbsp;&nbsp;
				
				<br>

				
		
				
			
		
	</div>
		
		
			
		
	</div>
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
