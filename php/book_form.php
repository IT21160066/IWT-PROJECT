<?php

require 'confi.php';

   $connection = mysqli_connect('localhost','root','','iwtproject');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $news = $_POST['news'];
      

      $request = " insert into book_form(name, email, phone, address, news) values('$name','$email',$phone,'$address','$news') ";
      mysqli_query($connection, $request);
      
      header('location:book.php'); 


   }
   else{
      echo 'something went wrong please try again!';
   }

?>