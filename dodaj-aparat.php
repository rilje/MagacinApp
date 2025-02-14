<?php 
    session_start();
    require_once "db2.php";

    # VALIDACIJA
    $greska_id = "";
    $greska_tip = "";
    

    $podaci = $pdo->query("SELECT * FROM ppaparati")->fetchAll();

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
        
      
            $stmt = $pdo->prepare("INSERT INTO ppaparati (id,naziv,proizvodjac,tip,serijski,lokacija,stanje,datum_zaduzenja,datum_kontrole,datum_isteka) VALUES (?,?,?,?,?,?,?,?,?,?)");
            $stmt->execute([$_REQUEST['id'],$_REQUEST['naziv'],$_REQUEST['proizvodjac'], $_REQUEST['tip'] , $_REQUEST['serijski'], $_REQUEST['lokacija'], $_REQUEST['stanje'], $_REQUEST['datum_zaduzenja'],$_REQUEST['datum_kontrole'], $_REQUEST['datum_isteka']]);
            header("Location:ppaparati.php");
            die();
      
        
    }else{
        // echo "Nije poslata";
    }
?>
<?php include "moduli/head.php"; ?>

<div class="container-fluid" style="text-align:center; display:flex; flex-wrap:wrap; justify-content:center;">
        <br>
        <h1  style="width:100%;">Unesi novi aparat</h1>
        
        <div class="form"  style="width:40%;">
            <form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">

                <p>
                    <input type="number" class="form-control" placeholder="id" name="id">
                    <span class="greska"><?= $greska_id ?></span>
                </p>

                <p>
                    <input type="text" class="form-control" placeholder="naziv" name="naziv">
                </p>
                <p>
                    <input type="text" class="form-control" placeholder="proizvodjac" name="proizvodjac">
                </p>
                <p>
                    <input type="text" class="form-control" placeholder="tip" name="tip">
                    <span class="greska"><?= $greska_tip ?></span>
                </p>
                <p>
                    <input type="text" class="form-control" placeholder="serijski" name="serijski">
                </p>
                <p>
                    <input type="text" class="form-control" placeholder="lokacija" name="lokacija">
                </p>
                <p>
                    <input type="text" class="form-control" placeholder="stanje" name="stanje">
                </p>
                <p>
                    <input type="text" class="form-control" placeholder="datum_zaduzenja" name="datum_zaduzenja">
                </p>
                <p>
                    <input type="text" class="form-control" placeholder="datum_kontrole" name="datum_kontrole">
                </p>
                <p>
                    <input type="text" class="form-control" placeholder="datum_isteka" name="datum_isteka">
                </p>
                


                <button type="submit" class="btn btn-primary">Unesi</button>
            </form>
        </div>
    </div>