<?php
session_start();
include '../components/dbconnect.php';
?>
<?php
$id = $_GET['id'];
?>
<?php
$sql = "DELETE FROM news WHERE id = $id"; 
if (mysqli_query($con, $sql)) {

mysqli_close($con);
header("Location:news_list.php?deleted=true");
     exit;
} else {
    echo "Error deleting record";
}
?>
