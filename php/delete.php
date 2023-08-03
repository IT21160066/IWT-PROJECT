<?php
	
	$sname="localhost";
	$uname="root";
	$password="";
	$db_name="iwtproject";
	
	$conn = mysqli_connect($sname, $uname, $password, $db_name);
	
	if (!$conn){
		echo "Connection failed!";
		exit();
	}
	
	$sql = "DELETE FROM  test WHERE id=24";
	
	if($conn->query($sql) === TRUE){
		echo "Deleted!";
	}else {
		echo "Not Deleted!";
	}

	$conn->close();
?>
