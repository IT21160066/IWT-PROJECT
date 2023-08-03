<?php
//Linking the configuration file
require 'confi.php';


    $sql = "SELECT * FROM book_form";
    if($result = $con->query($sql)){
        if($result->num_rows > 0)
        {
                echo ("<table border='1'>");
                
            while($row = $result->fetch_assoc())
            {
                echo ("<tr>");
                echo ("<td>" . $row['id']. "</td>");
                echo ("<td>" . $row['name']. "</td>");
                echo ("<td>" . $row['email'] . "</td>");
                echo ("<td>" . $row['phone'] . "</td>");
                echo ("<td>" . $row['address'] . "</td>");
                echo ("<td>" . $row['news']. "</td>");
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