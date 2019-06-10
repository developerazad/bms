<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>

<?php include('function.php'); ?>



	<!-- this is for donor registraton -->
	<div class="">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Search Here</h3>

			
		<div class="" >
		 	<!-- new search form -->
			<div class="col-md-12">

				<div class="col-md-4"></div>
				<div class="col-md-4 border">
					<form class="well form-horizontal" action="result.php" method="post" id="contact_form">
					    <fieldset>

					     

					      <!-- Text input-->

					     <div class="form-group">
					        <label class="col-md-4 control-label">Select Type</label>
					        <div class="col-md-4 selectContainer">
					          <div class="input-group">
					           <!--  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span> -->
					            <select name="type" class="form-control selectpicker">
					                <option value="">-Select-</option>
					               <option>Blood Donor</option>
									<option>Blood Seeker</option>
					             </select>
					          </div>
					        </div>
					      </div>

					      <!-- Text input-->

					      <div class="form-group">
					        <label class="col-md-4 control-label">Select City</label>
					        <div class="col-md-4 selectContainer">
					          <div class="input-group">
					            <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span> -->
					            <select name="city" class="form-control selectpicker">
					                <option value="">-Select-</option>
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
					        <label class="col-md-4 control-label">BloodGroup </label>
					        <div class="col-md-4 selectContainer">
					          <div class="input-group">
					          <!--   <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span> -->
					            <select name="bgroup"  class="form-control selectpicker">
					                   <option value="">-Select-</option>
								       <option>O+</option>
										<option>O-</option>
										<option>AB+</option>
										<option>A+</option>
										<option>A-</option>
										<option>B+</option>
										<option>B-</option>
						             </select>
					          </div>
					        </div>
					      </div>
					      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					      <button type="submit" name="submit"  class="btn btn-default">Login</button>

					      <!-- Text input-->

					     
					    </fieldset>
  </form>
				</div>
				<div class="col-md-4"></div>

			</div>

		 	<!-- new search form -->
		 	</div>
	</div>
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
 	 	 



</body>
</html>
