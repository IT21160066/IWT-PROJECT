<?php
$con = new mysqli("localhost", "root", "", "iwtproject" );

if ($con->connect_error)//check the connection
{
    die("connection failed : " .$con->connect_error);
}
else{
    echo "Connected successfully";
    echo "<br>";
}
?>