<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name= "description" content="Homepage for Brandon Gorringe ">
  <meta name="keywords" content="CSE 341, Homepage, Brandon Gorringe, Web Backend Development II">
  <title> Home Page </title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="script.js"></script>
</head>
<body>
<div class="days_left">
<?php
$d1=strtotime("April 08");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until End of Semester!";
?>
</div>
</body>
</html>
