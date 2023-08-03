<?php
//Linking the configuration file
require 'config.php';
updateData();
function updateData()
{
    global $con;
    $sql = "update experience set firstName = 'lasith',lastName = 'thungesh', identy = '123432VG',country ='Canada',regNumber = '2',
    email ='laknal@gmail.com', gender ='f',activity ='1,3,4', membr = '2',  signupw = 'on', psswd = 'qwertzxc',
    repsswd = 'qwertzxc', tcheckbx ='on' WHERE regNumber= '1'";

    if($con->query($sql))
    {
        echo "Updated successfully";
        }
        else
        {
        echo "Error: ".$con->error;
        }
    $con->close();
    
}

?>