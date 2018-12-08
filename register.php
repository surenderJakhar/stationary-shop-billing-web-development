<?php
	$name=$_POST["name"];
	$mobno=$_POST["no"];
	$pwd=$_POST["pwd"];
	$mail=$_POST["mail"];
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname="stationary";
	$conn = mysqli_connect($servername, $dbusername, $dbpassword,$dbname);
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "INSERT INTO userlist (name,mobno,pwd,email) VALUES('$name','$mobno','$pwd','$mail')";
	
	header( "refresh:2;url=http://localhost/final/shopperregistr.html" );

	if(mysqli_query($conn,$sql)){
		echo "you are successfully registered please logg in to continue";
	}
	else{
		echo "Error in registration  please try again";
	}
	
	$conn->close();
?>