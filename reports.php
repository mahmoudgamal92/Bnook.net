<?php
include_once 'DBconnect.php'
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
          text-decoration: none !important;

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
include 'navbar.php';
     ?>
        </div>
    </div>
    <div style="padding-top:120px">
    </div>
    <?php
          $sql="select * from articles order by article_id desc limit 100 ";
          $result = mysqli_query($con,$sql);
          while($row = mysqli_fetch_array($result)){
          ?>
    <div class="row" style="padding:10px;mergin-bottom:10px">
        <div class="col-lg-10 col-md-10 col-sm-10">
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
              echo '<img src="uploads/'.$row['images'].'" style="width:100%;height:90%;max-height:200px;border: 1px solid #ddd;
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

    <!-- Footer start -->
    <footer class="dl-pt-50 text-center">
        <a href="#"><img src="./images//logo.png" alt=""></a>
        <ul class="list-unstyled dl-mt-20">
            <li>
                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fab fa-whatsapp"></i>
                </a>
        </ul>
        <p>©2019 BNOOK - All right reserved | Designed by BNOOK Team, CompanyNumber: <span>12042949</span></p>
    </footer>
    <section class="diffrents">
        <button class="btn-up"><i class="fas fa-angle-up"></i></button>
    </section>
    <!-- Footer end -->

    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
    function updatelikes()

    {

        <?php
$query=mysqli_query($con,"update articles set ");
?>


    }
    </script>
</body>

</html>