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
              
              $sql1 = "SELECT * FROM registration WHERE email='".$_POST["email"]."' ";
              $result = $conn->query($sql1);
              if ($result->num_rows > 0) {
                  echo "<script>alert('Sorry, E-mail already exist!');</script>";
                }else{

                    $sql = "INSERT INTO registration (username, password,email, city, bgroup,type, contact)
                   VALUES ('" . $_POST["username"] ."','" . $_POST["password"] . "','" . $_POST["email"] . "','" . $_POST["city"] . "','" . $_POST["bgroup"] ."','" . $_POST["type"] . "','" . $_POST["type"] . "' )";
                    if ($conn->query($sql)===TRUE) {
                      echo "<script>location.replace('regi_success_msg.php');</script>";
                    } else {
                      echo "There was an error!";
                    }
                    $conn->close();
                }
            }
          ?> 



