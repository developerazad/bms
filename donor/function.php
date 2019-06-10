<?php 
	function makeconnection(){
		$servername= "localhost";
		$username= "root";
		$password= "";
		// $dbname= "projectmms";
		$dbname= "projectmms";

		$conn= mysqli_connect($servername, $username, $password, $dbname);//create connection
		if(!$conn){
			die("connection failed!". mysqli_connect_error());
		} return $conn;
	}
	

 ?>