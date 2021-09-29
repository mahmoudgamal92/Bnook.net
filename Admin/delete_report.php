<?php
session_start();
include_once '../DBconnect.php'
?>
<?php
$id = $_GET['id'];
?>
<?php
$sql = "DELETE FROM articles WHERE article_id = $id"; 
if (mysqli_query($con, $sql)) {

    mysqli_close($con);
   header("Location:ReportsPanel.php");
       exit;
} else {
    echo "Error deleting record";
}
?>
