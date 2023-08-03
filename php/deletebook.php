<?php
//Linking the configuration file
require 'confi.php';
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/deletebook.css">
</head>
<body>

    <div class="book_form">
    
    <h4><span>The Kingsman Hotel</span></h4><h1>Just Relax And Enjoy</h1>
    <h2>Customer ID</h2>
    </div>

    <div class="book_form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h3>Delete ID Data</h3>
        ID<input type="number" name="id"><br/>
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
    
    $sql = "SELECT * from book_form";
    ($result = $con->query($sql));
        if($result->num_rows > 0)
        { //read data
            echo ("<table border='1'>");
		while($row = $result->fetch_assoc()){
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


//---------------------------Function deleteData()---------------------------

    function deleteData($id)
    {
        global $con;
        $sql = "DELETE FROM book_form WHERE id = '$id'";
       
        
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
        $id = $_POST["id"];
        if($id!=""){
            deleteData($id);
            readData();
        }
    }
?>
</center>