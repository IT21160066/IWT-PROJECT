<?php
//Linking the configuration file
require 'cofig.php';


    $sql = "SELECT * from reservations";
    if($result = $con->query($sql)){
        if($result->num_rows > 0)
        {
                echo ("<table border='1'>");
                
            while($row = $result->fetch_assoc())
            {
                echo ("<tr>");
                echo ("<td>" . $row['regNumber']. "</td>");
                echo ("<td>" . $row['firstName']. "</td>");
                echo ("<td>" . $row['lastName'] . "</td>");
                echo ("<td>" . $row['country'] . "</td>");
                echo ("<td>" . $row['identy'] . "</td>");
                echo ("<td>" . $row['email'] . "</td>");
                echo ("<td>" . $row['gender'] . "</td>");
                echo ("<td>" . $row['psswd'] . "</td>");
                echo ("<td>" . $row['repsswd']. "</td>");
                echo ("<td>" . $row['rooms'] . "</td>");
                echo ("<td>" . $row['psswd'] . "</td>");
                echo ("<td>" . $row['child'] . "</td>");
                echo ("<td>" . $row['chekin']. "</td>");
                echo ("<td>" . $row['chekout']. "</td>");
                echo ("<td>" . $row['roomtype']. "</td>");

                echo ("</tr>");

            }
            echo ("</table>");
        }

        else
        {
            echo "No results!";
        }
    }
    else{
        echo "Error: ".$con->error;
    }

$con->close();
?>