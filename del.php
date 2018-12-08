<?php 
	$del = $_POST["del"]; 
 
	$servername = "localhost"; 
	$dbusername = "root"; 
	$dbpassword = ""; 
	$dbname="stationary"; 
 
	$conn = mysqli_connect($servername, $dbusername, $dbpassword,$dbname);
	$sql = "DELETE FROM userlist WHERE mobno=$del"; 
 	$query=mysqli_query($conn,$sql);
	if ($conn->query($sql) === TRUE) 
	{     
		echo "Record deleted successfully"; 
	} 
	else 
	{     
		echo "Error deleting record: " . $conn->error; 
	} 
 
	$conn->close(); 
?> 