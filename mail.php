<?php

$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['message'];

$mailheader = "From:" . $name . "<" . $email . ">\r\n";



$messages= "Name:".$name."\r\n" ."address:" . $address . "\r\n" ."email :".$email."\r\n"."Contact:".$contact."\r\n". "message:". $message . "\r\n";


$recipient = "mayureshgurav0@gmail.com";

 mail($recipient,$name,$messages ,$mailheader)
or die("Error!");




?>
