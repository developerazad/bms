<?php include('header.php'); ?>






  <!-- this is for donor registraton -->
  <div class="donor_reg"  style="background-color:black;">
    
    <h3 class="text-center" style="background-color:#272327;color:#fff;padding:5px;">Blood Donor/Blood Seeker Registration</h3>
  <div class="donor_reg2" style="background-color:aliceblue;">  

    
    <form class="well form-horizontal" action="action.php" method="post" id="contact_form" enctype="multipart/form-data">
    <fieldset>


      <!-- Form Name -->
      <legend>
        <center>
          <h2><b>Registration Form</b></h2>
        </center>
      </legend><br>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Full Name</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="username" placeholder="First Name" class="form-control" type="text">
          </div>
        </div>
      </div>

     

      <!-- <div class="form-group">
        <label class="col-md-4 control-label">Username</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="username" placeholder="Username" class="form-control" type="text">
          </div>
        </div>
      </div>
 -->
      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Password</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input name="password" placeholder="Password" class="form-control" type="password">
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Confirm Password</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input name="confirm_password" placeholder="Confirm Password" class="form-control" type="password">
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">E-Mail</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input name="email" placeholder="E-Mail" class="form-control" type="email">
          </div>
        </div>
      </div>

       <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Your City</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-tree-deciduous"></i></span>
            <input name="city" placeholder="Your City" class="form-control" type="text">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">Blood Group</label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-tint"></i></span>
            <select name="bgroup" class="form-control selectpicker">
                    <option value="">Select your Blood Group</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
             </select>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label">Your Type</label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-tint"></i></span>
            <select name="type" class="form-control selectpicker">
                    <option value="">Select</option>
                    <option value="Blood Donor">Blood Donor</option>
                    <option value="Blood Seeker">Blood Seeker</option>
              </select>
          </div>
        </div>
      </div>

      <!-- Text input-->

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Contact</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input name="contact" placeholder="(880)" class="form-control" type="text">
          </div>
        </div>
      </div>

      <!-- Select Basic -->

      <!-- Success message -->
      <!-- <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div> -->

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4"><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="submit" class="btn btn-warning" name="submit" style="background-color:#000;width:100px;height:36px;margin-left:200px;border-radius:8px;">Register</button>
          <!-- <input type="submit" value="Register" name="submit"> -->
        </div>
      </div>

      

    </fieldset>
  </form>
</div>
    


  </div>
  </div>



  
  

  
 <?php include('footer.php'); ?>


  
  </div><!--  containerFluid Ends -->




  <script src="js/bootstrap.min.js"></script>


 

</body>
</html>


