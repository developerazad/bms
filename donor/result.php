<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>

<!-- <?php include('function.php'); ?> -->



	<!-- this is for donor registraton -->
	<div class="search form-group"  style="background-color: #7faf81;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Search result</h3>
		
	</div>
			
			<?php include("config2.php"); 


					$sql = " SELECT * FROM registration WHERE type = '" . $_POST["type"]."' AND bgroup = '" . $_POST["bgroup"]."' AND city = '" . $_POST["city"]."' ";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32' class='table-responsive'>
							<tr>
								<th>Name</th>
								<th>Gender</th>
								<th>City</th>
								<th>Mobile</th>
								<th>Address</th>
								<th>Blood Group</th>
								<th>Type</th>
								<th>Email</th>
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['username']."</td>";
								echo "<td>".$row['gender']."</td>";
								echo "<td>".$row['city']."</td>";
								echo "<td>".$row['contact']."</td>";
								echo "<td>".$row['address']."</td>";
								echo "<td>".$row['bgroup']."</td>";
								echo "<td>".$row['type']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			
	
	<button style="margin-left:605px;background-color:#423a3c;;color:antiquewhite;width:115px;height:30px;margin-bottom:5px;">
	<a href="search.php">Search Again</a></button>
	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 


	
</body>
</html>