<?php

$fullname=$_POST['txtfullName'];
$email=$_POST['txtEmail'];
$phone=$_POST['txtPhone'];
$message= $_POST['txtMessage'];

$con=mysqli_connect("localhost","root","","AutoGlass");

$query= "INSERT INTO customer (db_fullName, db_email, db_phone, db_Message) VALUES ('$fullname','$email','$phone','$message')";

mysqli_query($con,$query) or die(mysqli_error($con));

    header("location:contact.html");

?>