<?php 
    session_start();

    require_once "db.php";
    $kategorije = $pdo->query("SELECT * FROM kategorije")->fetchAll();

?>

<?php include "moduli/head.php"; ?> 
<body>

<div class="container-fluid" style="margin-top:15px; background-color:white;">

    

    <div class="container" style="">
    <!-- <h1 style="color:white;">OSNOVNA SREDSTVA</h1> -->
    
        <br>
       <div class="row">
        <?php foreach($kategorije as $kategorija) { ?>
            <div class="col-md-3 " style="margin-top:5px;" >
                <div class="card bg-light" style="width:100%; text-align:center; padding:27px;">
                    <img class="card-img-top" src="images/<?= $kategorija['slika'] ?>" alt="Card image">
                    <div class="card-body">
                        <h6 class="card-title" style="color:black; font-size:20px;"><?= $kategorija['naziv'] ?></h6>
                        <div class="progress" style="height:10px">
                            <div class="progress-bar" style="width:85%;height:10px"></div>
                        </div>
                        <br>
                        <a href="tabela.php?id=<?= $kategorija['id'] ?>&naziv=<?= $kategorija['naziv'] ?>" class="btn btn-primary">Tabela</a>
                    </div>
                </div>
            </div>
        <?php   } ?>

            
            
       </div>
        
        
    </div>



</body>
</html>
