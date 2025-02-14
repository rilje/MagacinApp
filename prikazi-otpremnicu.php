<?php 
    session_start();
    require_once "Potrosni/db.php";
    $otpremnice = $pdo->query("SELECT * FROM otpremnice")->fetchAll();
    // print_r($otpremnice);
    
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $stmt = $pdo->prepare("SELECT * FROM otpremnice WHERE id=?");
        $stmt->execute([$id]);
        $otpremnica = $stmt->fetch();
        // print_r($otpremnica);
    }
?>


<?php include "moduli/head.php" ?>
<br>
    <div class="container d-flex justify-content-center">
        
        <div class="col-md-10"  style="border:solid black thin;">
            <div class="row d-flex justify-content-end" style="padding:10px">
                <div class="col-md-2 d-flex justify-content-end">
                   <a href="zaduzen-alat.php"> <button class="btn btn-danger">Nazad</button></a>
                </div>
                
                
            </div>
            <div class="row d-flex justify-content-between" style="padding:10px">
                <div class="col-md-3"  style="text-align:center"  >
                    Izdato: <b> <?= $otpremnica['izdato_kome'] ?></b>
                </div>
                <div class="col-md-3"  style=" text-align:center"  >
                    ID Otpremnice: <b> [<?= $otpremnica['id'] ?>] </b>
                </div>
                
            </div>
            <div class="row d-flex justify-content-center" style="padding:10px; text-align:center">

                <div class="col-md-9 d-flex justify-content-center flex-column">
                    <h2>Sadrzaj</h2>
                    <form action="izmeni-otpremnicu.php?id=<?= $otpremnica['id'] ?>" method="post">
                        <textarea style="padding:15px; width:100%;" name="sadrzaj" cols=""  rows="18" value=""><?= $otpremnica['spisak_alata'] ?></textarea>
                        
                        <div class="col-md-1 d-flex justify-content-center" style="margin-top:10px;">
                            <button class="btn btn-primary" type="submit">Izmeni</button></a>
                        </div>
                    </form>
                    
                    
                </div>
            </div>
            <br>
            <div class="row d-flex justify-content-between" style="padding:10px">
                <div class="col-md-3"  style="text-align:center"  >
                   Izdao: <b><?= $otpremnica['izdao_ko'] ?></b>
                </div>
                <div class="col-md-3" style=" text-align:center">
                   Datum: <b><?= $otpremnica['datum_izdavanja'] ?></b>
                </div>
                
            </div>
        </div>
       
        
    </div>

</body>
</html>