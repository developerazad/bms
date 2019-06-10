<?php include('header.php'); ?>

<?php include('Admin/function.php'); ?>



	<!-- this is for donor registraton -->
	<div class="recipient_reg" style="background-color:#fff;">
		<h1 class="text-center" style="background-color:#0616BC;color: #fff;">Blood Recipient Registration</h1>
		<form enctype="multipart/form-data" method="post" class="text-center">
				<div class="col-md-12">
				   <div class="col-md-6">
			 		<label>
						First Name: <input type="text" name="firstname" value="" placeholder="firstname" required>
					</label><br><br>

					<label>
						Last Name: <input type="text" name="lastname" value="" placeholder="lastname" required>
					</label><br><br>
 
					<label>
						You are:<select name="gender" required>
									<option value="">select</option>
									<option value="male">Male</option>
									<option value="female">Female </option>
								</select>

					</label> <br><br>
					<label>
						Age: <input type="number" name="age" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" />
					</label><br><br>
					<label>
						Contact: <input type="number" name="contact" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no." />
					</label><br><br>
 					<label>
						Address: <input type="text" name="address" value="" placeholder="address" required>
					</label><br><br>
 				</div>

 				<div class="col-md-6">
					
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
						Email: <input type="email" name="email"  value="" placeholder="Your email" required>
					</label><br><br>
					
					
					<label>
						Till Required Date: <input type="date" name="date" placeholder="dd-mm-yyyy" >	
					</label><br><br>

					<label for="">
						Details<textarea name="detail" cols="30" rows="4"></textarea> <br>
					</label><br><br><br>
				 
					<input type="submit" value="Submit" name="submit"> <br><br><br>
				</div>
			</div>	

		</form>
	</div>
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


	 <?php
		if(isset($_POST["sbmt"])) 
		{
					
				
			$cn=makeconnection();
				$d=$_POST["year"]."/".$_POST["month"]."/".$_POST["day"];
					$s="INSERT INTO requestes(name,gender,age,mobile,bgroup,email,reqdate,detail) VALUES('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $d .  "','" .  $_POST["t7"]  ."')";

			$q=mysqli_query($cn,$s);
			mysqli_close($cn);
			if($q>0)
			{
			echo "<script>alert('Record has been saved!');</script>";
			}
			else
			{echo "<script>alert('Saving Record Failed');</script>";
			}
				
				}	
			

	?> 
</body>
</html>