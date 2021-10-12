<?php
session_start();
include '../components/dbconnect.php';
$content = htmlspecialchars($_POST["content"]);
$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$date = date("Y/m/d");
if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// image file directory
  	$target = "../uploads/".basename($image);
$sql="insert into articles (title, subtitle, content , date , images) values
('$title','$subtitle','$content','$date','$image')";
}
if (mysqli_query($con,$sql) && move_uploaded_file($_FILES['image']['tmp_name'], $target))
{
	header("Location:Add_Report.php?added=true");
}
else{
die( "could not insert news right now : ". mysqli_error($con));
}
mysqli_close($con);
?>