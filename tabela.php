
<?php 
session_start();
// print_r($_SESSION);

require_once "db.php";
$db = "";
$brojac_zaduzeno = 0;
$brojac_stanje;
#Uslovi za odabir baze:
if($_REQUEST['id'] == 1){
    $db = "aparati";
    $podaci = $pdo->query("SELECT * FROM $db ORDER BY id")->fetchAll();
    // print_r($podaci);
    $podatak = $podaci[1];
    foreach($podaci as $podatak){
        if($podatak['zaduzio'] != ''){
            $brojac_zaduzeno++;
        }
    }
    $brojac_stanje = count($podaci) - $brojac_zaduzeno;
}
if($_REQUEST['id'] == 2){
    $db = "busilice";
    $podaci = $pdo->query("SELECT * FROM $db ORDER BY id")->fetchAll();
    // print_r($podaci);
    $podatak = $podaci[1];
    foreach($podaci as $podatak){
        if($podatak['zaduzio'] != ''){
            $brojac_zaduzeno++;
        }
    }
    $brojac_stanje = count($podaci) - $brojac_zaduzeno;
}
if($_REQUEST['id'] == 3){
    $db = "maleb";
    $podaci = $pdo->query("SELECT * FROM $db ORDER BY id")->fetchAll();
    // print_r($podaci);
    $podatak = $podaci[1];
    foreach($podaci as $podatak){
        if($podatak['zaduzio'] != ''){
            $brojac_zaduzeno++;
        }
    }
    $brojac_stanje = count($podaci) - $brojac_zaduzeno;
}
if($_REQUEST['id'] == 4){
    $db = "velikeb";
    $podaci = $pdo->query("SELECT * FROM $db ORDER BY id")->fetchAll();
    // print_r($podaci);
    $podatak = $podaci[1];
    foreach($podaci as $podatak){
        if($podatak['zaduzio'] != ''){
            $brojac_zaduzeno++;
        }
    }
    $brojac_stanje = count($podaci) - $brojac_zaduzeno;
}
if($_REQUEST['id'] == 5){
    $db = "ceoneb";
    $podaci = $pdo->query("SELECT * FROM $db ORDER BY id")->fetchAll();
    // print_r($podaci);
    $podatak = $podaci[1];
    foreach($podaci as $podatak){
        if($podatak['zaduzio'] != ''){
            $brojac_zaduzeno++;
        }
    }
    $brojac_stanje = count($podaci) - $brojac_zaduzeno;
}
if($_REQUEST['id'] == 6){
    $db = "testere";
    $podaci = $pdo->query("SELECT * FROM $db ORDER BY id")->fetchAll();
    // print_r($podaci);
    $podatak = $podaci[1];
    foreach($podaci as $podatak){
        if($podatak['zaduzio'] != ''){
            $brojac_zaduzeno++;
        }
    }
    $brojac_stanje = count($podaci) - $brojac_zaduzeno;
}
if($_REQUEST['id'] == 7){
    $db = "dizalice";
    $podaci = $pdo->query("SELECT * FROM $db ORDER BY id")->fetchAll();
    // print_r($podaci);
    $podatak = $podaci[1];
    foreach($podaci as $podatak){
        if($podatak['zaduzio'] != ''){
            $brojac_zaduzeno++;
        }
    }
    $brojac_stanje = count($podaci) - $brojac_zaduzeno;
}
if($_REQUEST['id'] == 8){
    $db = "vozila";
    $podaci = $pdo->query("SELECT * FROM $db ORDER BY id")->fetchAll();
    // print_r($podaci);
    $podatak = $podaci[1];
    foreach($podaci as $podatak){
        if($podatak['zaduzio'] != ''){
            $brojac_zaduzeno++;
        }
    }
    $brojac_stanje = count($podaci) - $brojac_zaduzeno;
}
if($_REQUEST['id'] == 9){
    $db = "agregati";
    $podaci = $pdo->query("SELECT * FROM $db ORDER BY id")->fetchAll();
    // print_r($podaci);
    $podatak = $podaci[1];
    foreach($podaci as $podatak){
        if($podatak['zaduzio'] != ''){
            $brojac_zaduzeno++;
        }
    }
    $brojac_stanje = count($podaci) - $brojac_zaduzeno;
}
if($_REQUEST['id'] == 10){
    $db = "laser";
    $podaci = $pdo->query("SELECT * FROM $db ORDER BY id")->fetchAll();
    // print_r($podaci);
    $podatak = $podaci[1];
    foreach($podaci as $podatak){
        if($podatak['zaduzio'] != ''){
            $brojac_zaduzeno++;
        }
    }
    $brojac_stanje = count($podaci) - $brojac_zaduzeno;
}
if($_REQUEST['id'] == 11){
    $db = "srafilice";
    $podaci = $pdo->query("SELECT * FROM $db ORDER BY id")->fetchAll();
    // print_r($podaci);
    $podatak = $podaci[1];
    foreach($podaci as $podatak){
        if($podatak['zaduzio'] != ''){
            $brojac_zaduzeno++;
        }
    }
    $brojac_stanje = count($podaci) - $brojac_zaduzeno;
}
if($_REQUEST['id'] == 12){
    $db = "ostalo";
    $podaci = $pdo->query("SELECT * FROM $db ORDER BY id")->fetchAll();
    // print_r($podaci);
    $podatak = $podaci[1];
    foreach($podaci as $podatak){
        if($podatak['zaduzio'] != ''){
            $brojac_zaduzeno++;
        }
    }
    $brojac_stanje = count($podaci) - $brojac_zaduzeno;
}



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

<!-- <?php include "moduli/head.php" ?> -->



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

<div class="container-fluid" style="margin-top:30px">

    <div class="row">
        <div class="col-md-3">
            <div class="card" style="text-align:center;">
                <div class="card-header bg-primary text-white"><h3>UKUPNO</h3></div>
                <div class="card-body"><h2><?= count($podaci) ?></h2></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="text-align:center;">
                <div class="card-header bg-success text-white"><h3>RASPOLOZIVO</h3></div>
                <div class="card-body"><h2><?= $brojac_stanje ?> </h2></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="text-align:center;">
                <div class="card-header bg-warning text-white"><h3>ZADUZENO</h3></div>
                <div class="card-body"><h2><?= $brojac_zaduzeno ?></h2></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="text-align:center;">
                <div class="card-header bg-danger text-white"><h3>ZA SERVIS</h3></div>
                <div class="card-body"><h2>0</h2></div>
            </div>
        </div>
        
        <div class="col-md-2" style="margin-top:10px;">
        <div class="card-body">
                    <a href="dodaj.php?kategorija_id=<?= $podatak['kategorija_id'] ?>">
                        <button type="button" class="btn btn-primary btn-sm">UNESI NOVI ALAT</button></div>
                    </a>
                </div>
        </div>
    </div>
</div> 

<div class="container-fluid">
    <h3 style="color: black;">  <b>* <?= $_REQUEST['naziv'] ?> *</b></h3>
    
    
    <table class="table table-bordered table-striped table-hover" style="width:100%;">
        <thead>
            <?php foreach($podatak as $key => $value) { ?>
                <th style="text-align:center;font-size:17px;"><?= $key ?></th>
            <?php   } ?>
            <th style="text-align:center;font-size:17px;">Akcije</th>
            <!-- <th>Dodaj Alat</th> -->
        </thead>
        <tbody>
            <?php foreach($podaci as $trenutni_podatak) { ?>
                <tr>
                <?php foreach($trenutni_podatak as $key => $value) { ?>
                        <td style="text-align:center; font-size:15px;"><?= $value ?></td>
                <?php   } ?> 
                <td style="display:flex; justify-content:center; gap:10px;">
                        <span><a href="delete.php?brisanje_id=<?= $trenutni_podatak['id'] ?>&kategorija_id=<?= $trenutni_podatak['kategorija_id'] ?>" button  style="font-size:13px;" type="button" class="btn btn-outline-danger">Obrisi</button> </a></span>
                        <span><a href="update.php?kategorija_id=<?= $trenutni_podatak['kategorija_id'] ?>&id=<?= $trenutni_podatak['id'] ?>"><button  style="font-size:13px;" type="button" class="btn btn-outline-info">Izmeni</button></a></span>
                </td>
                </tr>
                    
            
        <?php    } ?>
                
            
        </tbody>
    </table>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>
  