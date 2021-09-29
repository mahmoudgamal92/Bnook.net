<?php
session_start();
include_once '../DBconnect.php';
?>

<?php
$content = htmlspecialchars($_POST["content"]);
$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$date = date("Y/m/d");
?>
<?php

if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// image file directory
  	$target = "../uploads/".basename($image);
$sql="INSERT into articles (title, subtitle, content , date , images) values
('$title','$subtitle','$content','$date','$image')";
}

if (mysqli_query($con,$sql) && move_uploaded_file($_FILES['image']['tmp_name'], $target))

{
    echo "<script>alert(the news added successfully);</script> ";


}

else{
die( "could not insert news right now : ". mysqli_error($con));
}
mysqli_close($con);

?>