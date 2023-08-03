<?php
	
	if(isset($_POST['name']) && isset($_POST['question'])){
		include 'db_conn.php';
		
		function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		
		$name = validate($_POST['name']);
		$question = validate($_POST['question']);
		
		if (empty($question) || empty($name)) {
			header("Location: FAQ.html");
		}else {
			$sql = "INSERT INTO test(name, question) VALUES('$name','$question')";
			
			$res = mysqli_query($conn, $sql);
			
			if ($res){
				echo "Your question recode successfully!";
			}else {
				echo "Your question recode unsuccessfull!";
			}
		}
	}else{
		header("Location: FAQ.html");
	}
?>