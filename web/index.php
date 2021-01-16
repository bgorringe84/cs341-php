<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name= "description" content="Homepage for Brandon Gorringe ">
  <meta name="keywords" content="CSE 341, Homepage, Brandon Gorringe, Web Backend Development II">
  <title> Home Page </title>
  <link href="bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="days_left">
    <?php
    $d1=strtotime("April 08");
    $d2=ceil(($d1-time())/60/60/24);
    echo "There are " . $d2 ." days until End of Semester!";
    ?>
  </div>

<script src="jquery-3.5.1.min.js"></script>
<script src="bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>
