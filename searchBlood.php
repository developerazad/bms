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

			<div class="formstyle" style="border: 1px solid lightgrey;background-color: aliceblue;width:491px;height:200px;padding: 50px;margin-left:340px;margin-bottom: 11px;">

					<form action="result.php" method="post" class="form-group">

					<!-- testing -->
					<label>
						<!-- Select Type: --><select name="type" type="text" style="width:177px;margin-right: 175px;" />
												<option>-Select Type-</option>
												<option>Blood Donor</option>
												<option>Blood Seeker</option>
												
											</select>

					</label>
					<!-- testing end-->

					<label>
						 <!-- Location: --><select name="city" type="text" style="width: 177px;margin-right: 175px;" />
												<option>-Select City-</option>
												<option>Dhaka</option>
												<option>Dinajpur</option>
												<option>Rangpur</option>
												<option>Thakurgaon</option>
												<option>Nilphamari</option>
												
											</select>

					</label>

					<label>
						 <!-- Blood Group: --><select name="bgroup" type="text" style="width: 177px;margin-right: 175px;" />
												<option>-Select Blood Group-</option>
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
					<button name="submit" type="submit" style="color:#000;float: right;margin-right: 86px;margin-top: -31px;">Search</button> <br>
					
					</form>

		 	</div>

		 	<!-- new search form -->
				<div class="col-md-12">

				<div class="col-md-4"></div>
				<div class="col-md-4 border">
					<form method="post" action="result.php">
						  <div class="form-group">
					        <label class="col-md-4 control-label">Department / Office</label>
						        <div class="col-md-4 selectContainer">
						          <div class="input-group">
						            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
						            <select name="type" class="form-control selectpicker">
						                <option>-Select Type-</option>
										<option>Blood Donor</option>
										<option>Blood Seeker</option>
						             </select>
						          </div>
						        </div>
					      </div>


					      <div class="form-group">
					        <label class="col-md-4 control-label">Department / Office</label>
						        <div class="col-md-4 selectContainer">
						          <div class="input-group">
						            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
						            <select name="city" class="form-control selectpicker">
						                <option>-Select City-</option>
										<option>Dhaka</option>
										<option>Dinajpur</option>
										<option>Rangpur</option>
										<option>Thakurgaon</option>
										<option>Nilphamari</option>
						             </select>
						          </div>
						        </div>
					      </div>

					      <div class="form-group">
					        <label class="col-md-4 control-label">Department / Office</label>
						        <div class="col-md-4 selectContainer">
						          <div class="input-group">
						            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
						            	<select name="bgroup" type="text"/>
												<option>-Select Blood Group-</option>
												<option>O+</option>
												<option>O-</option>
												<option>AB+</option>
												<option>AB-</option>
												<option>A+</option>
												<option>A-</option>
												<option>B+</option>
												<option>B-</option>
										</select>
						          </div>
						        </div>
					      </div>

					</form><br>&nbsp;&nbsp;&nbsp;
				</div>
				<div class="col-md-4"></div>

			</div>

		 	<!-- new search form -->
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

			<div class="col-md-12">

				<div class="col-md-4"></div>
				<div class="col-md-4 border">
					<form method="post" action="result.php">
						  <div class="form-group">
					        <label class="col-md-4 control-label">Department / Office</label>
						        <div class="col-md-4 selectContainer">
						          <div class="input-group">
						            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
						            <select name="type" class="form-control selectpicker">
						                <option>-Select Type-</option>
										<option>Blood Donor</option>
										<option>Blood Seeker</option>
						             </select>
						          </div>
						        </div>
					      </div>


					      <div class="form-group">
					        <label class="col-md-4 control-label">Department / Office</label>
						        <div class="col-md-4 selectContainer">
						          <div class="input-group">
						            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
						            <select name="city" class="form-control selectpicker">
						                <option>-Select City-</option>
										<option>Dhaka</option>
										<option>Dinajpur</option>
										<option>Rangpur</option>
										<option>Thakurgaon</option>
										<option>Nilphamari</option>
						             </select>
						          </div>
						        </div>
					      </div>

					      <div class="form-group">
					        <label class="col-md-4 control-label">Department / Office</label>
						        <div class="col-md-4 selectContainer">
						          <div class="input-group">
						            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
						            	<select name="bgroup" type="text"/>
												<option>-Select Blood Group-</option>
												<option>O+</option>
												<option>O-</option>
												<option>AB+</option>
												<option>AB-</option>
												<option>A+</option>
												<option>A-</option>
												<option>B+</option>
												<option>B-</option>
										</select>
						          </div>
						        </div>
					      </div>

					</form><br>&nbsp;&nbsp;&nbsp;
				</div>
				<div class="col-md-4"></div>

			</div>