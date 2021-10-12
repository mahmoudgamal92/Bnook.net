<?php
session_start();
include_once 'components/dbconnect.php';
?>
<?php
$symbol=  strtoupper($_POST['filter_symbol']);					
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
      

        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0px auto;

        }

        th,
        td {
            color: black;
            font-weight: bold;
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            text-align:right;
        }

        .legal {
            text-align: center;
            margin-top: 50px;
            width: 50%;
            margin-left: 25%;
            background: #339933;
            border-radius: 15px 50px;

        }

        .legal p {

            display: inline block;
            color: white;
            font-size: 30px;
            font-weight: bold;
            padding-bottom: 25px;
            padding-top: 25px;
            font-family: 'Vibes', cursive;
          font-family: 'Lemonada', cursive;
          font-family: 'Reem Kufi', sans-serif;

        }


        .illegal {
            text-align: center;
            margin-top: 50px;
            width: 50%;
            margin-left: 25%;
            background: #ed0b0b;
            border-radius: 15px 50px;
          
        }

        .illegal p {

            display: inline block;
            color: white;
            font-size: 30px;
            font-weight: bold;
            padding-bottom: 25px;
            padding-top: 25px;
            font-family: 'Vibes', cursive;
          font-family: 'Lemonada', cursive;
          font-family: 'Reem Kufi', sans-serif;
        }

        .dropbtn {
            padding-top: 25px;

            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            background: transparent;
            border: none;
            color: white;
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
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-weight: bold;
        }

        .dropdown-content a:hover {
            background-color: #ddd
        }

        .show {
            display: block;
        }


        .table_title{
          display: inline-block;
          font-size: 30px;

          width: 50%;
          padding-top:120px;
          font-family: 'Vibes', cursive;
          font-family: 'Lemonada', cursive;
          font-family: 'Reem Kufi', sans-serif;
          color:#008060;
        }


        .head{


          text-align: center;
        

        }

        .illegal_info{

        background-color:red;
        color:white;
        text-align:center;
          border-radius: 25px;
          font-family: 'Vibes', cursive;
          font-family: 'Lemonada', cursive;
          font-family: 'Reem Kufi', sans-serif;
          padding : 10px;

        }


        .legal_info{

          background-color:green;
          color:white;
          text-align:center;
          border-radius: 25px;
          font-family: 'Vibes', cursive;
          font-family: 'Lemonada', cursive;
          font-family: 'Reem Kufi', sans-serif;
          padding : 10px;
         
        }
        .info_value{

            font-family: 'Vibes', cursive;
          font-family: 'Lemonada', cursive;
          font-family: 'Reem Kufi', sans-serif;
          font-weight: bolder;
          color:#008060;
          font-size:18px;
                 
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

<div class="FilterTable">
        <?php
         $data = @file_get_contents("http://173.212.230.130/site/api/v2/ahmedhaies/data_from_wsj?name=".$symbol."&is_new");
               if($data == false)
             {    
?>
        <div style="padding-top:200px;text-align:center">
            <!--<h1>يوجد خطا بسيط لدينا سوف نعالج المشكله قريبا جدا </h1>-->
        </div>
  <?php
               }
               else
               {
               
            $json = json_decode($data,true);

            //PregMatch check
            $description = strtolower( $json['json_data']['description']);
            $industry= strtolower($json['json_data']['industry']);

            //Frist Equation (less than 5 %)
            $interest = 0;
            if(isset($json['json_data']['Net interest']) && is_numeric($json['json_data']['Net interest']))
            {
                $interest = $json['json_data']['Net interest'];
            }
            
            $revenue =$json['json_data']['Sales/Revenue'] * 1000;
            //Second Equation (less than 33 %)
            $Total_Assests = $json['json_data']['Total Assets'];  
            $long_term_debt = $json['json_data']['Long-Term Debt'];
            $st_term_debt =$json['json_data']['ST Debt & Current Portion LT Debt'];
            $debts = $long_term_debt + $st_term_debt;
            $region = $json['json_data']['region'];

            $check_industry =preg_match('
            (banks| alcoholic|casino|tobacco|rental|credit|capital|markets|insurance|motion|media|investment|media|rental|recreation|motels|asset|capitalmarkets|banking|marijuana|cannabis|brewers|lodging|wineries|distilleries|banks--diversified|capital markets|diversified|gambling|reit)', $industry);
            
            $check_description = preg_match('(mariguana|cannabis|gamble|casino|wine|beer|vodka|scotch|hamburgers|hamburger|pig|pork|bacon|netflix|disney|chipotle|chuy|denny|darden|fatburger|taco|burger|mcDonald|loans|dolphin|animated| alcoholic|cruises|opendoor|coinbase)', $description);
              
                if($revenue != 0 && $interest <= 0)
                {
                    $Interest_expense_ratio_of_gross_income = 0;
                
                }
                else
                {
                    $Interest_expense_ratio_of_gross_income = 
                    ((double)$interest / (double) $revenue) * 100;
                    
                    if(is_nan($Interest_expense_ratio_of_gross_income))
                    {
                        $Interest_expense_ratio_of_gross_income = 0;
                    }
                }
              
            $Ratio_of_loans_to_total_asset= ( $debts / $Total_Assests)* 100;
            ?>
    <div class="head"> 
        <p class="table_title">
           البيانات المالية للشركة المطلوبة من المصدر المعتمد لها
        </p>
    </div>
        <table style="direction:rtl">
            <tr style="background-color: #FAFAFA; color: green;">
                <th style="color:green">Financial Information</th>
                <th style="color:black">Value</th>
                <th></th>
    
            </tr>
            <!--code-->
            <tr>
                <td class="info_value">الرمز</td>
                <td>
                    <?php  echo $symbol; ?>
                </td>
                <td></td>
            </tr>
    
            <!--name-->
                        
           
            <tr>
                <td class="info_value">الدولة</td>
                <td><?php  echo $region; ?></td>
                <td></td>
            </tr>
    
    
            <!--industry-->
    
    
            <?php
          if($check_industry == 1)
          {
           
           ?>
            <tr>
    
                <td class="info_value">الصناعة</td>
    
                <td><?php  echo  $industry; ?></td>
                <td>
                <div class="illegal_info"> محرم</div>

                    </td>
    
            </tr>
    
            <?php
          
          }
          
          else if ($industry == "not found")
          {
              
              
         ?>     
              
              
          <td class="info_value">الصناعة</td>
          <td>
                <div class="illegal_info"> لا يوجد بيانات </div>

                    </td>
          
          <?php  
          
          
          }
          
          else 
          
          {
          
          ?>
    
            <tr>
    
                <td class="info_value">الصناعة</td>
    
                <td><?php  echo  $industry; ?></td>
                    <td>
                <div class="legal_info"> شرعي</div>

                    </td>
          <?php
          
          }
          
          ?>
    
            </tr>
    
         
    
    
    
    
     <!--Activity-->
    
    
            <?php
          if($check_description==1)
          {
           
           ?>
            <tr>
    
                <td class="info_value">النشاط</td>
                <td class="info_value">تم فحص نشاط الشركه</td>
                <td>
                <div class="illegal_info"> محرم</div>

                    </td>
            </tr>
    
            <?php
          
          }
          else 
          
          {
          
          ?>
    
            <tr>
    
                <td class="info_value">النشاط</td>
                <td class="info_value">تم فحص نشاط الشركه</td>
                <td>
                <div class="legal_info"> شرعي</div>

                    </td>
            </tr>
    
            <?php
          
          }
          
          ?>
            <tr>
                <!--total revenue-->
                <td class="info_value">الإيرادات</td>
                <td><?php  echo $revenue; ?></td>
                <td></td>
    
            </tr>
          
            <tr>
                <td class="info_value">
                 إجمالي الأصول
                     </td>
                <td><?php  echo $Total_Assests; ?></td>
                <td></td>
    
            </tr>
    
          
            
             <tr>
                <td class="info_value">
                    إجمالي الديون 
                </td>
                <td><?php  echo $debts; ?></td>
                <td></td>
    
            </tr>
            
            
             <tr>
                <td class="info_value"> 
                الدخل بفائدة
                </td>
                
                <td><?php  echo $interest; ?></td>
                <td></td>
    
            </tr>
            
 
    
            <!-- the two calculated values-->
    
    
    
            <!-- Interest expense ratio of gross income -->
            <tr>
                <td class="info_value">
                    نسبة الدخل من الفوائد
                     </td>
                <td>
                    <?php  echo round( $Interest_expense_ratio_of_gross_income,3)." %"; ?>
    
                </td>
    
                   
                        <?php
                        
                        if($Interest_expense_ratio_of_gross_income > 5  )
                        {
                            
                        ?>
                        <td>
                <div class="illegal_info"> محرم</div>

                    </td>
                        <?php
                        
                        ?>
                        
                        <?php
                        }
                        else if($Interest_expense_ratio_of_gross_income <= 5)
                        {
                        ?>
                          <td>
                     <div class="legal_info"> شرعي</div>
                    </td>
                        <?php
                        }
                        else
                        {
                        ?>
                        <td>
                     <div class="illegal_info">
                        لا تنطبق الشروط 
                         </div>
                    </td>
                    
                    <?php
                        }
                    ?>
                       
            </tr>
            <!--  Ratio of loans to total assets -->
            <tr>
                <td class="info_value">
                    نسبة الديون
                     </td>
                <td><?php  echo round($Ratio_of_loans_to_total_asset,2)." %"; ?></td>
                
                        <?php
                        
                        if($Ratio_of_loans_to_total_asset > 33 )
                        {
                            
                        ?>
                        <td>
                <div class="illegal_info"> محرم</div>

                    </td>
                        <?php
                        
                        ?>
                        
                        <?php
                        }
                        else if($Ratio_of_loans_to_total_asset <= 33)
                        {
                        ?>
                          <td>
                <div class="legal_info"> شرعي</div>

                    </td>
                         
                        <?php
                        }
                        else
                        {
                        ?>
                        
                                 <td>
                <div class="illegal_info"> لا تنطبق الشروط</div>

                    </td>
                    <?php
                        }
                    ?>
    
            </tr>
            
        </table>
    
        <?php
    
    // 
    
    if ($industry == null  || ($revenue == 0 && $interest !=0) || is_nan($Ratio_of_loans_to_total_asset))
    {
        
    ?>
     <div class="illegal">
    
            <p>  لا تنطبق الشروط المالية </p>
        </div>
    
    <?php
    }
    
    else
    {
    
    ?>
    
    <?php
    
    if(
        
       $Interest_expense_ratio_of_gross_income <= 5 
    && $Ratio_of_loans_to_total_asset <= 33
    && $check_description !=1 
    && $check_industry !=1
       )
       
    {
        
    
        ?>
    
    
        <div class="legal">
    
    
         <p>مطابق للضوابط الشرعية</p>
    
        </div>
    
        <?php
    }
    
    
    else
    
    {
    
    ?>
    
    
        <div class="illegal">
    
          <p>للأسف غير مطابق للضوابط الشرعية</p>
    
    
        </div>
    
    
        <?php
    
        }
           
        }		
            
    ?>
    
  <?php
    
    
    
        }  // for switch
    
    
    ?>

</div>


       
      <div class="map_" style="padding-top: 100px;">
        <div class="map_google" style="width: 100%;position: relative;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317715.7119263355!2d-0.38178406930702025!3d51.52873519756608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2str!4v1584885403336!5m2!1sen!2str" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          <div style="position: absolute;width: 80%;bottom: 0px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/ja/">Googlemapsgenerator.com/ja/</a> & <a href="https://willoughby-pr.co.uk/">gmailbulkemailcom</a></small></div>
          <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
        </div>
      </div>
    </section>

    <?php
      include 'components/footer.php';
    ?>
  
  <script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/jquery-3.3.1.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/main.js"></script>
  </body>
</html>