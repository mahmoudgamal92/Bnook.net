<?php
if(!isset($_POST['filter_symbol']))
{
header("Location: index.php");
}
$symbol = strtoupper($_POST['filter_symbol']);
?>
<?php

$url = "http://173.212.230.130/site/api/v2/ahmedhaies/data_from_business_insider?name=".$symbol;
$json = @file_get_contents($url); 
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
    <link href="https://fonts.googleapis.com/css?family=El+Messiri|Harmattan|Lalezar|Vibes&display=swap"
        rel="stylesheet">
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
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|BenchNine|Quattrocento&display=swap"
        rel="stylesheet">
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

    * {
        font-family: Greta_Arabic !important;
    }

    .chart {
        padding-top: 150px;
    }
    </style>
</head>

<body>
    <div class="header">
        <div class="layout">
            <?php include 'navbar.php'; ?>
        </div>
    </div>

    <div class="container" style="padding-top:150px;text-align:center">
        <h1 style="color:#008036">
            فلتر تقييمات الشركات
        </h1>
        <p>
            هذا الفلتر يعمل برمز الشركة وهو محدُث بشكل يومي ويساعد في معرفة آخر تقييمات وآراء المؤسسات المالية للشركات
            حيث يتم تحليل الشركات مالياً ودراسة وضعها بالمستقبل وبناء على المخرجات يتم وضع توصية شراء أو بيع مع تحديد
            سعر مستهدف أو رفع تقييم سابق.


        </p>
        <h2 style="color:#008036;margin-bottom:50px">
            <?php  echo strtoupper($_POST['filter_symbol']); ?>
        </h2>
        <table class="table table-hover" style="direction:rtl">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Financial Institution</th>
                    <th>Type of Rating</th>
                    <th>Target</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = json_decode($json,true);
                foreach($data['Analyst Opinions'] as $record) {
                    ?>
                <tr>
                    <td><?php  echo $record['date']; ?></td>
                    <td style="color:#1f4e83;font-weight:bold">
                        <?php echo $record['financial_institution']; ?></td>


                    <td style="color:#1f4e83;font-weight:bold">
                        <?php 
                    if($record['type_of_rating'] == "Maintained Buy" || $record['type_of_rating'] == "Upgraded to Hold" || $record['type_of_rating'] == "Upgraded to Buy" )
                    {
                    echo '<span style="color:green">'.$record['type_of_rating'].
                    '</span>';
                    }
                    else if($record['type_of_rating'] == "Maintained Hold"){
                        echo '<span style="color:grey">'.$record['type_of_rating'].
                        '</span>';
                    }
                    else
                    {
                        echo '<span style="color:red">'.$record['type_of_rating'].
                        '</span>';
                    }
                    ?>
                    </td>

                    <td><?php echo $record['target']; ?></td>

                </tr>
                <?php
                 }
                ?>
            </tbody>
        </table>
    </div>


    <?php include 'footer.php'; ?>
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