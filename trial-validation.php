<h1 class="text-center">Donor Registration</h1>
		<form action="" method="post" class="text-center">
			Donor Name: <input type="text" name="dname"  placeholder="your name" pattern="[a-zA-Z _]{4,15}" title="please enter only character between 4 to 15 for donor name" required="required"><br>
			Gender: <input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="gender">Female	<br>	
			Age: <input type="number" name="age" required="required" pattern="[0-9]{2,2}" title="please enter the number between 2 to 2"><br>
			Mobile: <input type="number" name="mobile" required="required" pattern="[0-9]{10,11}" title="please enter the number between 10 to 11 for mobile no."><br>
			Blood Group: 
			<select name="b_group" id="">
				<option value="">Select</option>
				<option value="">O+</option>
				<option value="">O-</option>
				<option value="">AB+</option>
				<option value="">AB-</option>
				<option value="">A+</option>
				<option value="">A-</option>
				<option value="">B+</option>
				<option value="">B-</option>
			</select><br>
			E-mail: <input type="email" name="mail" required="required" /> <br>
			Password: <input type="password" name="pwd" required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password" /> <br>
			Confirm Password: <input type="password" name="conpwd" required="required" pattern="[a-zA-Z0-9 ]{2,10}" title="please enter only character or numbers between 2 to 10 for password" /> <br>
			Upload pic: <input type="file" name="fileToUpload" id="pic" /> 

			<input type="submit" value="Resistered" name="sbmt" style="background-color:linear-gradient(#900,#D50000);width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:#e05d35; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; " /> <br>

		</form>

		<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>