<?php 
    session_start();
    require_once "db2.php";

    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $aparat = $pdo->query("SELECT * FROM ppaparati WHERE id=$id")->fetch();
        // print_r($aparat);
    }

    



    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $naziv = $_REQUEST['naziv'];
        $proizvodjac = $_REQUEST['proizvodjac'];
        $tip = $_REQUEST['tip'];
        $serijski = $_REQUEST['serijski'];
        $lokacija = $_REQUEST['lokacija'];
        $stanje = $_REQUEST['stanje'];
        $datum_zaduzenja = $_REQUEST['datum_zaduzenja'];
        $datum_kontrole = $_REQUEST['datum_kontrole'];
        $datum_isteka = $_REQUEST['datum_isteka'];
        // echo $id . "<br>";
        // echo $naziv . "<br>";
        // echo $proizvodjac . "<br>";
        // echo $tip . "<br>";
        // echo $serijski . "<br>";
        // echo $lokacija . "<br>";
        // echo $stanje . "<br>";
        // echo $datum_zaduzenja . "<br>";
        // echo $datum_kontrole . "<br>";
        // echo $datum_isteka . "<br>";

        $stmt = $pdo->prepare("UPDATE ppaparati SET naziv=?,proizvodjac=?,tip=?,serijski=?,lokacija=?,stanje=?,datum_zaduzenja=?,datum_kontrole=?,datum_isteka=? WHERE id=?");
        $stmt->execute([$naziv,$proizvodjac,$tip,$serijski,$lokacija,$stanje,$datum_zaduzenja,$datum_kontrole,$datum_isteka,$id]);
        $upit_id = '';
        

        

        header("Location:ppaparati.php");
        die();
        
        
    }
?>
<?php include "moduli/head.php"; ?>

<div class="container-fluid" style="text-align:center; display:flex; flex-wrap:wrap; justify-content:center;">
        <br>
        <h1 style="width:100%;">Update aparata</h1>
        
        <div class="form"  style="width:40%; text-align:center;">
            <form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                <p>
                    <input type="text" class="form-control" placeholder="id" name="id" value="<?= $aparat['id'] ?>">
                </p>

                <p>
                    <input type="text" class="form-control" placeholder="naziv" name="naziv" value="<?= $aparat['naziv'] ?>">
                </p>
                <p>
                    <input type="text" class="form-control" placeholder="proizvodjac" name="proizvodjac" value="<?= $aparat['proizvodjac'] ?>">
                </p>
                <p>
                    <input type="text" class="form-control" placeholder="tip" name="tip" value="<?= $aparat['tip'] ?>">
                </p>
                <p>
                    <input type="text" class="form-control" placeholder="serijski" name="serijski" value="<?= $aparat['serijski'] ?>">
                </p>
                <p>
                    <input type="text" class="form-control" placeholder="lokacija" name="lokacija" value="<?= $aparat['lokacija'] ?>">
                </p>
                <p>
                    <input type="text" class="form-control" placeholder="stanje" name="stanje" value="<?= $aparat['stanje'] ?>">
                </p>
                <p>
                    <input type="text" class="form-control" placeholder="datum_zaduzenja" name="datum_zaduzenja" value="<?= $aparat['datum_zaduzenja'] ?>">
                </p>
                <p>
                    <input type="text" class="form-control" placeholder="datum_kontrole" name="datum_kontrole" value="<?= $aparat['datum_kontrole'] ?>">
                </p>
                <p>
                    <input type="text" class="form-control" placeholder="datum_isteka" name="datum_isteka" value="<?= $aparat['datum_isteka'] ?>">
                </p>
                


                <button type="submit" class="btn btn-primary">Unesi</button>
            </form>
        </div>
    </div>