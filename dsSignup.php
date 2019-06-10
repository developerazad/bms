<!--  validation -->
    <?php 
  $name = $username = $password = $confirm_password = $email = $city = $bgroup = $contact = $type = "";

  $errname = $errusername = $errpassword = $errconfirm_password = $erremail = $errcity = $errbgroup = $errcontact = $errtype ="";

  if ($_SERVER['REQUEST_METHOD']=="POST") {
    // if(isset($_POST['submit'])){
          if (empty($_POST["name"])) {
            $errname = "Full Name is required";
          } else {
            $name = validate($_POST['name']);
            //check if name only contains letter n white space
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
              $errname = "only letters and white space are allowed";
            }

          }

          if (empty($_POST["username"])) {
            $errusername = "Username is required";
          } else {
            $username = validate($_POST['username']);
          }

          if (empty($_POST["password"])) {
            $errpassword = "password is required";
          } else {
            $password = validate($_POST['password']);
          }
          if (empty($_POST["confirm_password"])) {
            $errconfirm_password = "Confirm Password is required";
          } else {
            $confirm_password = validate($_POST['confirm_password']);
          }

          if (empty($_POST["email"])) {
            $erremail = "email is required";
          } 
          else {
            $email = validate($_POST['email']);
            // check the format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $erremail = "Invalid email format";
            }
          }

          if (empty($_POST["city"])) {
            $errcity = "City is required";
          } else {
            $city = validate($_POST['city']);
          }

          if (empty($_POST["bgroup"])) {
            $errbgroup = "Blood Group is required";
          } else {
            $bgroup = validate($_POST['bgroup']);
          }

          if (empty($_POST["contact"])) {
            $errcontact = "contact is required";
          } else {
            $contact = validate($_POST['contact']);
          }

          if (empty($_POST["type"])) {
            $errtype = "Your type is required";
          } else {
            $type = validate($_POST['type']);
          }

          
    
    
  } 

  function validate($data){
      $data = trim($data);
      $data = htmlspecialchars($data);
      $data = stripcslashes($data);
      return $data;
    }
  

 ?>
<!--  validation -->
<?php include('header.php'); ?>


<!-- <?php include('admin/function.php'); ?> -->



  <!-- this is for donor registraton -->
  <div class="donor_reg"  style="background-color:black;">
    
    <h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Blood Donor/Blood Seeker Registration</h3>
  <div class="donor_reg2" style="background-color:aliceblue;">  

    
    <form class="well form-horizontal" action=" " method="post" id="contact_form">
        <fieldset>
        

      <div class="form-group">
        <label class="col-md-4 control-label">Full Name *</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
           
            <input name="username" placeholder="Full Name" class="form-control" type="text" value="<?php echo $username; ?>">
            <span style="color: red;"><?php echo $errusername; ?></span>
          </div>
        </div>
      </div>

     
       <div class="form-group">
        <label class="col-md-4 control-label">Your sex </label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
          
            <select name="gender" class="form-control selectpicker" style="width:197px;">
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <span style="color: red;"></span>
             </select>
          </div>
        </div>
      </div>
      
      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Contact No. *</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
           
            <input name="contact" placeholder="(880)" class="form-control" type="text">
            <span style="color: red;"><?php echo $errcontact; ?></span>
          </div>
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">You are </label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
          
            <select name="type" class="form-control selectpicker" style="width:197px;">
                    <option value="">Select</option>
                    <option value="Blood Donor">Blood Donor</option>
                    <option value="Blood Seeker">Blood Seeker</option>
                    <span style="color: red;"><?php echo $errtype; ?></span>
             </select>
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">Your City </label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
          
            <select name="city" class="form-control selectpicker" style="width:197px;">
                    <option value="">Select your City</option>
                    <option value="">Select</option>
                    <option value="Bogra">Bogra </option>
                    <option value="Barguna">Barguna</option>
                    <option value="Barisal">Barisal </option>
                    <span style="color: red;"></span>
             </select>
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">Address *</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
           
            <input name="address" placeholder="Address" class="form-control" type="text">
            <span style="color: red;"><?php  ; ?></span>
          </div>
        </div>
      </div>
     

       <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">Blood Group *</label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
          
            <select name="bgroup" class="form-control selectpicker" style="width:197px;">>
                    <option value="">Select Blood Group</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <span style="color: red;"><?php echo $errbgroup; ?></span>
             </select>
          </div>
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">E-mail *</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
           
            <input name="email" placeholder="E-mail" class="form-control" type="email">
             <span style="color: red;"><?php echo $erremail; ?></span>
          </div>
        </div>
      </div>

    <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Password *</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
           
            <input name="password" placeholder="Password" class="form-control" type="password">
            <span style="color: red;"><?php echo $errpassword; ?></span>
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Confirm Password *</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
           
            <input name="confirm_password" placeholder="Confirm Password" class="form-control" type="password">
            <span style="color: red;"><?php echo $errconfirm_password; ?></span>
          </div>
        </div>
      </div>
      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
          <button type="submit" class="" style="background-color:#fff;height:31px;border-radius:4px;width:90px;margin-left:105px;">Submit</button>
        </div>
      </div>

    </fieldset>
  </form>
</div>
    


  </div>
 <!--  </div> -->



  <!-- validation and insertion -->


      <?php
            if(isset($_POST['submit'])){
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
              

              $sql = "INSERT INTO registration (username, gender,contact, type, city, address, bgroup, email, password)
              VALUES ('" . $_POST["username"] . "','" . $_POST["gender"] . "','" . $_POST["contact"] . "','" . $_POST["type"] ."','" . $_POST["city"] . "','" . $_POST["address"] . "','" . $_POST["bgroup"] . "', '" . $_POST["email"] . "','" . $_POST["password"] . "' )";

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


