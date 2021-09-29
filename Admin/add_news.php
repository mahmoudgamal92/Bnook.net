<?php
session_start();
 include '../DBconnect.php';
?>

<?php
 $inserted=null;
 
 if (isset($_POST['upload'])) {
    $content = htmlspecialchars($_POST["content"]);
    $title = $_POST['title'];
     $date = date("Y/m/d");
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// image file directory
  	$target = "../uploads/".basename($image);
$sql="INSERT into news (title, content , date , image) values
('$title','$content','$date','$image')";

if (mysqli_query($con,$sql) && move_uploaded_file($_FILES['image']['tmp_name'], $target))
{
   $inserted = "true";
}

else{
    $inserted = "false"; 
}
mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bnook Admin Panel</title>
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
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
    
        <style>
               .successalert {
                padding: 20px;
                background-color: green;
                color: white;
                opacity: 0.5;
                margin-bottom:50px;
        
            }
            
             .failalert {
                padding: 20px;
                background-color: red;
                color: white;
                opacity: 0.5;
                margin-bottom:50px;
        
            }
        
            .closebtn {
                margin-left: 15px;
                color: white;
                font-weight: bold;
                float: right;
                font-size: 22px;
                line-height: 20px;
                cursor: pointer;
                transition: 0.3s;
            }
        
            .closebtn:hover {
                color: black;
            }
        </style>
    </head>
    
    <body>
    
        <?php
     include 'side_nav.php';
     ?>
    <div class="container-fluid">
        <div style="text-align:center">
            <form action="add_news.php" method="POST" enctype="multipart/form-data">
                <div class="container" style="margin-top:50px">

              <?php
                if($inserted == "true")
                {
                ?>
                    <div class="successalert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;
                        </span>
                        تم اضافة الخبر بنجااح
                    </div>
                    <?php
                    }
                    
                    if ($inserted == "false")
                    {
                        ?>
                         <div class="failalert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;
                        </span>
                    هناك خطأ ما الرجاء التأكد من اضافة جميع الحقول                       
                        </div>
                     <?php
                     }
                    ?>
                    <h1 style=" font-family:'Vibes', cursive;
                                font-family: 'Lemonada', cursive;
                                font-family: 'Reem Kufi', sans-serif;
                                text-align:center">
                        أضافة الأخبار الجديده
                    </h1>
                    <input type="text" placeholder="أدخل العنوان الرئيسي" name="title" class="form-control"
                        style="margin-bottom:50px;text-align:right;width:100%">
                    <textarea id="editor" rows="6" cols="200" name="content" class="form-control"
                        style="margin-bottom:50px;text-align:right;direction:rtl"></textarea>
                    <br>
                    <br>
                    <input type="file" name="image" class="btn btn-success">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-success" name="upload">submit </button>
            </form>

        </div>
    </div>
    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    <script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
    </script>
</body>

</html>