<?php
//Linking the configuration file
require 'config.php';
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/formp.css">
</head>
<body>

    <div class="formhead">
    
    <h4><span>The Kingsman Hotel</span></h4><h1>Just Relax And Enjoy</h1>
    <h2>Registration Form</h2>
    </div>

    <div class="formlft">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h3>Delete Experience Data</h3>
        Registration Number<input type="number" name="regNumber"><br/>
        <input type="submit" value="Delete" name="bttnSubmit">
        <input type="reset" value="Reset">
    </form>
    </div>
</body>
</html>
<br/><br/>
<center>
<?php

function readData(){
    global $con;
    
    $sql = "SELECT * from experience";
    ($result = $con->query($sql));
        if($result->num_rows > 0)
        { //read data
            echo ("<table border='1'>");
		while($row = $result->fetch_assoc()){
			echo ("<tr>");
			echo ("<td>". $row['firstName']. "</td>");
			echo ("<td>". $row['lastName'] . "</td>");
			echo ("<td>". $row['regNumber'] . "</td>");
			echo ("<td>". $row['country'] . "</td>");
            echo ("<td>". $row['identy']. "</td>");
			echo ("<td>". $row['email'] . "</td>");
			echo ("<td>". $row['gender'] . "</td>");
			echo ("<td>". $row['activity'] . "</td>");
            echo ("<td>". $row['membr']. "</td>");
			echo ("<td>". $row['signupw'] . "</td>");
			echo ("<td>". $row['psswd'] . "</td>");
			echo ("<td>". $row['repsswd'] . "</td>");
            echo ("<td>". $row['tcheckbx']. "</td>");
			echo ("<tr>");
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
        $sql = "DELETE FROM experience WHERE regNumber = '$regNumber'";
       
        
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