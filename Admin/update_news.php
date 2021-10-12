<?php
session_start();
include '../components/dbconnect.php';
?>
<?php
 if (isset($_POST['upload'])) {
     $id =  $_POST['id'];
    $content = htmlspecialchars($_POST["content"]);
    $title = $_POST['title'];
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// image file directory
  	$target = "../uploads/".basename($image);
     $sql="update news set title ='$title', content='$content' , image = '$image' where id = '$id'";
        if (mysqli_query($con,$sql) && move_uploaded_file($_FILES['image']['tmp_name'], $target))
        {
         header('Location: edit_news.php?updated=success');
        }
        else{
               header('Location: edit_news.php?updated=failed');
        }
        mysqli_close($con);
        }
        ?>
