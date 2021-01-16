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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar w/ text</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
      <span class="navbar-text">
        Navbar text with an inline element
      </span>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col">
      1 of 1
    </div>
  </div>
  <div class="row">
    <div class="col">
      1 of 3
    </div>
    <div class="col">
      <?php
      $d1=strtotime("April 08");
      $d2=ceil(($d1-time())/60/60/24);
      echo "There are " . $d2 ." days until End of Semester!";
      ?>
    </div>
    <div class="col">
      3 of 3
    </div>
  </div>
</div>

<script src="jquery-3.5.1.min.js"></script>
<script src="bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>
