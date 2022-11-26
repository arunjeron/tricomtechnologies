<?php

$fname = $_POST['fname'];
$lname = $_POST['name'];
$email = $_POST['email'];
$messege = $_POST['texta'];



$from = 'arunkjeron98@gmail.com';
$to = 'arunjeron30@gamil.com';
$body ="fisrt name :$fname.\n".
       "last name  :$lname.\n".
       "emails      :$email.\n".
       "massege    :$messege.\n";
$header ="from :".$from.
        "reply-to :".$email;




mail($to,$subject,$body,$header,);
header("location:condect.html");

?>