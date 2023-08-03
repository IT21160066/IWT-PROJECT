<?php include_once 'config1.php'; ?>
<?php
	$name = $_post['name'];
	$userpassword = $_post['userpassword'];
	
	//DB connection
	$conn = new mysqli('localhost','root','','loggin');
	if($conn->connecting_error){
		die('Connection Failed :'.$conn->connecting_error);
	}else{
		$stmt = $conn->prepare("insert into signin(name,userpassword)
			values(?,?)");
		$stmt->bind_param("ss",$name,$userpassword);
		$stmt->execute();
		echo "registration successfully..";
		$stmt->close();
		$conn->close();
	}
?>