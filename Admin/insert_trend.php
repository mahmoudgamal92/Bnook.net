<?php
session_start();
include '../components/dbconnect.php';
$title = $_POST['title'];
$content = htmlspecialchars($_POST["content"]);
$date = date("Y/m/d");
if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// image file directory
  	$target = "../uploads/".basename($image);
$sql="insert into trend (title ,content ,thumbnail ,date_added ) values
('$title','$content','$image','$date')";
}
if (mysqli_query($con,$sql) 
    && move_uploaded_file($_FILES['image']['tmp_name'], $target))

{
header("Location:add_trend.php?added=true");
}
else{
die( "could not insert news right now : ". mysqli_error($con));
}
mysqli_close($con);
?>