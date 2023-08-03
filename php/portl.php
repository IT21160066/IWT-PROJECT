<?php

require 'cofig.php';


if(isset($_POST["bttnsubmit"])){
  
    $firstName = $_POST["firstName"]; 
    $lastName = $_POST["lastName"]; 
    $country = $_POST["country"];
    $identy = $_POST["identy"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $psswd = $_POST["psswd"];
    $repsswd = $_POST["repsswd"];
    $rooms=$_POST["rooms"];
    $adult=$_POST["adult"];
    $child=$_POST["child"];
    $chekin= date('Y-m-d',strtotime($_POST['chekin']));
    $chekout=date('Y-m-d',strtotime($_POST['chekout']));
    $roomtype=$_POST["roomtype"];

    $sql = "INSERT INTO reservations(firstName, lastName,  country,identy, email, gender, psswd, repsswd,rooms,adult,child,chekin,chekout, roomtype)
    VALUES('$firstName', '$lastName', '$country', '$identy', '$email', '$gender', '$psswd', '$repsswd','$rooms','$adult','$child','$chekin','$chekout','$roomtype')";

    if($con->query($sql)){

        echo "Inserted Successflly";
    }

    else
    {
        echo "Error: ".$con->error; 
    }
}
    $con->close();
?>
</body>
</html>
