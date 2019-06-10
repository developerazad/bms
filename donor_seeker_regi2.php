<?php include('header.php'); ?>

<?php include('Admin/function.php'); ?>


	<!-- backend validation -->
	<?php	
	$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

		<!-- backend validation End -->



	<!-- this is for donor registraton -->
	<div class="donor_reg"  style="background-color:;">
		
		<h2 class="text-center" style="background-color:#0616BC;color: #fff;padding: 5px;">Blood Donor/Blood Seeker Registration</h2>
	<div class="formstyle" style="border:;background-color:aliceblue;">	

				<p><span class="error" style="color: #FF0000">* required field.</span></p>

		<form action="" method="post" class="text-center">
			 <div class="col-md-12">
			 	<div class="col-md-6">
					<label>
						User Name: <input type="text" name="username" value="<?php echo $name;?>" placeholder="username" >
									<span class="error">* <?php echo $nameErr;?></span>
									
									
					</label><br><br>

					<!-- <label>
						Last Name: <input type="text" name="lastname" value="" placeholder="lastname" >
					</label><br><br> -->
					<label>
						Gender:
						  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
						  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
						  <span class="error">* <?php echo $genderErr;?></span>
						 
						  
					</label> <br><br>
					<label>
						Age: <input type="text" name="age"  pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" />
					</label><br><br>
					<label>
						Contact: <input type="number" name="contact"  pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no." />
					</label><br><br>
					<label>
						You are:<select name="type" >
									<option value="">Select</option>
									<option value="Blood Donor">Blood Donor</option>
									<option value="Blood Seeker">Blood Seeker</option>
								</select> 
					</label>
					<label>
						Your City:<select name="city" >
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
						Address: <input type="text" name="address" value="" placeholder="address" >
					</label><br><br>
					<label>
						Blood Group: <select name="bgroup" >
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
						Email: <input type="email" name="email"  value="<?php echo $email;?>" placeholder="Your email" >
								 <span class="error">* <?php echo $emailErr;?></span>
								 
					</label><br><br>

					<label>
						Password: <input type="password" name="password" value="" placeholder="password" />
					</label><br><br>

					<label>
						Confirm Password: <input type="password" name="password" value="" placeholder="Confirm password" >
					</label> <br>

					<input type="submit" value="Resister" name="submit"/> <br><br><br>
				<div/>
			</div>
		</form>


	</div>
	</div>
									

	<!-- validation and insertion -->


			<?php
						if(isset($_POST['submit'])){


							// validation
										
										  
										  
										    
										  

										  

										  


							// validation
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

							$sql = "INSERT INTO registration (username, gender,age,contact, type, city, address, bgroup, email, password)
							VALUES ('" . $_POST["username"] ."','" . $_POST["gender"] . "','" . $_POST["age"] . "','" . $_POST["contact"] . "','" . $_POST["type"] ."','" . $_POST["city"] . "','" . $_POST["address"] . "','" . $_POST["bgroup"] . "', '" . $_POST["email"] . "','" . $_POST["password"] . "' )";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>location.replace('regi_success_msg.php');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
							}

							$conn->close();
						}
					?> 



	<!-- validation and insertion End-->
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 

<!-- <?php include('regivalidate.php'); ?> 
 --></body>
</html>



