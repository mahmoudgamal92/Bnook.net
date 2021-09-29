<?php
include 'DBconnect.php'
?>
<?php

$comment = $_POST['comment'];
$query=mysqli_query($con,"INSERT INTO comments(comment) VALUES  
('$comment')");
header("Location: reports.php");
?>