<?php
session_start();
 include '../DBconnect.php';
?>
<?php
$id = $_GET['id'];
$cmd = "select * from articles where article_id = '$id'";
$result=mysqli_query($con,$cmd);
$article = mysqli_fetch_array($result);
?>

<?php
$alert_visible = 0;
if(isset($_GET['updated']))
{
    $alert_visible = 1;
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
    p {
        color: #0a6ebd;
        font-weight: bold;
        font-size: 20px
    }

    .alert {
        padding: 20px;
        background-color: green;
        color: white;
        opacity: 0.5;

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
            <form action="edit_report.php" method="POST" enctype="multipart/form-data">
                <div class="container" style="margin-top:50px">
      <?php
if($alert_visible == 1)
{
        ?>
                    <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;
                        </span>
                    تم تعديل التقرير بنجااح
                    </div>
                    <?php
}
?>

                    <h1 style=" font-family:'Vibes', cursive;
                                font-family: 'Lemonada', cursive;
                                font-family: 'Reem Kufi', sans-serif;
                                text-align:center">
                        تعديل التقارير
                    </h1>
                    <img id = "article_img" src="<?php echo "./../uploads/".$article['images'] ?>"
                    style="width:300px;height:200px;margin-bottom:50px; border-radius: 15px;"
                    />
                    <input type="hidden" name="size" value="1000000">
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="text" placeholder="أدخل العنوان الرئيسي" name="title" class="form-control"
                        style="margin-bottom:50px;text-align:right;width:100%" 
                        value="<?php echo $article['title'];?>">
                
                    <textarea id="editor" rows="6" cols="200" name="content" class="form-control"
                        style="margin-bottom:50px;text-align:right;direction:rtl">
                        
                        <?php 
                        echo $article['content'];
                        ?>
                    </textarea>
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