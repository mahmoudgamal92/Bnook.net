<?php
session_start();
 include '../DBconnect.php';
 if(!isset($_SESSION['Admin_name']))
 {
  header("Location: login.php");
 }
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

</head>

<body>

 <?php
 include 'side_nav.php';
 ?>

      <div class="container-fluid">
          <!-- Super Admin Row -->
            <div class="row">
          <div class=" col-md-3 visitors">
            <a onclick="window.location.href ='visitors.php'">
            <img src="images/team.png" style="width: 60%; height:60%;">
              <p>
              الزيارات اليوم
            </p>
            <p> 
              <?php


              $sql = "SELECT today_views FROM visitors ORDER BY date DESC LIMIT 1";
              $result = $con->query($sql);
              while($row = $result->fetch_assoc()) {
                  $Today_visits = $row["today_views"];
              }
              echo  $Today_visits;
              ?>
            </p>
            </a>
          </div>
          <div class=" col-md-3 users">
            <a onclick="window.location.href ='users.php'"><img src="images/team.png" style="width: 60%; height:60%;">
              <p>
              المستخدمين
            </p>
            <p>

            <?php

            $cmd = "select count(1) as user FROM users";

            $res = $con->query($cmd);
            while($row = $res->fetch_assoc()) {
                $usrs = $row['user'];
            }
               echo $usrs;
            ?>

            </p>
            </a>

          </div>
          <div class="col-md-3 Admins">
            <a href="add_editor.php"><img src="images/wrench.png" style="width: 80%; height:80%;">
              <p>
             اضافه محللين
            </p>
            </a>

          </div>
        </div>
      <!--- Power Users Row---->
     <div class="row">
      <div class=" col-md-3 Articles">
        <a onclick="window.location.href ='ReportManager.php'">
        <img src="images/live-news.png" style="width: 80%; height:80%;">
       <p> التقارير</p>

        </a>

      </div>
      <div class=" col-md-3 problems">
        <a href="analysts.php" ><img src="images/problem.png" style="width: 60%; height:60%;">
          <p>
       قسم المحللين
        </p>
        </a>
      </div>
      <div class="col-md-3 contact">
        <a onclick="window.location.href ='news.php'" >
        <img src="images/problem.png" style="width: 60%; height:60%;">
          <p> الأخبار  </p>
        </a>
      </div>
     </div>
     
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
