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
	
	$sql = "UPDATE test SET name= 'Piumi', question='How many rooms have your hotel?'  WHERE id=21";
	
	if($conn->query($sql) === TRUE){
		echo "updated!";
	}else {
		echo "Not updated!";
	}

	$conn->close();
?>