<?php
session_start();
include_once 'components/dbconnect.php';
?>
<?php
$total_views;
$date = date("y-m-d");
$query1="select * from visitors where date ='$date'";
$result = mysqli_query($con,$query1);
if ($result->num_rows == 0)
{
$insert_query = "insert into visitors (date) values ('$date')";
mysqli_query($con,$insert_query);
}
else 
{
    $update_Query = "update visitors set today_views = today_views+1 where date = '$date'";
    mysqli_query($con,$update_Query);  
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/dl.helper.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!---------------google-font------------------>
  <link
    href="https://fonts.googleapis.com/css?family=Aref+Ruqaa|Baloo+Bhaijaan|Changa|El+Messiri|Harmattan|Katibeh|Markazi+Text|Rakkas|Reem+Kufi|Vibes&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@900&display=swap" rel="stylesheet">

  <link
    href="https://fonts.googleapis.com/css?family=Amiri|Aref+Ruqaa|Baloo+Bhaijaan|Changa|Harmattan|Lalezar|Markazi+Text|Rakkas|Reem+Kufi|Vibes&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css?family=Amiri|Aref+Ruqaa|Changa|Lalezar|Markazi+Text|Reem+Kufi|Vibes&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa|Harmattan|Lalezar|Reem+Kufi|Vibes&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cairo|Changa&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=El+Messiri|Lalezar|Vibes&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=El+Messiri|Harmattan|Lalezar|Vibes&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cairo|Changa|Reem+Kufi&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Acme|Allan|Ceviche+One|Chewy&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Acme|Allan|Archivo+Narrow|Ceviche+One|Chewy|Poly&display=swap"
    rel="stylesheet">
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
  <title>www.Bnook.net</title>
  <link rel="icon" href="images/Bnook.png">
  <style>
  @font-face {
  font-family: Greta_Arabic;
  src: url(css/fonts/Greta_Arabic_Bold.woff);
}
*{
  font-family: Greta_Arabic ;
  text-decoration: none !important;
}
.reports { 
  text-align:center;
}
/* Right column */

/* Fake image */
.fakeimg {
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  width: 90%;
   background-color: #fcfcfc;
   padding: 20px;
   margin-top: 20px;
   box-shadow: 10px 10px 5px #aaaaaa;
   display:inline-block;
   margin:20px
}
/* Clear floats after the columns */
.blog:after {
  content: "";
  display: table;
  clear: both;
}
.reaction{
  float:right;
  padding-left:25px

}
.reaction:hover {
  transform: scale(1.5); 
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

    .right.carousel-control,
    .left.carousel-control {
      display: none;
    }

    .carousel-caption {
      bottom: 36%;
    }

    .carousel-caption h2 {
      color: #fff;
      font-size: 40px;
      margin-bottom: 20px;
      text-transform: uppercase;
    }

    .carousel-caption p {
      font-family: "Oswald", sans-serif;
      font-weight: 300;
      font-size: 20px;
      margin-bottom: 50px;
    }

    @media screen and (min-width: 768px) {
      .carousel-caption {
        right: 20%;
        left: 20%;
      }
    }

    .btn-transparent {
      background: transparent;
      color: #fff;
      border: 2px solid #fff;
    }

    .btn-transparent:hover {
      background-color: #fff;
    }

    .btn-rounded {
      border-radius: 70px;
    }

    .btn-large {
      padding: 11px 45px;
      font-size: 18px;
    }

    .animated {
      -webkit-animation-duration: 1.5s;
      animation-duration: 1.5s;
    }

    .blogs img {
      width: 100%;
    }
  </style>
</head>

<body>
  <div class="header">
    <div class="layout">
      <?php include 'components/navbar.php'; ?>
      <div class="slider" style="z-index:1;height:100vh">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="height:100%">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" stylel="height:'100%">
            <div class="carousel-item active">
              <img src="images/slide2.png" class="d-block w-100" style="filter: brightness(30%);">
              <div class="carousel-caption">
                <h2 style="font-family: 'Cairo', sans-serif;font-size:40px">
                  فلتر الشركات
                </h2>
                <h3 style="margin-top:50px;
                     font-family: 'Vibes', cursive;
                      font-family: 'Lemonada', cursive;
                      font-family: 'Reem Kufi', sans-serif;
                      color:#009973;
                      font-weight:bold">
                      
                  , الاداء التاريخي بعد الاعلانات السابقة
                  نشاطها وبياناتها المالية المعتمدة والمحدثة باستمرار
                </h3>
                <p class="animated fadeInRight">
                  <a href="#" class="btn btn-transparent btn-rounded btn-large">
                    عرض المزيد
                  </a>
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/teaching.jpg" class="d-block w-100" style=" 
              filter: brightness(30%);">
              <div class="carousel-caption">
                <h2 style="font-family: 'Cairo', sans-serif;font-size:40px">
                  التدريب و التطوير
                </h2>
                <h3 style="margin-top:80px;
                      font-family: 'Vibes', cursive;
                      font-family: 'Lemonada', cursive;
                      font-family: 'Reem Kufi', sans-serif;
                      color:#009973;
                      font-weight:bold">
                  تطبيقات و برمجيات , ورش عمل ,كورسات في التحليل الفني و المالي من مؤهلين
                </h3>
                <p class="animated fadeInRight">
                  <a href="#" class="btn btn-transparent btn-rounded btn-large">
                    عرض المزيد
                  </a>
                </p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="tradingview-widget-container" style="margin-top:50px;">
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
      {
        "symbols": [
          {
            "proName": "FOREXCOM:SPXUSD",
            "title": "ستاندرد أند بورز 500"
          },
          {
            "proName": "FOREXCOM:NSXUSD",
            "title": "ناسداك 100"
          },
          {
            "proName": "FX_IDC:EURUSD",
            "title": "EUR/USD"
          },
          {
            "proName": "BITSTAMP:BTCUSD",
            "title": "BTC/USD"
          },
          {
            "proName": "BITSTAMP:ETHUSD",
            "title": "ETH/USD"
          }
        ],
          "colorTheme": "light",
            "isTransparent": false,
              "locale": "ar_AE"
      }
    </script>
  </div>
  
      <section style="margin-top:100px">
        <div class="reports">
            <h2 class="h1" style="font-family: 'Cairo', sans-serif;color:#009973;display:inline-block">
                اخر الأخبار و التقارير
            </h2>
            <?php
          $sql="select * from articles order by article_id desc limit 5 ";
          $result = mysqli_query($con,$sql);
          while($row = mysqli_fetch_array($result)){
          ?>
            <div class="row" style="padding:10px;mergin-bottom:10px">
                <div class="col-lg-10 col-md-10 col-sm-10" style="text-decoration: none;">
                    <h2 style="text-align:right;font-family: 'Cairo', sans-serif;color:#1f4e83;">
                        <a href='report_body.php?id=<?php echo $row['article_id'] ?>'>
                            <?php  echo $row['title']; ?>
                        </a>
                    </h2>
                   <div style="text-align:right;font-family:'Cairo', sans-serif;">
                <?php echo htmlspecialchars_decode(substr($row['content'],0,600)); ?>
                <?php //echo $row['subtitle']; ?>
                <br>
                <span style="color:grey">
                    <a href='report_body.php?id=<?php echo $row['article_id'] ?>'>
                        .....أضغط لعرض المزيد</a>
                </span>
                <span style="float:left;color:#1f4e83;">
                    <img src="images/date.png" style="width:25px;">
                    <?php echo $row['date']; ?>
                </span>
          </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <?php
            if($row['images'] != null)
            {
              echo '<img src="uploads/'.$row['images'].'" style="width:100%;height:90%;border: 1px solid #ddd;
              border-radius: 4px;">';
            }
            else{
          echo '<img src="images/bnookbanner.png" 
          style="width:100%;border-radius:15px;">';

            }
            ?>
                </div>
            </div>
            <?php 
              } 
              ?>

    </section>
      <section class="contact dl-mt-100">
        <form>
          <h2 class="text-center h1" style="
          font-family: 'Harmattan', sans-serif;
          font-family: 'Lalezar', cursive;
          font-family: 'Mada', sans-serif;
          font-family: 'Changa', sans-serif;
          color:  #00e6ac ;">ابقى على تواصل
          </h2>
          <div class="template_style text-center dl-mt-20 dl-mb-20" style="
          font-family: 'Harmattan', sans-serif;
          font-family: 'Lalezar', cursive;
          font-family: 'Mada', sans-serif;
          font-family: 'Changa', sans-serif;
          font-family: 'Rakkas', cursive; 
          color: #006622 ">♥!إذا كان لديك أي سؤال ، فنحن هنا من أجلك لا تتردد في الاتصال بنا
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-4 dl-mb-10">
                <input type="text" placeholder="أدخل الأسم" style="font-family: 'Cairo', sans-serif;text-align:right;padding:5px">
              </div>
              <div class="col-md-4 dl-mb-10">
                <input type="text" placeholder="ادخل رقم الهاتف الخاص بك " style="font-family: 'Cairo', sans-serif;text-align:right;padding:5px"">
              </div>
              <div class="col-md-4 dl-mb-10">
                <input type="text" placeholder="أدخل البريد الالكتروني الخاص بك" style="font-family: 'Cairo', sans-serif;text-align:right;padding:5px"">
              </div>
              <div class="col-md-12 dl-mt-20">
                <textarea rows="4" cols="50" name="comment" form="usrform" 
                placeholder="موضوع التواصل" style="font-family: 'Cairo', sans-serif;text-align:right;padding:5px"></textarea>
              </div>
              <div class="col-md-2 offset-md-10">
                <button>Send</button>
              </div>
            </div>
          </div>
        </form>
       <div class="container" style="text-align: center;margin-top:50px">   
      <h2 class="h1" 
      style="font-family: 'Cairo', sans-serif;
      color:#009973;display:inline-block">
          المفكرة الاقتصادية
      </h2>
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container" style="display: inline-block;width:'100%'">
          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js"
            async>
              {
                "colorTheme": "light",
                  "isTransparent": false,
                    "width": "100%",
                      "height": "600",
                        "locale": "ar_AE",
                          "importanceFilter": "-1,0,1"
              }
            </script>
        </div>
        <!-- TradingView Widget END -->
            </div>
      <!-- Section Get in touch start -->
      </section>
      <?php include 'components/footer.php'; ?>
    
      <!-- Footer end -->

      <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
      </script>


      <script>
        // Get the modal
        var modal = document.getElementById('id02');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
      </script>

      <script>
      function switch_modals(){
      var signin = document.getElementById('signin_modal');
      var signup = document.getElementById('signup_modal');
      if(signin.style.display = "block")
      {
          signin.style.display = "none";
          signup.style.display = "block";
      }
      else if(signup.style.display = "block")
      {
          signup.style.display = "none";
          signin.style.display = "block";
      }
      }
      </script>

      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
</body>

</html>