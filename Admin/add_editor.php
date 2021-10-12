<?php
include '../components/dbconnect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bnook Admin Panel</title>
  <link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa|Baloo+Bhaijaan|Changa|El+Messiri|Harmattan|Katibeh|Markazi+Text|Rakkas|Reem+Kufi|Vibes&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amiri|Aref+Ruqaa|Baloo+Bhaijaan|Changa|Harmattan|Lalezar|Markazi+Text|Rakkas|Reem+Kufi|Vibes&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amiri|Aref+Ruqaa|Changa|Lalezar|Markazi+Text|Reem+Kufi|Vibes&display=swap" rel="stylesheet">  
  <link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa|Harmattan|Lalezar|Reem+Kufi|Vibes&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cairo|Changa&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=El+Messiri|Lalezar|Vibes&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=El+Messiri|Harmattan|Lalezar|Vibes&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cairo|Changa|Reem+Kufi&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Acme|Allan|Ceviche+One|Chewy&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Acme|Allan|Archivo+Narrow|Ceviche+One|Chewy|Poly&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Acme|Allan&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lemonada|Reem+Kufi|Vibes&display=swap" rel="stylesheet">
  <!----------------google font arabic--------------->
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
<?php
if(isset($_POST['editor_name']))
{
    $editor_name = $_POST['editor_name'];
    $editor_pwd = $_POST['editor_pwd'];  
    $editor_email = $_POST['editor_email'];
    
    $cmd = "insert into editors (editor_name,editor_pwd,editor_email) values ('$editor_name', '$editor_pwd' , '$editor_email')";
   if(mysqli_query($con,$cmd))
   {
       ?>
       
       <script>
      swal("تم انشاء حساب للمحلل", "You clicked the button!", "success");
       </script>
<?php

   }
}
?>
 <?php
 include 'components/sidebar.php'
 ?>
      <div class="container-fluid">
        <div class="row">
        <form action="add_editor.php" method="POST" 
        enctype="multipart/form-data" style="width:100%;padding:20px">
      <h1 style=" font-family:'Vibes', cursive;
       font-family: 'Lemonada', cursive;
          font-family: 'Reem Kufi', sans-serif;">أضافة المحللين </h1>
          
      <input type="text" placeholder="Enter Editor Name " name="editor_name" class="form-control" style="margin-bottom:50px"> 
      <input type="password" placeholder="Enter Editor Password " 
      name="editor_pwd" class="form-control" style="margin-bottom:50px"> 
          <input type="email" placeholder="Enter Editor Email " 
          name="editor_email" 
          class="form-control" style="margin-bottom:50px"> 

      <button type="submit" class="btn btn-success">submit </button>
      </form>
     
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
