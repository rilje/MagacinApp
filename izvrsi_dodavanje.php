<?php 
session_start();
// print_r($_SESSION);
require_once "db.php";

if($_REQUEST['kategorija_id'] == 1){
    $db = "aparati";
    $id = $_REQUEST['id'];
    $naziv = $_REQUEST['naziv'];
    $kategorija_id = $_REQUEST['kategorija_id'];
    $serijski = $_REQUEST['serijski'];
    $stanje = $_REQUEST['stanje'];
    $napomena = $_REQUEST['napomena'];
    $zaduzio = $_REQUEST['zaduzio'];
    $datum = $_REQUEST['datum'];
    $stmt = $pdo->prepare("INSERT INTO $db (id,naziv,kategorija_id,serijski,stanje,napomena,zaduzio,datum) VALUES (?,?,?,?,?,?,?,?)");
    $stmt->execute([$id,$naziv,$kategorija_id,$serijski,$stanje,$napomena,$zaduzio,$datum]);
    $naziv_kategorija = "Aparati";
    header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");
    // header("Location: tabela.php?id=$id&naziv=$naziv")
}

if($_REQUEST['kategorija_id'] == 2){
    $db = "busilice";
    $id = $_REQUEST['id'];
    $naziv = $_REQUEST['naziv'];
    $kategorija_id = $_REQUEST['kategorija_id'];
    $serijski = $_REQUEST['serijski'];
    $kolicina = $_REQUEST['kolicina'];
    $stanje = $_REQUEST['stanje'];
    $napomena = $_REQUEST['napomena'];
    $zaduzio = $_REQUEST['zaduzio'];
    $datum = $_REQUEST['datum'];
    $stmt = $pdo->prepare("INSERT INTO $db (id,naziv,kategorija_id,serijski,kolicina,stanje,napomena,zaduzio,datum) VALUES (?,?,?,?,?,?,?,?,?) ");
    $stmt->execute([$id,$naziv,$kategorija_id,$serijski,$kolicina,$stanje,$napomena,$zaduzio,$datum]);
    $naziv_kategorija = "Bušilice";
    header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");

}

if($_REQUEST['kategorija_id'] == 3){
    $db = "maleb";
    $id = $_REQUEST['id'];
    $naziv = $_REQUEST['naziv'];
    $kategorija_id = $_REQUEST['kategorija_id'];
    $serijski = $_REQUEST['serijski'];
    $kolicina = $_REQUEST['kolicina'];
    $stanje = $_REQUEST['stanje'];
    $napomena = $_REQUEST['napomena'];
    $zaduzio = $_REQUEST['zaduzio'];
    $datum = $_REQUEST['datum'];

    $stmt = $pdo->prepare("INSERT INTO $db (id,naziv,kategorija_id,serijski,kolicina,stanje,napomena,zaduzio,datum) VALUES (?,?,?,?,?,?,?,?,?) ");
    $stmt->execute([$id,$naziv,$kategorija_id,$serijski,$kolicina,$stanje,$napomena,$zaduzio,$datum]);
    $naziv_kategorija = "Male brusilice";
    header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");

}
if($_REQUEST['kategorija_id'] == 4){
    $db = "velikeb";
    $id = $_REQUEST['id'];
    $naziv = $_REQUEST['naziv'];
    $kategorija_id = $_REQUEST['kategorija_id'];
    $serijski = $_REQUEST['serijski'];
    $kolicina = $_REQUEST['kolicina'];
    $stanje = $_REQUEST['stanje'];
    $napomena = $_REQUEST['napomena'];
    $zaduzio = $_REQUEST['zaduzio'];
    $datum = $_REQUEST['datum'];

    $stmt = $pdo->prepare("INSERT INTO $db (id,naziv,kategorija_id,serijski,kolicina,stanje,napomena,zaduzio,datum) VALUES (?,?,?,?,?,?,?,?,?) ");
    $stmt->execute([$id,$naziv,$kategorija_id,$serijski,$kolicina,$stanje,$napomena,$zaduzio,$datum]);
    $naziv_kategorija = "Velike brusilice";
    header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");

}
if($_REQUEST['kategorija_id'] == 5){
    $db = "ceoneb";
    $id = $_REQUEST['id'];
    $naziv = $_REQUEST['naziv'];
    $kategorija_id = $_REQUEST['kategorija_id'];
    $serijski = $_REQUEST['serijski'];
    $kolicina = $_REQUEST['kolicina'];
    $stanje = $_REQUEST['stanje'];
    $napomena = $_REQUEST['napomena'];
    $zaduzio = $_REQUEST['zaduzio'];
    $datum = $_REQUEST['datum'];

    $stmt = $pdo->prepare("INSERT INTO $db (id,naziv,kategorija_id,serijski,kolicina,stanje,napomena,zaduzio,datum) VALUES (?,?,?,?,?,?,?,?,?) ");
    $stmt->execute([$id,$naziv,$kategorija_id,$serijski,$kolicina,$stanje,$napomena,$zaduzio,$datum]);
    $naziv_kategorija = "Čeone brusilice";
    header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");

}

if($_REQUEST['kategorija_id'] == 6){
    $db = "testere";
    $id = $_REQUEST['id'];
    $naziv = $_REQUEST['naziv'];
    $tip = $_REQUEST['tip'];
    $serijski = $_REQUEST['serijski'];
    $kolicina = $_REQUEST['kolicina'];
    $stanje = $_REQUEST['stanje'];
    $napomena = $_REQUEST['napomena'];
    $zaduzio = $_REQUEST['zaduzio'];
    $datum = $_REQUEST['datum'];
    $kategorija_id = $_REQUEST['kategorija_id'];
    
    $stmt = $pdo->prepare("INSERT INTO $db (id,naziv,tip,serijski,kolicina,stanje,napomena,zaduzio,datum,kategorija_id) VALUES (?,?,?,?,?,?,?,?,?,?) ");
    $stmt->execute([$id,$naziv,$tip,$serijski,$kolicina,$stanje,$napomena,$zaduzio,$datum,$kategorija_id]);
    $naziv_kategorija = "Testere";
    header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");
}

if($_REQUEST['kategorija_id'] == 7){
    $db = "dizalice";
    $id = $_REQUEST['id'];
    $naziv = $_REQUEST['naziv'];
    $serijski = $_REQUEST['serijski'];
    $kategorija_id = $_REQUEST['kategorija_id'];
    $nosivost = $_REQUEST['nosivost'];
    $kolicina = $_REQUEST['kolicina'];
    $napomena = $_REQUEST['napomena'];
    $zaduzio = $_REQUEST['zaduzio'];
    $datum = $_REQUEST['datum'];
    
    $stmt = $pdo->prepare("INSERT INTO $db (id,naziv,serijski,kategorija_id,nosivost,kolicina,napomena,zaduzio,datum) VALUES (?,?,?,?,?,?,?,?,?)  ");
    $stmt->execute([$id,$naziv,$serijski,$kategorija_id,$nosivost,$kolicina,$napomena,$zaduzio,$datum]);
    $naziv_kategorija = "Dizalice";
    header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");
}

if($_REQUEST['kategorija_id'] == 9){
    $db = "agregati";
    $id = $_REQUEST['id'];
    $naziv = $_REQUEST['naziv'];
    $kategorija_id = $_REQUEST['kategorija_id'];
    $serijski = $_REQUEST['serijski'];
    $gorivo = $_REQUEST['gorivo'];
    $kolicina = $_REQUEST['kolicina'];
    $zaduzio = $_REQUEST['zaduzio'];
    $lokacija = $_REQUEST['lokacija'];
    $stmt = $pdo->prepare("INSERT INTO $db (id,naziv,kategorija_id,serijski,gorivo,kolicina,zaduzio,lokacija)  VALUES (?,?,?,?,?,?,?,?) ");
    $stmt->execute([$id,$naziv,$kategorija_id,$serijski,$gorivo,$kolicina,$zaduzio,$lokacija]);
    $naziv_kategorija = "Agregati";
    header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");
    
    

}

if($_REQUEST['kategorija_id'] == 10){
    $db = "laser";
    $id = $_REQUEST['id'];
    $naziv = $_REQUEST['naziv'];
    $serijski = $_REQUEST['serijski'];
    $kolicina = $_REQUEST['kolicina'];
    $zaduzio = $_REQUEST['zaduzio'];
    $napomena = $_REQUEST['napomena'];
    $kategorija_id = $_REQUEST['kategorija_id'];

    $stmt = $pdo->prepare("INSERT INTO $db (id,naziv,serijski,kolicina,zaduzio,napomena,kategorija_id) VALUES (?,?,?,?,?,?,?) ");
    $stmt->execute([$id,$naziv,$serijski,$kolicina,$zaduzio,$napomena,$kategorija_id]);
    $naziv_kategorija = "Laser";
    header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");


}

if($_REQUEST['kategorija_id'] == 11){
    $db = "srafilice";
    $id = $_REQUEST['id'];
    $naziv = $_REQUEST['naziv'];
    $kategorija_id = $_REQUEST['kategorija_id'];
    $serijski = $_REQUEST['serijski'];
    $kolicina = $_REQUEST['kolicina'];
    $stanje = $_REQUEST['stanje'];
    $zaduzio = $_REQUEST['zaduzio'];
    $datum = $_REQUEST['datum'];

    $stmt = $pdo->prepare("INSERT INTO $db (id,naziv,kategorija_id,serijski,kolicina,stanje,zaduzio,datum) VALUES (?,?,?,?,?,?,?,?  ) ");
    $stmt->execute([$id,$naziv,$kategorija_id,$serijski,$kolicina,$stanje,$zaduzio,$datum]);    
    $naziv_kategorija = "Šrafilice";
    header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");
}


?>






<?php include "moduli/head.php"; ?>
<body>

    <div class="container">
        
        
    </div>
</body>
</html>