<?php
session_start();
include_once 'components/dbconnect.php';
?>
<?php
$email = $_POST['email'];
$pwd = md5($_POST['pwd']);
$cmd = "select * from users where email ='$email' and password = '$pwd'";
$result = mysqli_query($con,$cmd);
$count = mysqli_num_rows($result);
if($count == 1)
{
        $row = mysqli_fetch_array($result);
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['user_id'] = $row['id'];
        header("Location: index.php?logged=true");}
else{
  header("Location: index.php?logged=false");
  }
?>