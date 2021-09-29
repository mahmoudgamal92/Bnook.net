<?php
include 'DBconnect.php';
$symbol = strtoupper($_POST['symbol']);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
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
    .chart{
            padding:50px;
             text-align:center;
        }
        .company_info{
    padding-top:100px;
    text-align:center;
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
          
          
          <div class="container">
    <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" style="padding-top:100px">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://ar.tradingview.com/symbols/TADAWUL-2020/" rel="noopener" target="_blank"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
  {
  "symbol": <?php echo'"TADAWUL:'.$symbol.'"'?>,
  "width": "100%",
  "locale": "ar_AE",
  "colorTheme": "light",
  "isTransparent": false
}
  </script>
</div>
<!-- TradingView Widget END -->



<!-- TradingView Widget BEGIN -->
<p style="margin-top:50px;color:#008037;font-family: 'Reem Kufi', sans-serif;font-size:30px;float:right;text-align:right">
    التحليل الفنّي للأسهم</p>
<div class="tradingview-widget-container" style="margin-top:50px">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
  {
  "interval": "1m",
  "width": "100%",
  "isTransparent": false,
  "height": "500",
  "symbol": <?php echo'"TADAWUL:'.$symbol.'"'?>,
  "showIntervalTabs": true,
  "locale": "ar_AE",
  "colorTheme": "light"
}
  </script>
</div>

</div>
<!-- TradingView Widget END -->





<!-- TradingView Widget BEGIN -->
<div class="container tradingview-widget-container" style="margin-top:100px">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://ar.tradingview.com/symbols/TADAWUL-2010/" rel="noopener" target="_blank"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-financials.js" async>
  {
  "symbol": <?php echo'"TADAWUL:'.$symbol.'"'?>,
  "colorTheme": "light",
  "isTransparent": false,
  "largeChartUrl": "",
  "displayMode": "regular",
  "width": "100%",
  "height": 830,
  "locale": "ar_AE"
}
  </script>
</div>
<!-- TradingView Widget END -->

<p style="margin-top:50px;color:#008037;font-family: 'Reem Kufi', sans-serif;font-size:30px;text-align:right;margin-bottom:50px">
    
:المحللين
</p>

  <?php
    
    $cmd = "select * from analyses where company_symbol = '$symbol'";
    $result = mysqli_query($con,$cmd);
    while($row = mysqli_fetch_array($result))
    {
        ?>
        <div style="width:100%;background-color:#f0f0f0;
        box-shadow: 5px 10px 8px 10px #888888;
       margin-top:50px;border-radius:15px;text-align:center">
    
      <p style="font-family: 'Reem Kufi', sans-serif;font-size:30px;color:#008037">
     <?php echo $row['analyse_title']; ?>
     </p>    
     <img src="<?php echo 'uploads/'.$row['analyse_image'];?>"
     style="width:60%;height:200px">
     <br>
      <span style="text-align:right;font-weight:bold;width:80%;display:inline-block">
      <?php echo $row['analyse_content']; ?>
     </span> 
      <span style="text-align:left;width:100%;float:left">
     <?php echo $row['analyse_date']; ?>
     </span>
</div>
<?php
        
    }
    ?>
</div>
</div>
            <?php
           include 'footer.php';
            ?>
  <section class="diffrents">
        <button class="btn-up">
            <img src="./images/up_arrow.png" style="width:50px;height:50px"/>
            </button>
      </section>
    <!-- Footer end -->
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/jquery-3.3.1.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/main.js"></script>
  </body>
</html>