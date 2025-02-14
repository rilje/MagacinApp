<?php 
    session_start();
    # Dohvatanje podataka:
    require_once "db3.php";
    $kategorije = $pdo->query("SELECT * FROM kategorije")->fetchAll();
    // print_r($kategorije);
    
    #Putnicka vozila
    $putnicka = $pdo->query("SELECT * FROM vozila WHERE kategorija_id='1'")->fetchAll();
    // print_r($putnicka);
    $teretna = $pdo->query("SELECT * FROM vozila WHERE kategorija_id='2'")->fetchAll();
    // print_r($putnicka);
    $dizalice = $pdo->query("SELECT * FROM vozila WHERE kategorija_id='3'")->fetchAll();
    // print_r($putnicka);
    $viljuskari = $pdo->query("SELECT * FROM vozila WHERE kategorija_id='4'")->fetchAll();
    // print_r($putnicka);
    $brojac_putnicka = 1;
    $brojac_teretna = 1;
    $brojac_dizalice =1;
    $brojac_viljuskari = 1;
?>


<?php include "moduli/head.php" ?>


<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12 d-flex  justify-content-center">




            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item active">Putnicka Vozila</li>
                    
                    <?php foreach($putnicka as $putnicko) { ?>
                        
                        <li class="list-group-item"><a href="prikaz-vozila.php?id=<?= $putnicko['id'] ?>"><?= $brojac_putnicka."." . " " . $putnicko['naziv'] ?></a></li>
                <?php  $brojac_putnicka++;  } ?>
                </ul> 
            </div>

            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item active">Teretna vozila</li>
                    
                    <?php foreach($teretna as $teretno) { ?>
                        <li class="list-group-item"><a href="prikaz-vozila.php?id=<?= $teretno['id'] ?>"><?= $brojac_teretna. "." ." " . $teretno['naziv'] ?></a></li>
                <?php   $brojac_teretna++; } ?>
                </ul> 
            </div>

            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item active">Dizalice</li>
                    
                    <?php foreach($dizalice as $dizalica) { ?>
                        <li class="list-group-item"><a href="prikaz-vozila.php?id=<?= $dizalica['id'] ?>"><?= $brojac_dizalice ."." . " " . $dizalica['naziv'] ?></a></li>
                <?php  $brojac_dizalice++;  } ?>
                </ul> 
            </div>

            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item active">Viljuskari</li>
                    
                    <?php foreach($viljuskari as $viljuskar) { ?>
                        <li class="list-group-item"><a href="prikaz-vozila.php?id=<?= $viljuskar['id'] ?>"><?= $brojac_viljuskari . "." . " " . $viljuskar['naziv'] ?></a></li>
                <?php $brojac_viljuskari++;   } ?>
                </ul> 
            </div>
           
        </div>
        
    </div>
</div>