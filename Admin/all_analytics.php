<?php
session_start();
include '../components/dbconnect.php';
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
<style>
          
          table {
  border-collapse: collapse;
  width: 50%;
margin: 0px auto;

}
th, td {
	color : black;
	font-weight: bold;
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  text-align:center;
}
tr:hover {background-color:#2ec66d;}
            
</style>
</head>
<body>
 <?php
 include 'components/sidebar.php';
 ?>
      <div class="container-fluid">
      <table>
 <tr>
  <th>country</th> 
  <th>Symbol</th> 
  <th>Title</th>
    <th>Date</th>
    <th>Action</th>
 </tr>
 <?php 
  $sql = "SELECT * from analyses order by analyse_id desc ";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
  ?>
  
  <tr>
      <td>
          <?php 
          
          $flag = $row['analyse_code'];
          if($flag =="ksa")
          {
              ?>
              <img src="../images/ksa.png"style="width:30px">
              <?php
          }
          else{
          ?>
          
          
           <img src="../images/usa.png"style="width:30px">
           
           <?php
          }
           ?>
      </td>
       <td>
          <?php  echo $row['company_symbol'];?>
      </td>
       <td>
          <?php  echo $row['analyse_title'];?>
      </td>
       <td>
          <?php  echo $row['analyse_date'];?>
      </td>
       <td>
         <button class="btn btn-success" onclick="location.href='delete_analysis.php?id=<?php echo $row['analyse_id']; ?>'"> Delete </button>
      </td>
      </tr>
  
  
  <?php
  
}
echo "</table>";
} else { echo "0 results"; }
$con->close();
?>
</table>
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
