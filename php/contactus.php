<?php include_once 'server.php'; ?>
<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Database connection
$conn = new mysqli ('localhost', 'root', '', 'iwtproject');
if($conn->connect_error){
    die('Connection Failed:'.$conn->connect_error);
} 
else{
    $stmt = $conn->prepare("insert into complains(firstname,lastname,email,subject,message)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$firstname,$lastname,$email,$subject,$message);
    $stmt->execute();
    echo "Message sent Successfully....";
    $stmt->close();
    $conn->close();
}
?>