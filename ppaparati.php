<?php 
  session_start();
  include_once "db2.php";
  $stmt = $pdo->prepare("SELECT * FROM ppaparati WHERE tip=? ORDER BY id ASC");
  $stmt->execute(["s9"]);
  $aparati_s9 = $stmt->fetchAll();
  $aparat_s9 = $aparati_s9[0];

  $stmt2 = $pdo->prepare("SELECT * FROM ppaparati WHERE tip=? ORDER BY id ASC");
  $stmt2->execute(["s6"]);
  $aparati_s6 = $stmt2->fetchAll();
  $aparat_s6 = $aparati_s6[0];


  $stmt3 = $pdo->prepare("SELECT * FROM ppaparati WHERE tip=? ORDER BY id ASC");
  $stmt3->execute(["s3"]);
  $aparati_s3 = $stmt3->fetchAll();
  $aparat_s3 = $aparati_s3[0];

  $stmt4 = $pdo->prepare("SELECT * FROM ppaparati WHERE tip=? ORDER BY id ASC");
  $stmt4->execute(["s2"]);
  $aparati_s2 = $stmt4->fetchAll();
  $aparat_s2 = $aparati_s2[0];
 
  $stmt5 = $pdo->prepare("SELECT * FROM ppaparati WHERE tip=? ORDER BY id ASC");
  $stmt5->execute(["s1"]);
  $aparati_s1 = $stmt5->fetchAll();
  $aparat_s1 = $aparati_s1[0];

  $rez = "";
  $brojac_pronadjeno = 0;
  $pretraga_niz = [];
  if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    if($_REQUEST['pretraga'] == ""){
      $pretraga_niz = [];
    }else{
      $svi_aparati = $pdo->query("SELECT * FROM ppaparati")->fetchAll();
      foreach($svi_aparati as $trenutni_aparat){
        foreach($trenutni_aparat as $key => $value){
          if($value == $_REQUEST['pretraga']){
            $brojac_pronadjeno++;
            array_push($pretraga_niz,$trenutni_aparat);
          }
  
        }
      }
      $rez = true;
    } 
    }
   

  
// print_r($pretraga_niz);

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


<div class="container-fluid " style="margin-top:25px">
        
  <hr>
    <div class="row d-flex justify-content-center">
        <div class="col-md-2" >
            <div class="card" style="text-align:center;">
                <div class="card-header bg-primary text-white"><h3>S9 APARATI</h3></div>
                <div class="card-body"><h2><?php echo count($aparati_s9) ?></h2></div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card" style="text-align:center;">
                <div class="card-header bg-primary text-white"><h3>S6 APARATI</h3></div>
                <div class="card-body"><h2><?php echo count($aparati_s6) ?></h2></div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card" style="text-align:center;">
                <div class="card-header bg-primary text-white"><h3>S3 APARATI</h3></div>
                <div class="card-body"><h2><?php echo count($aparati_s3) ?></h2></div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card" style="text-align:center;">
                <div class="card-header bg-primary text-white"><h3>S2 APARATI</h3></div>
                <div class="card-body"><h2><?php echo count($aparati_s2) ?></h2></div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card" style="text-align:center;">
                <div class="card-header bg-primary text-white"><h3>S1 APARATI</h3></div>
                <div class="card-body"><h2><?php echo count($aparati_s1) ?></h2></div>
            </div>
        </div>    
    </div>
    <br>
    <div class="container-fluid d-flex justify-content-between">
        
        
        
        <div class="col-md-4" style="margin-top:10px;">
            <div class="card" style="text-align:start;">
              <div class="card-body">

                <form action="ppaparati.php" method="post">
                  <div class="input-group mb-3">
                    <input value="<?php if(isset($_REQUEST['pretraga'])) echo $_REQUEST['pretraga'] ?>" name="pretraga" type="text" class="form-control" placeholder="Pretraga po zadatom pojmu">
                      <div class="input-group-append">
                        <button class="btn btn-success" type="submit">Pretraga</button>
                    </div>
                  </div>
                </form>
                
              </div>
            </div>
        </div>

        
        <div class="col-md-7" style="margin-top:10px;">
            <div class="" style="text-align:start;">
              <div class="">
                <?php if($rez){
                  echo "<p>Pronadjeno: $brojac_pronadjeno</p>";
                  foreach($pretraga_niz as $clan){ ?>
                    
                      <a href="#">
                      <?= $clan['serijski'] ?>
                      </a>
                   
                <?php  }
                } ?>
                
              </div>
            </div>
        </div> 
        
    </div>
</div> 
<div class="container-fluid">
  <hr>
    <div class="col-md-12 d-flex justify-content-between align-items-center">
      <h1>S9 Aparati</h1>
  
      <div class="col-md-2" style="margin-top:10px;">
            <div class="card" style="text-align:center;">
                
                <div class="card-body">
                    <a href="dodaj-aparat.php">
                        <button type="button" class="btn btn-info btn-sm">UNESI NOVI APARAT</button></div>
                    </a>
                </div>
            </div>
        </div>
    
    </div>
    <br>

    <table class="table table-bordered table-striped table-hover" style="width:100%;">
        <thead>
            <?php foreach($aparat_s9   as $key => $value) { ?>
                <th class="th" style="text-align:center;font-size:17px;"><?= $key ?></th>
            <?php   } ?>
            <th></th>
            <!-- <th>Dodaj Alat</th> -->
        </thead>
        <tbody>
           <?php foreach($aparati_s9 as $aparat) { ?>
              <tr>
                <?php foreach($aparat as $key => $value) { ?>
                    <td style="text-align:center; font-size:15px;"><?= $value ?></td>
                    
              <?php  } ?>
              
              <td style="text-align:center;">
                      <span><a href="update-aparat.php?id=<?= $aparat['id'] ?>"><button style="font-size:13px; type="button" class="btn btn-outline-info">Izmeni</button></a></span>
                      <span><a href="delete-aparat.php?id=<?= $aparat['id'] ?>"><button style="font-size:13px; type="button" class="btn btn-outline-danger">Izbrisi</button> </a></span>
                  </td>
            </tr>
          <?php  } ?>
                
            
        </tbody>
    </table>
</div>

<div class="container-fluid">
    <h1>S6 Aparati</h1>
    <br>
    

    <table class="table table-bordered table-striped table-hover" style="width:100%;">
        <thead>
            <?php foreach($aparat_s6   as $key => $value) { ?>
                <th class="th" style="text-align:center;font-size:17px;"><?= $key ?></th>
            <?php   } ?>
            <th></th>
            <!-- <th>Dodaj Alat</th> -->
        </thead>
        <tbody>
           <?php foreach($aparati_s6 as $aparat) { ?>
              <tr>
                <?php foreach($aparat as $key => $value) { ?>
                    <td style="text-align:center; font-size:15px;"><?= $value ?></td>
              <?php  } ?>
              <td style="text-align:center;">
                <span><a href="update-aparat.php?id=<?= $aparat['id'] ?>"><button style="font-size:13px; type="button" class="btn btn-outline-info">Izmeni</button></a></span>
                <span><a href="delete-aparat.php?id=<?= $aparat['id'] ?>"><button style="font-size:13px; type="button" class="btn btn-outline-danger">Izbrisi</button> </a></span>
              </td>
              </tr>
          <?php  } ?>
                
            
        </tbody>
    </table>
</div>
<div class="container-fluid">
    <h1>S3 Aparati</h1>
    <br>
    

    <table class="table table-bordered table-striped table-hover" style="width:100%;">
        <thead>
            <?php foreach($aparat_s3   as $key => $value) { ?>
                <th class="th"style="text-align:center;font-size:17px;"><?= $key ?></th>
            <?php   } ?>
            <th></th>
            <!-- <th>Dodaj Alat</th> -->
        </thead>
        <tbody>
           <?php foreach($aparati_s3 as $aparat) { ?>
              <tr>
                <?php foreach($aparat as $key => $value) { ?>
                    <td style="text-align:center; font-size:15px;"><?= $value ?></td>
              <?php  } ?>
                <td style="text-align:center;">
                  <span><a href="update-aparat.php?id=<?= $aparat['id'] ?>"><button style="font-size:13px; type="button" class="btn btn-outline-info">Izmeni</button></a></span>
                  <span><a href="delete-aparat.php?id=<?= $aparat['id'] ?>"><button style="font-size:13px; type="button" class="btn btn-outline-danger">Izbrisi</button> </a></span>
                </td>
              </tr>
          <?php  } ?>
                
            
        </tbody>
    </table>
</div>
<div class="container-fluid">
    <h1>S2 Aparati</h1>
    <br>
    

    <table class="table table-bordered table-striped table-hover" style="width:100%;">
        <thead>
            <?php foreach($aparat_s2   as $key => $value) { ?>
                <th class="th" style="text-align:center;font-size:17spx;"><?= $key ?></th>
            <?php   } ?>
            <th></th>
            <!-- <th>Dodaj Alat</th> -->
        </thead>
        <tbody>
           <?php foreach($aparati_s2 as $aparat) { ?>
              <tr>
                <?php foreach($aparat as $key => $value) { ?>
                    <td style="text-align:center; font-size:15px;"><?= $value ?></td>
              <?php  } ?>
                <td style="text-align:center;">
                  <span><a href="update-aparat.php?id=<?= $aparat['id'] ?>"><button style="font-size:13px; type="button" class="btn btn-outline-info">Izmeni</button></a></span>
                  <span><a href="delete-aparat.php?id=<?= $aparat['id'] ?>"><button style="font-size:13px; type="button" class="btn btn-outline-danger">Izbrisi</button> </a></span>
                </td>
              </tr>
          <?php  } ?>
                
            
        </tbody>
    </table>
</div>
<div class="container-fluid">
    <h1>S1 Aparati</h1>
    <br>
    

    <table class="table table-bordered table-striped table-hover" style="width:100%;">
        <thead>
            <?php foreach($aparat_s1   as $key => $value) { ?>
                <th class="th" style="text-align:center;font-size:17px;"><?= $key ?></th>
            <?php   } ?>
            <th></th>
            <!-- <th>Dodaj Alat</th> -->
        </thead>
        <tbody>
           <?php foreach($aparati_s1 as $aparat) { ?>
              <tr>
                <?php foreach($aparat as $key => $value) { ?>
                    <td style="text-align:center; font-size:15px;"><?= $value ?></td>
              <?php  } ?>
              <td style="text-align:center;">
                <span><a href="update-aparat.php?id=<?= $aparat['id'] ?>"><button style="font-size:13px; type="button" class="btn btn-outline-info">Izmeni</button></a></span>
                <span><a href="delete-aparat.php?id=<?= $aparat['id'] ?>"><button style="font-size:13px; type="button" class="btn btn-outline-danger">Izbrisi</button> </a></span>
            </td>
              </tr>
          <?php  } ?>
                
            
        </tbody>
    </table>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>