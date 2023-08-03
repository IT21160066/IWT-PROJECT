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
	
	$sql = "SELECT id,name,question FROM test";
	
	$result = $conn->query($sql);
	
	if($result->num_rows>0){
		
		echo ("<table border='1'>");
		
		while($row = $result->fetch_assoc()){
			
			echo ("<tr>");
			echo ("<td>" . $row['id']. "</td>");
			echo ("<td>" . $row['name']. "</td>");
			echo ("<td>" . $row['question']. "</td>");
			echo ("</tr>");
			}
			echo ("</table>");
			
	}else {
		echo "No you don't have result";
	}
	
	$conn->close();
?>