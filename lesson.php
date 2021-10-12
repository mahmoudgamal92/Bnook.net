<?php
session_start();
include_once 'components/dbconnect.php';
?>
<?php
// $user_id = $_SESSION['user_id'];
// $cmd = "select * from users where id = '$user_id'";
// $result = mysqli_query($con,$cmd);
// $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dl.helper.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!---------------google-font------------------>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa|Harmattan|Lalezar|Reem+Kufi|Vibes&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo|Changa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=El+Messiri|Lalezar|Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=El+Messiri|Harmattan|Lalezar|Vibes&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo|Changa|Reem+Kufi&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme|Allan|Ceviche+One|Chewy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme|Allan|Archivo+Narrow|Ceviche+One|Chewy|Poly&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme|Allan&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lemonada|Reem+Kufi|Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">

    <!----------------google font arabic--------------->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|BenchNine|Quattrocento&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/Modal.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="utf-8">
    <title>BNOOK</title>
    <style>
    @font-face {
        font-family: Greta_Arabic;
        src: url(css/fonts/Greta_Arabic_Bold.woff);
    }

    * {
        font-family: Greta_Arabic !important;
    }

    .leftcolumn {
        float: left;
        width: 75%;
        padding-left: 5px;
    }

    /* Right column */
    .rightcolumn {
        float: left;
        width: 25%;
        padding-left: 20px;
    }

    /* Fake image */
    .fakeimg {
        width: 100%;
        padding: 20px;
    }

    /* Add a card effect for articles */
    .card {
        background-color: #fcfcfc;
        padding: 20px;
        margin-top: 20px;
        box-shadow: 10px 10px 5px #aaaaaa;

    }

    /* Clear floats after the columns */
    .blog:after {
        content: "";
        display: table;
        clear: both;
    }

    .reaction {
        float: right;
        padding-left: 25px
    }

    .reaction:hover {
        transform: scale(1.5);
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 800px) {

        .leftcolumn,
        .rightcolumn {
            width: 100%;
            padding: 0;
        }
    }
    </style>
</head>

<body>
    <div class="header">
        <div class="layout">
            <?php
      include 'components/navbar.php';
     ?>
        </div>
    </div>
      <section class="contact dl-pt-120">
          <h2 class="text-center h1" style="
          font-family: 'Harmattan', sans-serif;
          font-family: 'Lalezar', cursive;
          font-family: 'Mada', sans-serif;
          font-family: 'Changa', sans-serif;
          color:  #00e6ac ;">
      الدورات التدريبية
          </h2>
</section>
       
     <div class='container'>
            <div style="width:100%;height:'100%';direction:rtl">
            <div style='
            position: absolute;
            width: 100px;
            height:60px;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.2rem;'>
            Bnook.net
            </div>
      

<iframe src="https://drive.google.com/file/d/1x_RpvKA7iKe8AkB3S6LI0KaB05Xvsq3X/preview" 
  style="width:100%;height:100vh"
    type="application/pdf"
    frameBorder="0"
    scrolling="auto"
    ></iframe>
</div>
</div>
 
    <!-- Footer start -->
    <?php include 'components/footer.php'; ?>
     <section class="diffrents">
        <button class="btn-up">
            <img src="./images/up_arrow.png" style="width:50px;height:50px"/>
            </button>
      </section>
    <!-- Footer end -->

    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>