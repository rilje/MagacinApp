<?php 
  session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body style=" background-color:white;">



<nav class="navbar navbar-expand-sm bg-dark navbar-dark d-flex justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="landing.php">Pocetna</a>   
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="zaduzen-alat.php">Otpremnice</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="#">Link</a>
    </li>

  </ul>
</nav>
<hr>
<div class="container-fluid " style="display:flex; justify-content:space-between;">
    <div class="dropdown">
      <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown">
      Odaberite vrstu sredstava
      </button>
      <div class="dropdown-menu dropdown-menu-right">
      <a class="dropdown-item" href="admin.php">Osnovna sredstva</a>
      <a class="dropdown-item" href="#">Potrosni materijal</a>
      <a class="dropdown-item" href="Potrosni/index.php">Alat</a>
      <a class="dropdown-item" href="ppaparati.php">PP Aparati</a>
      <a class="dropdown-item" href="#">Vozni park</a>
    </div>
</div>

  <div class="dropdown">
      <button type="button" class="btn btn-danger dropdown-toggle btn-sm" data-toggle="dropdown">
        <?php print_r($_SESSION['username']); ?>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="login.php">Log out</a>
        
      </div>
  </div>
</div>
<hr>  

<div class="container col-md-10" style="margin-top:20px;" >
<!-- <h1 style="color:white;">Centralni magacin</h1> -->
  <div class="row" style="margin-top:30px;">
      <div class="col-md-3">
        <div class="card bg-dark" style="width:100%; text-align:center;">
          <div class="card-body">
            <img class="card-img-top" src="images/osnovna_sredstva.jpg" alt="Card image" style="width:100%">
            <hr>
            <h4 class="card-title" style="color:white" >OSNOVNA SREDSTVA</h4>
            <a href="admin.php" class="btn btn-primary btn-sm">Prikaži više</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card bg-dark" style="width:100%; text-align:center;">
          <div class="card-body">
            <img class="card-img-top" src="images/potrosni.jpg" alt="Card image" style="width:100%">
            <hr>
            <h4 class="card-title"style="color:white">POTROSNI MATERIJAL</h4>
            <a href="#" class="btn btn-primary btn-sm">Prikaži više</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card bg-dark" style="width:100%; text-align:center;">
          <div class="card-body">
            <img class="card-img-top" src="images/alat.jpg" alt="Card image" style="width:100%">
            <hr>
            <h4 class="card-title" style="color:white">ALAT</h4>
            <a href="Potrosni/index.php" class="btn btn-primary btn-sm">Prikaži više</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card bg-dark" style="width:100%; text-align:center;margin-top:0px;">
          <div class="card-body">
            <img class="card-img-top" src="images/ppaparat.png" alt="Card image" style="width:100%; height:183px;">
            <hr>
            <h4 class="card-title" style="color:white">PP APARATI</h4>
            <a href="ppaparati.php" class="btn btn-primary btn-sm">Prikaži više</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card bg-dark" style="width:100%; text-align:center; margin-top:15px;">
          <div class="card-body">
            <img class="card-img-top" src="images/mehanizacija.jpg" alt="Card image" style="width:100%; height:235px;" >
            <hr>
            <h4 class="card-title" style="color:white">VOZNI PARK</h4>
            <a href="vozni-park.php" class="btn btn-primary btn-sm">Prikaži više</a>
          </div>
        </div>
      </div>
  </div>
</div>



</body>
</html>
  