
<?php 
    require_once "db.php";
    session_start();
    # baza
    $stmt = $pdo->prepare("SELECT * FROM alat WHERE id=?");
    $stmt->execute([$_REQUEST['id']]);
    $alat = $stmt->fetch();
    // print_r($alat);
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
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark d-flex justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="../landing.php">Pocetna</a>   
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="../zaduzen-alat.php">Otpremnice</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="#">Link</a>
    </li>
    
  </ul>
</nav>


<hr>
<div class="container-fluid " style="display:flex; justify-content:space-between;">
    <div class="dropdown">
      <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
      Odaberite vrstu sredstava
      </button>
      <div class="dropdown-menu dropdown-menu-right">
      <a class="dropdown-item" href="../admin.php">Osnovna sredstva</a>
      <a class="dropdown-item" href="#">Potrosni materijal</a>
      <a class="dropdown-item" href="index.php">Alat</a>
      <a class="dropdown-item" href="../ppaparati.php">PP Aparati</a>
      <a class="dropdown-item" href="#">Vozni park</a>
    </div>
</div>

  <div class="dropdown">
      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
        <?php print_r($_SESSION['username']); ?>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="login.php">Log out</a>
        
      </div>
  </div>

</div>
<hr>

<br>
<div class="container-fluid d-flex ">
    <div class="col-md-8">
        <h4>Izmena alata</h4>
        <br>
        <form action="index.php?id=<?= $alat['ID'] ?>" method="post">   
            
            <div class="col" style="margin-bottom:15px">
                <input type="text" class="form-control" placeholder="Unesite naziv" value="<?= $alat['Naziv'] ?>" name="naziv">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Unesite tip alata" value="<?= $alat['Tip'] ?>" name="tip">
            </div>
            <div class="col"  style="margin-top:15px">
                <input type="text" class="form-control" placeholder="Unesite vrstu materijala" value="<?= $alat['Materijal'] ?>" name="materijal">
            </div>
            <div class="col" style="margin-top:15px">
                <input type="text" class="form-control" placeholder="Unesite broj" value="<?= $alat['Broj'] ?>" name="broj">
            </div>
            <div class="col" style="margin-top:15px">
                <input type="text" class="form-control" placeholder="Unesite kolicinu" value="<?= $alat['Kolicina'] ?>" name="kolicina">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Izmeni</button>
        </form> 
    </div>

    <div class="col-md-4" style="text-align:start">

        <h3>Navigacija kroz alat</h3>
        <hr>
        <p>
            <a href="index.php">Sav alat</a>
        </p>
        <p>
            <a href="prikaz.php?pas=mesing">Mesingani alat</a>
        </p>
        <p>
            <a href="prikaz.php?pas=celik">Čelični alat</a>
        </p>
        <p>
            <a href="prikaz.php?pas=udar">Udarni ključevi</a>
        </p>

    </div>
</div>



<div class="jumbotron text-center" style="margin-top:15px">
  <p>Footer</p>
</div>

</body>
</html>