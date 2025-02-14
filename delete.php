<?php
    session_start();
    require_once "db.php";
    $id = $_REQUEST['brisanje_id'];


    if($_REQUEST['kategorija_id'] == 1){
        $db = "aparati";
        $stmt = $pdo->prepare("DELETE FROM $db WHERE id=?");
        $stmt->execute([$id]);
        // print_r($primer_alata);
        $kategorija_id = $_REQUEST['kategorija_id'];
        $naziv_kategorija = "Aparati";
        header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");
    }
    if($_REQUEST['kategorija_id'] == 2){
        $db = "busilice";
        $stmt = $pdo->prepare("DELETE FROM $db WHERE id=?");
        $stmt->execute([$id]);
        // print_r($primer_alata);
        $kategorija_id = $_REQUEST['kategorija_id'];
        $naziv_kategorija = "Bušilice";
        header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");
    }
    if($_REQUEST['kategorija_id'] == 3){
        $db = "maleb";
        $stmt = $pdo->prepare("DELETE FROM $db WHERE id=?");
        $stmt->execute([$id]);
        // print_r($primer_alata);
        $kategorija_id = $_REQUEST['kategorija_id'];
        $naziv_kategorija = "Male brusilice";
        header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");
    }
    if($_REQUEST['kategorija_id'] == 4){
        $db = "velikeb";
        $stmt = $pdo->prepare("DELETE FROM $db WHERE id=?");
        $stmt->execute([$id]);
        // print_r($primer_alata);
    }
    if($_REQUEST['kategorija_id'] == 5){
        $db = "ceoneb";
        $stmt = $pdo->prepare("DELETE FROM $db WHERE id=?");
        $stmt->execute([$id]);
        // print_r($primer_alata);
        $kategorija_id = $_REQUEST['kategorija_id'];
        $naziv_kategorija = "Čeone brusilice";
        header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");
    }
    if($_REQUEST['kategorija_id'] == 6){
        $db = "testere";
        $stmt = $pdo->prepare("DELETE FROM $db WHERE id=?");
        $stmt->execute([$id]);
        // print_r($primer_alata);
        $kategorija_id = $_REQUEST['kategorija_id'];
        $naziv_kategorija = "Testere";
        header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");
    }
    if($_REQUEST['kategorija_id'] == 7){
        $db = "dizalice";
        $stmt = $pdo->prepare("DELETE FROM $db WHERE id=?");
        $stmt->execute([$id]);
        // print_r($primer_alata);
        $kategorija_id = $_REQUEST['kategorija_id'];
        $naziv_kategorija = "Dizalice";
        header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");
    }
    
    if($_REQUEST['kategorija_id'] == 9){
        $db = "agregati";
        $stmt = $pdo->prepare("DELETE FROM $db WHERE id=?");
        $stmt->execute([$id]);
        // print_r($primer_alata);
        $kategorija_id = $_REQUEST['kategorija_id'];
        $naziv_kategorija = "Agregati";
        header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");
    }
    if($_REQUEST['kategorija_id'] == 10){
        $db = "laser";
        $stmt = $pdo->prepare("DELETE FROM $db WHERE id=?");
        $stmt->execute([$id]);
        // print_r($primer_alata);
        $kategorija_id = $_REQUEST['kategorija_id'];
        $naziv_kategorija = "Laser";
        header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");
    }
    if($_REQUEST['kategorija_id'] == 11){
        $db = "srafilice";
        $stmt = $pdo->prepare("DELETE FROM $db WHERE id=?");
        $stmt->execute([$id]);
        // print_r($primer_alata);
        $kategorija_id = $_REQUEST['kategorija_id'];
        $naziv_kategorija = "Šrafilice";
        header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");
    }
    if($_REQUEST['kategorija_id'] == 12){
        $db = "ostalo";
        $stmt = $pdo->prepare("DELETE FROM $db WHERE id=?");
        $stmt->execute([$id]);
        // print_r($primer_alata);
        $kategorija_id = $_REQUEST['kategorija_id'];
        $naziv_kategorija = "Ostalo";
        header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");
    }

?>