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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CSE 341 Web Backend Development II</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="assignments.php">Assignments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Links</a>
        </li>
      </ul>
      <span class="navbar-text">
        <?php
        $d1=strtotime("April 08");
        $d2=ceil(($d1-time())/60/60/24);
        echo $d2 ." days remaining in Semester!";
        ?>
      </span>
    </div>
  </div>
</nav>

<div class="container">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="profile.jpg" class="img-fluid" alt="Brandon Gorringe">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Brandon Gorringe</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="jquery-3.5.1.min.js"></script>
<script src="bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>
