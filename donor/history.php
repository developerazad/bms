<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>



	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Save Your Work</h3>
		<div class="formstyle" style="float: right;padding: 10px;border: 1px solid lightgrey;margin-right: 376px; margin-bottom: 10px;background-color:#f7f7f7;;">
			<form action="" method="post" class="text-center">
					<label>
						Patient Name: <input type="text" name="name" value="" placeholder="">
					</label><br><br>
					<label>
						Address: <input type="text" name="address" value="" placeholder="">
					</label><br><br>
					<label>
						No. of Units: <input type="number" name="unit"/>
					</label><br><br>
					<label>
						Date: <input type="date" name="date" placeholder="dd-mm-yyyy" style="width:195px;">	
					</label><br><br>
					

					<button name="submit" type="submit" style="color:#000;background-color: #fff;
    margin-left: 240px;width: 60px;">Save</button> <br>

					

			</form> <br>
		</div>	
	</div>
			
			

				<?php include("config.php"); ?>
				<?php 
					if (isset($_POST["submit"])) {
					$sql = "INSERT INTO donation (name, address, unit, dates, email)
							VALUES ('" . $_POST["name"] ."','" . $_POST["address"] . "','" . $_POST["unit"] . "','" . $_POST["date"] . "','". $_SESSION["email"] ."')";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('Record Has been Saved!');</script>";
							} else {
							    echo "<script>alert('Data can not be saved!')<script>";
							}

							$conn->close();
						}


				 ?>

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
