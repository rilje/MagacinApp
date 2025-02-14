<?php
session_start();
// print_r($_SESSION);

include "db.php"; 

#Uslovi za odabir baze:
if($_REQUEST['kategorija_id'] == 1){
    $db = "aparati";
    $id = $_REQUEST['id'];
    $stmt = $pdo->prepare("SELECT * FROM $db WHERE id=?");
    $stmt->execute([$id]);
    $podatak = $stmt->fetch();

    
}
if($_REQUEST['kategorija_id'] == 2){
    $db = "busilice";
    $id = $_REQUEST['id'];
    $stmt = $pdo->prepare("SELECT * FROM $db WHERE id=?");
    $stmt->execute([$id]);
    $podatak = $stmt->fetch();
    // print_r($podatak);
}
if($_REQUEST['kategorija_id'] == 3){
    $db = "maleb";
    $id = $_REQUEST['id'];
    $stmt = $pdo->prepare("SELECT * FROM $db WHERE id=?");
    $stmt->execute([$id]);
    $podatak = $stmt->fetch();
    // print_r($podatak);

    
}
if($_REQUEST['kategorija_id'] == 4){
    $db = "velikeb";
    $id = $_REQUEST['id'];
    $stmt = $pdo->prepare("SELECT * FROM $db WHERE id=?");
    $stmt->execute([$id]);
    $podatak = $stmt->fetch();
    // print_r($podatak);
}
if($_REQUEST['kategorija_id'] == 5){
    $db = "ceoneb";
    $id = $_REQUEST['id'];
    $stmt = $pdo->prepare("SELECT * FROM $db WHERE id=?");
    $stmt->execute([$id]);
    $podatak = $stmt->fetch();
    // print_r($podatak);
}
if($_REQUEST['kategorija_id'] == 6){
    $db = "testere";
    $id = $_REQUEST['id'];
    $stmt = $pdo->prepare("SELECT * FROM $db WHERE id=?");
    $stmt->execute([$id]);
    $podatak = $stmt->fetch();
    // print_r($podatak);
}
if($_REQUEST['kategorija_id'] == 7){
    $db = "dizalice";
    $id = $_REQUEST['id'];
    $stmt = $pdo->prepare("SELECT * FROM $db WHERE id=?");
    $stmt->execute([$id]);
    $podatak = $stmt->fetch();
    // print_r($podatak);
}
if($_REQUEST['kategorija_id'] == 8){
    $db = "vozila";
    $id = $_REQUEST['id'];
    $stmt = $pdo->prepare("SELECT * FROM $db WHERE id=?");
    $stmt->execute([$id]);
    $podatak = $stmt->fetch();
    // print_r($podatak);
}
if($_REQUEST['kategorija_id'] == 9){
    $db = "agregati";
    $id = $_REQUEST['id'];
    $stmt = $pdo->prepare("SELECT * FROM $db WHERE id=?");
    $stmt->execute([$id]);
    $podatak = $stmt->fetch();
    // print_r($podatak);
}
if($_REQUEST['kategorija_id'] == 10){
    $db = "laser";
    $id = $_REQUEST['id'];
    $stmt = $pdo->prepare("SELECT * FROM $db WHERE id=?");
    $stmt->execute([$id]);
    $podatak = $stmt->fetch();
    // print_r($podatak);
}
if($_REQUEST['kategorija_id'] == 11){
    $db = "srafilice";
    $id = $_REQUEST['id'];
    $stmt = $pdo->prepare("SELECT * FROM $db WHERE id=?");
    $stmt->execute([$id]);
    $podatak = $stmt->fetch();

    
    // print_r($podatak);
}
if($_REQUEST['kategorija_id'] == 12){
    $db = "ostalo";
    $id = $_REQUEST['id'];
    $stmt = $pdo->prepare("SELECT * FROM $db WHERE id=?");
    $stmt->execute([$id]);
    $podatak = $stmt->fetch();
    // print_r($podatak);
}




?>

<?php include "moduli/head.php"; ?>

<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="main.css">
    </head> -->


    <body>
    
        <div class="container-fluid">
            <br>
            

            
            <div class="col-md-12" style="text-align:center;" >
            <h4>Menjanje alata<?php if(!empty($podatak['naziv']))echo ": " . $podatak['naziv'] . "; " . "ID-" . $podatak['id']?></h4>
                <form action="<?php echo htmlspecialchars("izvrsi_update.php?stari_id=$id") ?>" method="post">
                    <?php foreach($podatak as $key => $value) { ?>
                        <p class="form_p">
                            <!-- <label for=""><?= $key ?></label> -->
                            <input style="height:45px;" class="col-md-6" type="text" class="login_input" value="<?= $value ?>" name="<?= $key ?>" placeholder="<?= $key ?>">
                        </p>
                    <?php } ?>
                    <p class="form_p">
                        <button type="submit" class="btn btn-primary">IZMENI</button>
                    </p>
                </form>
            </div>
        </div>
    </body>
</html>