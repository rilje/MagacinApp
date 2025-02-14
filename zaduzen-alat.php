<?php 
    session_start();
    require_once "Potrosni/db.php";
    $otpremnice = $pdo->query("SELECT * FROM otpremnice ORDER BY datum_izdavanja")->fetchAll();
    // print_r($otpremnice);
?>


<?php include "moduli/head.php" ?>
<br>
    <div class="container d-flex justify-content-between">
        <div class="col-md-8"  style="">
            <h3>Sve izdate otpremnice</h3>
            <br>
            <div class="col-md-3" style=" padding:0px;">
                
                <div class="d-flex justify-content-start" style=" margin-bottom:7px;">
                    <a href="nova-otpremnica.php"><button class="btn btn-info">Nova otpremnica</button></a>
                </div>
        </div>
        <table class="table">
        <thead class="thead-light">
        <tr>
            <th style="text-align:center">ID</th>
            <th style="text-align:center">Izdato</th>
            <th style="text-align:center">Izdao</th>
            <th style="text-align:center">Datum izdavanja</th>
            <th style="text-align:center">Akcija</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($otpremnice as $otpremnica) { ?>
                <tr>
                    <td style="text-align:center"><?= $otpremnica['id'] ?></td>
                    <td style="text-align:center"><?= $otpremnica['izdato_kome'] ?></td>
                    <td style="text-align:center"><?= $otpremnica['izdao_ko'] ?></td>
                    <td style="text-align:center"><?= $otpremnica['datum_izdavanja'] ?></td>
                    <td style="text-align:center">
                        <span><a href="prikazi-otpremnicu.php?id=<?= $otpremnica['id'] ?>"><button class="btn btn-info btn-sm">Prikazi</button></a></span>
                        <span><a href="obrisi-otpremnicu.php?id=<?= $otpremnica['id'] ?>"><button class="btn btn-danger btn-sm">Izbrisi</button></a></span>
                    </td> 
                </tr>
        <?php   } ?>
        </tbody>
    </table>
        </div>
        <div class="col-md-4" style=" padding:10px">
            
            <h4>Navigacija kroz otpremnice  </h4>
        </div>
        
    </div>

</body>
</html>