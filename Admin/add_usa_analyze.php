<?php
session_start();
 include '../DBconnect.php';
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

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<?php
if (isset($_POST['upload'])) {
    
    $analyse_title = $_POST['title'];
    $analyse_content = $_POST["analysis-content"];
    $date = date("Y/m/d");
    $symbol = $_POST['symbol'];
    
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// image file directory
  	$target = "../uploads/".basename($image);
  	
    $sql="insert into analyses (analyse_title,analyse_content ,analyse_date ,analyse_image ,analyse_code, company_symbol) 
    values ('$analyse_title','$analyse_content','$date','$image' ,'usa','$symbol')";
    if (mysqli_query($con,$sql) && move_uploaded_file($_FILES['image']['tmp_name'], $target))
    
    {
     ?>
<script>
    swal({
  title: "تم اضافة التحليل بنجاح",
  text: "You clicked the button!",
  icon: "success",
});
</script>

<?php
}

else{
die( "could not insert news right now : ". mysqli_error($con));
}
mysqli_close($con);
}
?>
    
<?php
 include 'side_nav.php';
 ?>
      <div class="container-fluid">
        <div class="row">
        <form action="add_usa_analyze.php" method="POST" enctype="multipart/form-data" style="width:100%;text-align:center">
    <div class="container">

 
 
   <h1 style=" font-family:'Vibes', cursive;
       font-family: 'Lemonada', cursive;
          font-family: 'Reem Kufi', sans-serif;text-align:center;color:#218838;margin-top:50px">
           اضافه تحليلات الشركات الامريكيه
      </h1>
    <input type="hidden" name="size" value="1000000">
      <input type="text" placeholder="Enter the symbol like MSFT,AMZN,.... " name="symbol" class="form-control" style="margin-bottom:50px"> 
      <input type="text" placeholder="Enter the title " name="title" class="form-control" style="margin-bottom:50px"> 
      <textarea rows="6" cols="200" name="analysis-content" class="form-control" style="margin-bottom:50px" ></textarea>
        <input type="file" name="image" class="btn btn-success" style="margin-top:50px">
        <br>
        <br>
      <button type="submit" class="btn btn-success" name="upload"> submit </button>
  </form>
     
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
      CKEDITOR.replace( 'analysis-content' );
     </script>
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
