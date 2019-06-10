<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>

<?php include('function.php'); ?>



	<!-- this is for donor registraton -->
	<div class="search" style="background-color:;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Search Here</h3>

			<div class="formstyle" style="border: 1px solid lightgrey;background-color: aliceblue;width:491px;height: 165px;padding: 50px;margin-left:340px;margin-bottom: 11px;">

					<form action="result2.php" method="post" class="form-group">

					<!-- testing -->
					<!-- <label>
						Select Type:<select name="type" type="text" style="width: 110px;margin-right: 175px;" />
												<option>Select</option>
												<option>Blood Donor</option>
												<option>Blood Seeker</option>
												
											</select>

					</label> -->
					<!-- testing end-->

					<label>
						 Blood Group:<select name="bgroup" type="text" style="width: 110px;margin-right: 175px;" />
												<option>Select</option>
												<option>O+</option>
												<option>O-</option>
												<option>AB+</option>
												<option>AB-</option>
												<option>A+</option>
												<option>A-</option>
												<option>B+</option>
												<option>B-</option>
											</select>

					</label>
					<button name="submit" type="submit" style="float: right;margin-right: 86px;margin-top: -31px;">Search</button> <br>
					
					</form>

		 	</div>
	</div>
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
 	 	 

<<!-- ?php 
	if(isset($_POST["sbmt"])){
		//header("location:result.php?bg=".$_POST["s2"]);
		echo "<script>location.replace('result.php?bg=". $_POST["s2"] ."');</script>";
	}

?>
 -->

</body>
</html>