<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>



	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Donations</h3>
		<div class="formstyle" style="float: right;padding: 10px;border: 1px solid lightgrey;margin-right:80px; margin-bottom: 10px;">
			<form method="post" enctype="multipart/form-data"> <br>
	   <table cellpadding="20" cellspacing="20" width="1000px" height=""  style="margin:auto;background-color:#f9f9f9;color:#151314;" >

	  		 <tr><td colspan="9" align="center"><h3 class="text-center"><u>Whom I donated Blood</u></h3></td></tr>
			 

	  		<tr  align="center" class="bold">            
	            <th>Camp/PatientName</th>
	            <th>Addrss</th>
	            <th>No. of Unit</th>
	            <th>Date</th>
	            
	        </tr>
	                   

				<?php include('config2.php'); ?>

				<?php
					$s="SELECT * FROM donation WHERE email='" . $_SESSION["email"] . "'";
						$result=mysqli_query($conn,$s);
						$r=mysqli_num_rows($result);
						//echo $r;
						while($data=mysqli_fetch_array($result)){

									echo"<tr>
											
											<td>$data[1]</td>
											<td>$data[2]</td>
											<td>$data[3]</td>
											<td>$data[4]</td>
											
										</tr>";
								}
								mysqli_close($conn);
				?>


		</table> <br>
	</form> <br>
		</div>	
	</div>
			
			

			
	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
