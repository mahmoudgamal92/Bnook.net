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
      <section class="contact dl-pt-150">
          <h2 class="text-center h1" style="
          font-family: 'Harmattan', sans-serif;
          font-family: 'Lalezar', cursive;
          font-family: 'Mada', sans-serif;
          font-family: 'Changa', sans-serif;
          color:  #00e6ac ;">
      الدورات التدريبية
          </h2>
</section>


<section class="container courses my-5 rtl" style="display:block">


<div style="">  

        <p style="text-align:center;margin-top:20px;margin-bottom:50px">
            سيتم اطلاق الدورات التدريبية الخاصة بموقع بنوك نت قريبا جدا ..... انتظرونا
        </p>
       
     <lottie-player src="https://assets1.lottiefiles.com/datafiles/bEYvzB8QfV3EM9a/data.json"  background="transparent"  speed="1"  
style="width: '100%'; height: 200px;"  loop autoplay></lottie-player> 

</div>
        <!-- <div class="row">
            <div
                class="col-lg-4 col-md-6 col-12 mb-5 course position-relative d-flex justify-content-center hvr-float wow fadeInUp rtl text-right"
                data-wow-delay="0.25s">
                <div class="w-95 p-3 bg-white shadow d-flex flex-column justify-content-between">
                    <div>
                        <div class="course-img mb-3" style="height: 400px;">
                            <a href="shop.php" class="h-100 d-block position-relative bgi" style="background-image: url('https://dryosefalhasany.com/uploads/books/64/images/runing_empty.jpg');">
                            </a>
                        </div>
                        <div class="course-title my-2">
                            <a href="shop.php">
                              عنوان الكتاب
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="course-description position-relative text-small">
                            <p>
                            وصف الكتاب  وصف الكتاب  وصف الكتاب  وصف الكتاب  وصف الكتاب  وصف الكتاب  وصف الكتاب  وصف الكتاب  وصف الكتاب 
                            </p>
                            <a href="shop.php">
                               عرض المزيد
                            </a>
                            <span class="course-price px-3 py-1 text-center bg-main-green text-white">
                               30 sr
                            </span>
                        </div>
                        <div class="course-footer d-flex justify-content-between pt-3 border-top mt-3">
                            <div class="">
                                <span class="icon ml-1">
                                    <img src="images/eye.png" style="width:20px">
                                </span>
                                <span> 2813</span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
         
            <div class="col-12 d-flex justify-content-center">
                <a href="shop.php" class="btn text-white btn-custom px-4 ml-3 hvr-ripple-out">
                    <?php echo $lang['view_more'];?>
                </a>

            </div>
        </div> -->
    </section>
 
    <!-- Footer start -->
    <?php include 'components/footer.php'; ?>
     <section class="diffrents">
        <button class="btn-up">
            <img src="./images/up_arrow.png" style="width:50px;height:50px"/>
            </button>
      </section>
    <!-- Footer end -->

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>