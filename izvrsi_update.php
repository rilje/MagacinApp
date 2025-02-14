<?php  
  session_start();
  require_once "db.php";
  // print_r($_REQUEST);
  
  # USLOVI
  if($_REQUEST['kategorija_id'] == 1){
    $db = "aparati";
    $id = $_REQUEST['id'];
    $naziv = $_REQUEST['naziv'];
    $naziv_kategorija = "Aparati";
    $kategorija_id = $_REQUEST['kategorija_id'];
    $serijski = $_REQUEST['serijski'];
    $stanje = $_REQUEST['stanje'];
    $napomena = $_REQUEST['napomena'];
    $zaduzio = $_REQUEST['zaduzio'];
    $datum = $_REQUEST['datum'];
    $stmt = $pdo->prepare("UPDATE $db SET id=?,naziv=?,kategorija_id=?,serijski=?,stanje=?,napomena=?,zaduzio=?,datum=? WHERE id=?");
    $stmt->execute([$id,$naziv,$kategorija_id,$serijski,$stanje,$napomena,$zaduzio,$datum,$_REQUEST['stari_id']]);
    header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");
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
    $stmt = $pdo->prepare("UPDATE $db SET id=?,naziv=?,serijski=?,kategorija_id=?,kolicina=?,stanje=?,napomena=?,zaduzio=?,datum=? WHERE id=?");
    $stmt->execute([$id,$naziv,$serijski,$kategorija_id,$kolicina,$stanje,$napomena,$zaduzio,$datum,$_REQUEST['stari_id']]);
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
    
    $stmt = $pdo->prepare("UPDATE $db SET id=?,naziv=?,kategorija_id=?,serijski=?,kolicina=?,stanje=?,napomena=?,zaduzio=?,datum=? WHERE id=?");
    $stmt->execute([$id,$naziv,$kategorija_id,$serijski,$kolicina,$stanje,$napomena,$zaduzio,$datum,$_REQUEST['stari_id']]);

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
    
    $stmt = $pdo->prepare("UPDATE $db SET id=?,naziv=?,kategorija_id=?,serijski=?,kolicina=?,stanje=?,napomena=?,zaduzio=?,datum=? WHERE id=?");
    $stmt->execute([$id,$naziv,$kategorija_id,$serijski,$kolicina,$stanje,$napomena,$zaduzio,$datum,$_REQUEST['stari_id']]);
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
    
    $stmt = $pdo->prepare("UPDATE $db SET id=?,naziv=?,kategorija_id=?,serijski=?,kolicina=?,stanje=?,napomena=?,zaduzio=?,datum=? WHERE id=?");
    $stmt->execute([$id,$naziv,$kategorija_id,$serijski,$kolicina,$stanje,$napomena,$zaduzio,$datum,$_REQUEST['stari_id']]);
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
    $stmt = $pdo->prepare("UPDATE $db SET id=?,naziv=?,tip=?,serijski=?,kolicina=?,stanje=?,napomena=?,zaduzio=?,datum=?,kategorija_id=? WHERE id=?");
    $stmt->execute([$id,$naziv,$tip,$serijski,$kolicina,$stanje,$napomena,$zaduzio,$datum,$kategorija_id,$_REQUEST['stari_id']]);
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
    $stmt = $pdo->prepare("UPDATE $db SET id=?,naziv=?,serijski=?,kategorija_id=?,nosivost=?,kolicina=?,napomena=?,zaduzio=?,datum=? WHERE id=?");
    $stmt->execute([$id,$naziv,$serijski,$kategorija_id,$nosivost,$kolicina,$napomena,$zaduzio,$datum,$_REQUEST['stari_id']]);
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
    $stmt = $pdo->prepare("UPDATE $db SET id=?,naziv=?,kategorija_id=?,serijski=?,gorivo=?,kolicina=?,zaduzio=?,lokacija=? WHERE id=?");
    $stmt->execute([$id,$naziv,$kategorija_id,$serijski,$gorivo,$kolicina,$zaduzio,$lokacija,$_REQUEST['stari_id']]);
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

    $stmt = $pdo->prepare("UPDATE $db SET id=?,naziv=?,serijski=?,kolicina=?,zaduzio=?,napomena=?,kategorija_id=? WHERE id=?");
    $stmt->execute([$id,$naziv,$serijski,$kolicina,$zaduzio,$napomena,$kategorija_id,$_REQUEST['stari_id']]);
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

    $stmt = $pdo->prepare("UPDATE $db SET id=?,naziv=?,kategorija_id=?,serijski=?,kolicina=?,stanje=?,zaduzio=?,datum=? WHERE id=?");
    $stmt->execute([$id,$naziv,$kategorija_id,$serijski,$kolicina,$stanje,$zaduzio,$datum, $_REQUEST['stari_id']]);
    $naziv_kategorija = "Šrafilice";
    header("Location:tabela.php?id=$kategorija_id&naziv=$naziv_kategorija");
  }

  
?>  