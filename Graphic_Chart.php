<?php
$symbol = strtoupper($_POST['Chart_symbol']);
$link = "https://ar.tradingview.com/symbols/NASDAQ".$symbol."/";
$json_params = "NASDAQ:".$symbol;
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
            padding-top:150px;
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
          
   <!-- Start Information div -->
  <!-- TradingView Widget BEGIN -->
<!--  <div class="company_info" style="padding-top:100px">-->
<!--<div class="tradingview-widget-container">-->
<!--  <div class="tradingview-widget-container__widget"></div>-->
<!--  <div class="tradingview-widget-copyright"><a href="https://ar.tradingview.com/symbols/NASDAQ-AAPL/" -->
<!--  rel="noopener" target="_blank"><span class="blue-text">-->
<!--        AAPL  </span></a> معلومات الرمز بواسطة TradingView</div>-->
<!--  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>-->
<!--  {-->
<!--  "symbol": "TADAWUL:2050",-->
<!--  "width": 1000,-->
<!--  "locale": "ar_AE",-->
<!--  "colorTheme": "light",-->
<!--  "isTransparent": false-->
<!--}-->
<!--  </script>-->
<!--</div>-->
<!--</div>-->
<!-- TradingView Widget END -->  
 <!-- Start Information div -->

          <div class="chart">


<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_8d883"></div>
  <div class="tradingview-widget-copyright"><a
  href=
  <?php
  
 echo '"'.$link.'"';
  ?>
  rel="noopener" target="_blank">
  <span class="blue-text">AAPL رسوم بيانية </span></a> بواسطة TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 980,
  "height": 610,

  "symbol": <?php echo '"'.$json_params.'"';   ?>,
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "Light",
  "style": "3",
  "locale": "ar_AE",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_8d883"
}
  );
  </script>
</div>





       
      <div class="map_" style="padding-top: 100px;">
        <div class="map_google" style="width: 100%;position: relative;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317715.7119263355!2d-0.38178406930702025!3d51.52873519756608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2str!4v1584885403336!5m2!1sen!2str" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          <div style="position: absolute;width: 80%;bottom: 0px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/ja/">Googlemapsgenerator.com/ja/</a> & <a href="https://willoughby-pr.co.uk/">gmailbulkemailcom</a></small></div>
          <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
        </div>
      </div>
            <?php


                    include 'footer.php';
                    ?>
    <section class="diffrents">
      <button class="btn-up"><i class="fas fa-angle-up"></i></button>
  </section>
    <!-- Footer end -->
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/jquery-3.3.1.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/main.js"></script>
  </body>
</html>