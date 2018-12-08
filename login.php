<?php
	$name=$_POST["lname"];
	$mono=$_POST["lno"];
	$pwd=$_POST["lpwd"];
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname="stationary";
	$conn = mysqli_connect($servername, $dbusername, $dbpassword,$dbname);
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}
	else
	{
		echo"connection is estabilished<br>";
	}
	$sql = "SELECT name FROM userlist WHERE mobno=$mono";
	
	$query=mysqli_query($conn,$sql);
	//$user = mysqli_fetch_assoc($query);

	if(mysqli_num_rows($query)>0)
		echo "you are logged in";
	else
		echo "not connected";
	
	$conn->close();
?>