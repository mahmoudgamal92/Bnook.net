<?php
session_start();
 include '../DBconnect.php';
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

</head>

<body>

    <?php
 include 'side_nav.php';
 ?>
    <div class="container-fluid">
        <div style="text-align:center">
            <form action="InsertReports.php" method="POST" enctype="multipart/form-data">
                <div class="container" style="margin-top:50px">


                    <h1 style=" font-family:'Vibes', cursive;
                                font-family: 'Lemonada', cursive;
                                font-family: 'Reem Kufi', sans-serif;
                                text-align:center">
                        أضافة التحليلات و التقارير
                    </h1>
                    <input type="hidden" name="size" value="1000000">
                    <input type="text" placeholder="أدخل العنوان الرئيسي" name="title" class="form-control"
                        style="margin-bottom:50px;text-align:right;width:100%">
                    <input type="text" placeholder="أدخل العنوان الفرعي" name="subtitle" class="form-control"
                        style="margin-bottom:50px;text-align:right">
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