<?php 
session_start();
// print_r($_SESSION);

include "db.php"; 

if($_REQUEST['kategorija_id'] == 1){
    $db = "aparati";
    $svi_alati = $pdo->query("SELECT * FROM $db")->fetchAll();
    $primer_alata = $svi_alati[0];

}
if($_REQUEST['kategorija_id'] == 2){
    $db = "busilice";
    $svi_alati = $pdo->query("SELECT * FROM $db")->fetchAll();
    $primer_alata = $svi_alati[0];
    // print_r($primer_alata);
}
if($_REQUEST['kategorija_id'] == 3){
    $db = "maleb";
    $svi_alati = $pdo->query("SELECT * FROM $db")->fetchAll();
    $primer_alata = $svi_alati[0];
    // print_r($primer_alata);
}
if($_REQUEST['kategorija_id'] == 4){
    $db = "velikeb";
    $svi_alati = $pdo->query("SELECT * FROM $db")->fetchAll();
    $primer_alata = $svi_alati[0];
    // print_r($primer_alata);
}
if($_REQUEST['kategorija_id'] == 5){
    $db = "ceoneb";
    $svi_alati = $pdo->query("SELECT * FROM $db")->fetchAll();
    $primer_alata = $svi_alati[0];
    // print_r($primer_alata);
}
if($_REQUEST['kategorija_id'] == 6){
    $db = "testere";
    $svi_alati = $pdo->query("SELECT * FROM $db")->fetchAll();
    $primer_alata = $svi_alati[0];
    // print_r($primer_alata);
}
if($_REQUEST['kategorija_id'] == 7){
    $db = "dizalice";
    $svi_alati = $pdo->query("SELECT * FROM $db")->fetchAll();
    $primer_alata = $svi_alati[0];
    // print_r($primer_alata);
}

if($_REQUEST['kategorija_id'] == 9){
    $db = "agregati";
    $svi_alati = $pdo->query("SELECT * FROM $db")->fetchAll();
    $primer_alata = $svi_alati[0];
    // print_r($primer_alata);
}
if($_REQUEST['kategorija_id'] == 10){
    $db = "laser";
    $svi_alati = $pdo->query("SELECT * FROM $db")->fetchAll();
    $primer_alata = $svi_alati[0];
    // print_r($primer_alata);
}
if($_REQUEST['kategorija_id'] == 11){
    $db = "srafilice";
    $svi_alati = $pdo->query("SELECT * FROM $db")->fetchAll();
    $primer_alata = $svi_alati[0];
    // print_r($primer_alata);
}
if($_REQUEST['kategorija_id'] == 12){
    $db = "ostalo";
    $svi_alati = $pdo->query("SELECT * FROM $db")->fetchAll();
    $primer_alata = $svi_alati[0];
    // print_r($primer_alata);
}
?>


<?php include "moduli/head.php"; ?>
<body>

    <div class="container-fluid" style="display:flex; justify-content:center;">
        <br>
        
        
        <div class="form"  style="width:40%; text-align:center;">
            <h1>Dodavanje alata</h1>
            <form action="izvrsi_dodavanje.php">

                <?php foreach($primer_alata as $key => $value){ ?>
                    <div class="form-group">
                        
                        <input  style="height:45px;"  type="text" class="form-control" placeholder="<?= $key ?>" name="<?= $key ?>">
                    </div>

            <?php    } ?>


                <button type="submit" class="btn btn-primary">DODAJ</button>
            </form>
                
            
        </div>
    </div>
</body>
</html>