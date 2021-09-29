<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #1f3b89;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
  width:80%;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body style="text-align:center">

<form action="yahoo_result.php" method="POST">
  <div class="container" style="text-align:center;display:inline-block;margin-top:20vh">
    <h1>الفلتر الشرعي للاسهم النسخة التجريبيه
    
    </h1>
    <h3 style="color:#762f6a">Yahoo Finance</h3>
    <hr>

    <label for="code"><b>Company Code</b></label>
    <input type="text" placeholder="Enter Company Code" name="filter_symbol" required>
    <button type="submit" class="registerbtn" >
        
        Submit
    </button>

</form>

</body>
</html>