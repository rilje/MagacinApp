
<?php 
session_start();
// print_r($_SESSION);

require_once "db.php";
$podaci = $pdo->query("SELECT * FROM alat")->fetchAll();
$primer = $podaci[0];


# Dohvatiti podatke iz forme i uneti ih u bazu
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $id = $_REQUEST['id'];
  echo $id;
  $stmt = $pdo->prepare("SELECT * FROM alat WHERE id=?");
  $stmt->execute([$id]);
  $alat_za_menjanje = $stmt->fetch();
  print_r($alat_za_menjanje);
  
  $stmt2 = $pdo->prepare("UPDATE alat SET Naziv=?, Tip=?, Materijal=?, Broj=?,Kolicina=? WHERE id=?");
  $stmt2->execute([$_REQUEST['naziv'], $_REQUEST['tip'], $_REQUEST['materijal'], $_REQUEST['broj'], $_REQUEST['kolicina'], $id]);
  header("Location: index.php");
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
      <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown">
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
      <button type="button" class="btn btn-danger dropdown-toggle btn-sm" data-toggle="dropdown">
        <?php print_r($_SESSION['username']); ?>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="login.php">Log out</a>
        
      </div>
  </div>
</div>


<br>
<div class="container-fluid d-flex ">
    <div class="col-md-8">
        <table class="table table-hover">
           <thead>
                <?php foreach($primer as $key=>$value) { ?>
                <th><?= $key ?></th>
                
                <?php    } ?>
                <th>Action</th>
           </thead>
           <tbody>
            <?php foreach($podaci as $podatak) { ?>
                <tr>
                    <?php foreach($podatak as $key=>$value){ ?>
                        <td style="font-size:15px"><?= $value ?></td>
                    <?php    } ?>
                    <td>
                    <span><a href=""><button  style="font-size:13px;" type="button" class="btn btn-outline-danger">Izbrisi</button> </a></span>
                    <span><a href="edit.php?id=<?= $podatak['ID'] ?>"><button  style="font-size:13px;" type="button" class="btn btn-outline-info">Izmeni</button></a></span>
                    </td>
                </tr>
              
           <?php } ?>
           </tbody>
        </table>
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



<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>
  