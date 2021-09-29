<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dl.helper.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!---------------google-font------------------>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
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
    <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">

    <!----------------google font arabic--------------->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|BenchNine|Quattrocento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/Modal.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="utf-8">
    <title>BNOOK</title>
    <style>
*{
    font-family: 'Cairo', sans-serif !important;
}
.leftcolumn {   
  float: left;
  width: 75%;
  padding-left:5px;
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

</style> 
 </head>
  <body>
    <div class="header">
      <div class="layout">
   <nav class="navbar navbar-expand-md navbar-light" style="margin:0;">
          <a class="navbar-brand color-style" href="index.php">
            <img src="./images/logo.png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="navbar-icon"></div>
            <div class="navbar-icon"></div>
            <div class="navbar-icon"></div>
          </button>
          <div class="navbar_collapse" id="navbarSupportedContent">
            <i class="fas fa-times close"  type="button" 
            data-toggle="collapse" data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" 
            aria-expanded="false" aria-label="Toggle navigation"></i>
            <i  class="fas fa-close"type="button" 
            data-toggle="collapse" 
            data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" 
            aria-expanded="false" 
            aria-label="Toggle navigation"></i>
            <ul id="nav" class="navbar-nav list-before">
              <li>
                <h2  style="color:darkgoldenrod;
                  font-family: 'Reem Kufi', sans-serif;">بنوك
                </h2>
              </li>
             </ul>
             
        </nav>
      </div>

      </div>

 <div style="padding-top:200px;text-align:center">
     <p style="padding:20px;background-color:red;border-radius:15px 50px;width:70%;margin-bottom:250px;margin-top:100px;display:inline-block;color:#FFF">
      الموقع مغلق للصيانة ونفيدكم أن السوق مغلق يوم الاثنين بمناسبة "عيد العمال"

          </p>
         </div>
    <!-- Footer start -->
  <?php include 'footer.php'; ?>
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

