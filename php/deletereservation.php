<?php
//Linking the configuration file
require 'cofig.php';
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/delete.css">
</head>
<body>

    <div class="content">
    
    <h4><span>The Kingsman Hotel</span></h4>
    
    </div>

    <div class="table">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h3>Delete Reservation Data</h3>
        Registration Number<input type="number" name="regNumber"><br/>
        <input type="submit" value="Delete" name="bttnSubmit" class="btn">
        <input type="reset" value="Reset" class="btn">
    </form>
    </div>
    <h2>Registration Form</h2>
</body>
</html>
<br/><br/>
<center>
<?php

function readData(){
    global $con;
    
    $sql = "SELECT * from reservations";
    ($result = $con->query($sql));
        if($result->num_rows > 0)
        { //read data
            echo ("<table border='1'>");
		while($row = $result->fetch_assoc()){
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
		}
		echo ("</table>");
            
        }

        else
        {
            echo "No results!";
        }
    }


//---------------------------Function deleteData()---------------------------

    function deleteData($regNumber)
    {
        global $con;
        $sql = "DELETE FROM reservations WHERE regNumber = '$regNumber'";
       
        
             if($con->query($sql))
            {
                echo "Deleted Successfully!" ."<br/>";
            }

            else
            {
                echo "Error : ".$con->error;
            }
        $con->close();
    }
readData();
    if(isset($_POST["bttnSubmit"]))
    {
        $regNumber = $_POST["regNumber"];
        if($regNumber!=""){
            deleteData($regNumber);
            readData();
        }
    }
?>
</center>