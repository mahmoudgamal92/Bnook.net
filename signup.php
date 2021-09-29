<?php
include_once 'components/dbconnect.php';
$full_name = $_POST['user_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = md5($_POST['pwd']);
$register_date = date("Y-m-d") ;

$token = uniqid();
$cmd="insert into users (user_name, email, phone, password, register_date) values ('$full_name','$email','$phone','$password','$register_date')";
if (mysqli_query($con,$cmd))
{
    header("Location:./index.php?registered=true");
}
else{
die( "could not insert news right now : ". mysqli_error($con));
}
mysqli_close($con);
?>