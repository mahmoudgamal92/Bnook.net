<?php
$symbol= strtoupper($_POST['symbol']);
$url="http://173.212.230.130/site/api/v2/ahmedhaies/data_from_stock_searning?name=".$symbol;
$json_data = @file_get_contents($url);
if($json_data === false)
{
echo "sorry, Try Again later";
}
else
{
$data = json_decode($json_data,true);

$Next_Day_Price_Change0 = $data['0']['1']['Next Day Price Change (%)'];
$On_7th_Day_Price_Change0 = $data['0']['2']['On 7th Day Price Change (%)'];

$Next_Day_Price_Change1 = $data['1']['1']['Next Day Price Change (%)'];
$On_7th_Day_Price_Change1 = $data['1']['2']['On 7th Day Price Change (%)'];

$Next_Day_Price_Change2 = $data['2']['1']['Next Day Price Change (%)'];
$On_7th_Day_Price_Change2 = $data['2']['2']['On 7th Day Price Change (%)'];

$Next_Day_Price_Change3 = $data['3']['1']['Next Day Price Change (%)'];
$On_7th_Day_Price_Change3 = $data['3']['2']['On 7th Day Price Change (%)'];

$Next_Day_Price_Change4 = $data['4']['1']['Next Day Price Change (%)'];
$On_7th_Day_Price_Change4 = $data['4']['2']['On 7th Day Price Change (%)'];

$Next_Day_Price_Change5 = $data['5']['1']['Next Day Price Change (%)'];
$On_7th_Day_Price_Change5 = $data['5']['2']['On 7th Day Price Change (%)'];

?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dl.helper.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!---------------google-font------------------>
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|BenchNine|Quattrocento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/Modal.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <meta charset="utf-8">
    <title>www.Bnook.Tech</title>
    <link rel="icon" href="images/Bnook.png">
    <style>
    @font-face {
  font-family: Greta_Arabic;
  src: url(css/fonts/Greta_Arabic_Bold.woff);
}
*{
  font-family: Greta_Arabic !important ;
}
    body{
	background: url('');
    background-size: cover;
    text-align:center;
    }
    
    table {
      border-collapse: collapse;
      width: 70%;
    display:inline-block;
    }
    @media screen and (max-width: 600px) {
   table{
         border-collapse: collapse;
        width: 100%;
        display:inline-block;
        overflow-x:scroll;
  
  }
    }
    th, td {
    	color : black;
    	font-weight:bold;
      text-align: left;
      border: 1px solid #ddd;
      text-align:center;
       width:10%;
       padding-top:5px;
      padding-bottom:5px;

    }
 
    
    td:hover {background-color:#dae0e5;}
    
    .dropbtn {
        padding-top:25px;
      
      font-weight:bold;
      cursor: pointer;
      background:transparent;
      border:none;
      color:white;
    }
    
    .dropdown {
      position: relative;
      display: inline-block;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      font-weight:bold;
    }
    
    .dropdown-content a:hover {background-color: #ddd}
    
    .show {display:block;} 
        
        
        
    .brand{
    text-align: center;
    margin: 0px auto;
    width: 50%;
    background: #75C0DB;
    border-radius:15px;
    
    }
        
        
    .brand p{
    display: inline block;
    color: black;
    font-size: 27px;
    font-weight: bold;
    padding-top: 10px;
    padding-bottom:10px;
    
    }
    
    .name{
        
    display: inline block; 
    text-align: center;
    margin-top: 50px;
    width:20%;
    margin-left: 40%;
    border-radius:15px 50px;
    background:#2EC66D;
        
    }
    
    
    .name p{
    color: black;
    font-size: 20px;
    font-weight: bold;
    padding-bottom: 25px;
    padding-top: 25px;
    }
    </style>
    </head>
    <body>  
         <div class="header">
      <div class="layout">
              <?php
              include 'navbar.php';
              ?>
        </div>
    </div>
    <p style="padding-top:120px;color:#2EC66D;font-family: 'Vibes', cursive;
    font-family: 'Lemonada', cursive;
    font-family: 'Reem Kufi', sans-serif;">
        التذبذب التاريخي بعد الاعلان</p>
    <p  style="font-family: 'Vibes', cursive;
    font-family: 'Lemonada', cursive;
    font-family: 'Reem Kufi', sans-serif;"><?php echo $symbol; ?></p>
    </div>
    <br>
    <br>
    <table>
        <!--frist-->
        <tr style="background-color:#dddddd;">

        <td>
           تاريخ الاعلان
        </td>

        <td>
           تغير السعر بعد الاعلان(يوم)
        </td>

        <td>
           بعد 7 أيام من الاعلان
        </td>

        <td>
            سعر الاغلاق قبل الاعلان
        </td>

        <td>
           سعر الاغلاق بعد الاعلان
        </td>

        <td>
           حجم التداول بعد الاعلان
        </td>

        <td>
           اغلاق السهم بعد سبع ايام من الاعلان
        </td>

    </tr>
    <!-- second row -->
    <?php
    if(isset ($data['0']['0']['Date']))
    {
    ?>
    <tr>
        <!-- 0 -->
        <td style="background-color:#75C0DB">
            <?php  echo $data['0']['0']['Date']; ?>
        </td>
        <!-- 1 -->
        <td>
            <?php 
            
            if($Next_Day_Price_Change0 < 0)
            {
                
                echo"<span style='color:red'>".$Next_Day_Price_Change0."</span>";
                
            }
            else
            
            
             {
                
                echo"<span style='color:green'>".$Next_Day_Price_Change0."</span>";
                
            }
            
            ?>
        </td>
        <!-- 2 -->
        <td>
            <?php 
            
            if($On_7th_Day_Price_Change0 < 0)
            {
                
                echo"<span style='color:red'>".$On_7th_Day_Price_Change0."</span>";
                
            }
            
            else
            
            
             {
                
                echo"<span style='color:green'>".$On_7th_Day_Price_Change0."</span>";
            
            }
            
            ?>
        </td>
        <!-- 3 -->
        <td>
            <?php echo  $data['0']['3']['Closing Price Before Earning']; ?>
        </td>
        <!-- 4 -->
        <td>
            <?php echo $data['0']['4']['Next Day Closing Price'];  ?>
        </td>
        <!-- 5 -->
        <td>
            <?php echo $data['0']['5']['Next Day Volume'];  ?>
        </td>
        <!-- 6 -->
        <td>
            <?php echo  $data['0']['6']['On 7th Day Closing Price'] ?>
        </td>
    </tr>

<?php
}
?>

    <!--third row-->

 <?php
    if(isset ($data['1']['0']['Date']))
    {
    ?>

    <tr>
        <!-- 0 -->
        <td style="background-color:#75C0DB">
            <?php  echo $data['1']['0']['Date']; ?>
        </td>
        <!-- 1 -->
        <td>
           <?php 
            
            if($Next_Day_Price_Change1 < 0)
            {
                
                echo"<span style='color:red'>".$Next_Day_Price_Change1."</span>";
                
            }
            
            else
            
            
             {
                
                echo"<span style='color:green'>".$Next_Day_Price_Change1."</span>";
                
            }
            
            ?>
        </td>
        <!-- 2 -->
        <td>
            <?php 
            
            if($On_7th_Day_Price_Change1 < 0)
            {
                
                echo"<span style='color:red'>".$On_7th_Day_Price_Change1."</span>";
                
            }
            
            else
            
            
             {
                
                echo"<span style='color:green'>".$On_7th_Day_Price_Change1."</span>";
                
            }
            
            ?>
        </td>
        <!-- 3 -->
        <td>
            <?php echo  $data['1']['3']['Closing Price Before Earning']; ?>
        </td>
        <!-- 4 -->
        <td>
            <?php echo $data['1']['4']['Next Day Closing Price'];  ?>
        </td>
        <!-- 5 -->
        <td>
            <?php echo $data['1']['5']['Next Day Volume'];  ?>
        </td>
        <!-- 6 -->
        <td>
            <?php echo  $data['1']['6']['On 7th Day Closing Price'] ?>
        </td>



    </tr>


<?php
}
?>
      <!--fourth row-->
 <?php
    if(isset ($data['2']['0']['Date']))
    {
    ?>


      <tr>
        <!-- 0 -->
        <td style="background-color:#75C0DB">
            <?php  echo $data['2']['0']['Date']; ?>
        </td>
        <!-- 1 -->
        <td>
            <?php 
            
            if($Next_Day_Price_Change2 < 0)
            {
                
                echo"<span style='color:red'>".$Next_Day_Price_Change2."</span>";
            
            }
            
            else
            
            
             {
                
                echo"<span style='color:green'>".$Next_Day_Price_Change2."</span>";
                
            }
            
            ?>
        </td>
        <!-- 2 -->
        <td>
            <?php 
            
            if($On_7th_Day_Price_Change2 < 0)
            {
                
                echo"<span style='color:red'>".$On_7th_Day_Price_Change2."</span>";
                
            }
            
            else
            
            
             {
                
                echo"<span style='color:green'>".$On_7th_Day_Price_Change2."</span>";
                
            }
            
            ?>
        </td>
        <!-- 3 -->
        <td>
            <?php echo  $data['2']['3']['Closing Price Before Earning']; ?>
        </td>
        <!-- 4 -->
        <td>
            <?php echo $data['2']['4']['Next Day Closing Price'];  ?>
        </td>
        <!-- 5 -->
        <td>
            <?php echo $data['2']['5']['Next Day Volume'];  ?>
        </td>
        <!-- 6 -->
        <td>
            <?php echo  $data['2']['6']['On 7th Day Closing Price'] ?>
        </td>



    </tr>


<?php
}
?>

     <!--5th row-->
 <?php
    if(isset ($data['3']['0']['Date']))
    {
    ?>
     <tr>
        <!-- 0 -->
        <td style="background-color:#75C0DB">
            <?php  echo $data['3']['0']['Date']; ?>
        </td>
        <!-- 1 -->
        <td>
           <?php 
            
            if($Next_Day_Price_Change3 < 0)
            {
                
                echo"<span style='color:red'>".$Next_Day_Price_Change3."</span>";
                
            }
            
            else
            
            
             {
                
                echo"<span style='color:green'>".$Next_Day_Price_Change3."</span>";
                
            }
            
            ?>
        </td>
        <!-- 2 -->
        <td>
           <?php 
            
            if($On_7th_Day_Price_Change3 < 0)
            {
                
                echo"<span style='color:red'>".$On_7th_Day_Price_Change3."</span>";
                
            }
            
            else
            
            
             {
                
                echo"<span style='color:green'>".$On_7th_Day_Price_Change3."</span>";
                
            }
            
            ?>
        </td>
        <!-- 3 -->
        <td>
            <?php echo  $data['3']['3']['Closing Price Before Earning']; ?>
        </td>
        <!-- 4 -->
        <td>
            <?php echo $data['3']['4']['Next Day Closing Price'];  ?>
        </td>
        <!-- 5 -->
        <td>
            <?php echo $data['3']['5']['Next Day Volume'];  ?>
        </td>
        <!-- 6 -->
        <td>
            <?php echo  $data['3']['6']['On 7th Day Closing Price'] ?>
        </td>



    </tr>
<?php
}
?>


 <!--6th row-->
  <?php
    if(isset ($data['4']['0']['Date']))
    {
    ?>
 <tr>
        <!-- 0 -->
        <td style="background-color:#75C0DB">
            <?php  echo $data['4']['0']['Date']; ?>
        </td>
        <!-- 1 -->
        <td>
            <?php 
            
            if($Next_Day_Price_Change4 < 0)
            {
                
                echo"<span style='color:red'>".$Next_Day_Price_Change4."</span>";
                
            }
            
            else
            
            
             {
                
                echo"<span style='color:green'>".$Next_Day_Price_Change4."</span>";
                
            }
            
            ?>
        </td>
        <!-- 2 -->
        <td>
         <?php 
            
            if($On_7th_Day_Price_Change4 < 0)
            {
                
                echo"<span style='color:red'>".$On_7th_Day_Price_Change4."</span>";
                
            }
            
            else
            
            
             {
                
                echo"<span style='color:green'>".$On_7th_Day_Price_Change4."</span>";
                
            }
            
            ?>
        </td>
        <!-- 3 -->
        <td>
            <?php echo  $data['4']['3']['Closing Price Before Earning']; ?>
        </td>
        <!-- 4 -->
        <td>
            <?php echo $data['4']['4']['Next Day Closing Price'];  ?>
        </td>
        <!-- 5 -->
        <td>
            <?php echo $data['4']['5']['Next Day Volume'];  ?>
        </td>
        <!-- 6 -->
        <td>
            <?php echo  $data['4']['6']['On 7th Day Closing Price'] ?>
        </td>

    </tr>

<?php
}
?>
     <!--7th row-->
 <?php
    if(isset ($data['5']['0']['Date']))
    {
    ?>


     <tr>
        <!-- 0 -->
        <td style="background-color:#75C0DB">
            <?php  echo $data['5']['0']['Date']; ?>
        </td>
        <!-- 1 -->
        <td>
            <?php 
            
            if($Next_Day_Price_Change5 < 0)
            {
                
                echo"<span style='color:red'>".$Next_Day_Price_Change5."</span>";
                
            }
            
            else
            
            
             {
                
                echo"<span style='color:green'>".$Next_Day_Price_Change5."</span>";
                
            }
            
            ?>
        </td>
        <!-- 2 -->
        <td>
           <?php 
            
            if($On_7th_Day_Price_Change5 < 0)
            {
                
                echo"<span style='color:red'>".$On_7th_Day_Price_Change5."</span>";
                
            }
            
            else
            
            
             {
                
                echo"<span style='color:green'>".$On_7th_Day_Price_Change5."</span>";
                
            }
            
            ?>
        </td>
        <!-- 3 -->
        <td>
            <?php echo  $data['5']['3']['Closing Price Before Earning']; ?>
        </td>
        <!-- 4 -->
        <td>
            <?php echo $data['5']['4']['Next Day Closing Price'];  ?>
        </td>
        <!-- 5 -->
        <td>
            <?php echo $data['5']['5']['Next Day Volume'];  ?>
        </td>
        <!-- 6 -->
        <td>
            <?php echo  $data['5']['6']['On 7th Day Closing Price'] ?>
        </td>
    </tr>
    
    <?php
    }
    ?>
    <tr>
        <td colspan="7" style="background-color:#2EC66D">Developed by :
        <img src="images/Bnook.png" style="width:30px;height:30px;"> bnook.net</td>
    </tr>
</table>
<?php
}
?>
      <div class="map_" style="padding-top: 100px;width:100%">
        <div class="map_google" style="width: 100%;position: relative;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317715.7119263355!2d-0.38178406930702025!3d51.52873519756608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2str!4v1584885403336!5m2!1sen!2str" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          <div style="position: absolute;width: 80%;bottom: 0px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/ja/">Googlemapsgenerator.com/ja/</a> & <a href="https://willoughby-pr.co.uk/">gmailbulkemailcom</a></small></div>
          <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
        </div>
      </div>
    </section>

    <?php
      include 'footer.php';
    ?>
    <section class="diffrents">
      <button class="btn-up"><i class="fas fa-angle-up"></i></button>
  </section>
  <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/jquery-3.3.1.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/main.js"></script>
  </body>
</html>