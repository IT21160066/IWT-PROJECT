<?php

        //Link the cinfiguration file

        require 'confi.php';

        updateData();
        function updateData()
        {
            global $con;
            $sql = "update book_form set id= '5', name='sandakelum ', email='san@gmail.com',
             phone='1234567890', address='0/1/0', news='dev'where id='0'" ;
            if($con->query($sql))
            {
                echo 'Update Successfully';
            }

            else
            {
                echo "Error :" .$con->error;
            }
        $con->close();
        }
?>