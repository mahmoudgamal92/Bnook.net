<?php
session_start();
include_once '../DBconnect.php'
?>
<?php
$id = $_GET['id'];
?>
<?php
$sql = "DELETE FROM analyses WHERE analyse_id = $id"; 
if (mysqli_query($con, $sql)) {

    mysqli_close($con);
   header("Location:all_analytics.php");
       exit;
} else {
    echo "Error deleting record";
}
?>
