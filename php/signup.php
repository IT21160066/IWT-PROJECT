<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$userpassword=$_POST['userpassword'];
	$userpword=$_POST['userpword'];
	
	//database connection
	$conn=new mysqli('localhost','root','','signup');
	if($conn->connect_error){
		die('Connection Faild :'.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into sign(name,email,userpassword,userpword)
			values(?,?,?,?)");
		$stmt->bind_param("ssss",$name,$email,$userpassword,userpword);
		$stmt->execute();
		echo"registration SUccessfully...";
		$stmt->close();
		$conn->closs();
?>