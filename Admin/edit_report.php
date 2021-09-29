<?php
session_start();
include_once '../DBconnect.php';
?>
<?php
$id = $_POST['id'];
$content = htmlspecialchars($_POST["content"]);
$title = $_POST['title'];
$date = date("Y/m/d");
?>
<?php

if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// image file directory
  	$target = "../uploads/".basename($image);
$sql=" update articles set title = '$title',content ='$content',date='$date',images ='$image' where article_id = '$id'";
}

if (mysqli_query($con,$sql) && move_uploaded_file($_FILES['image']['tmp_name'], $target))

{
    header("Location: update_report.php?id=$id&updated=true");
}

else{
die( "could not insert news right now : ". mysqli_error($con));
}
mysqli_close($con);

?>