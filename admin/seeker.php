<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>

	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Blood Donor And Seeker List</h3>
		
		
	</div>
		
			<div class="form-group all_user" style="margin-top:0px; margin-left: 40px;">
				<?php include('config2.php'); ?>
				<?php 
					$sql = " SELECT * FROM registration WHERE type='Blood Seeker' ";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32' class='table table-hover'>
							<tr>
								<th>ID</th>
								<th>Name</th>
								
								<th>City</th>
								<th>Mobile</th>
								<th>Address</th>
								<th>Blood Group</th>

								<th>Type</th>
								<th>Action</th>
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['donar_id']."</td>";
								echo "<td>".$row['username']."</td>";
								
								echo "<td>".$row['city']."</td>";
								echo "<td>".$row['contact']."</td>";
								echo "<td>".$row['address']."</td>";
								echo "<td>".$row['bgroup']."</td>";
								
								echo "<td>".$row['type']."</td>";
								echo "<td><button type='submit' name='submit' style='color:#000;'>Update</button><button type='submit' name='submit' style='color:#000;'>Delete</button></td>";
								
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			</div>
		
	
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>