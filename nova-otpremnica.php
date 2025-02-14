<?php 
    session_start();
    require_once "Potrosni/db.php";
    $otpremnice = $pdo->query("SELECT * FROM otpremnice")->fetchAll();
    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // print_r($_POST);
        $stmt = $pdo->prepare("INSERT INTO otpremnice (izdato_kome,spisak_alata,izdao_ko,datum_izdavanja) VALUES (?,?,?,?) ");
        $stmt->execute([$_POST["izdato_kome"], $_POST["spisak_alata"], $_POST["izdao_ko"], $_POST["datum_izdavanja"]]);
        header("Location: zaduzen-alat.php");
    }
?>


<?php include "moduli/head.php" ?>
<br>
    <div class="container d-flex justify-content-center">
        
        <div class="col-md-9"  style="border:solid black thin;">
            <div class="form"  style="width:100%; text-align:center;">
                <h1>Nova otpremnica</h1>
                <br>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

                  
                    <div class="form-group">

                        <!-- <input  style="height:45px; width:20%; margin:5px;"  type="number" class="form-control" placeholder="id" name="id"> -->
                        <input  style="height:45px; width:40%; margin-left:10%; margin-top:2%"  type="text" class="form-control" placeholder="Kome se izdaje" name="izdato_kome">
                        
                        <input  style="height:45px; width:40%; margin-left:10%; margin-top:2%"  type="text" class="form-control" placeholder="Datum izdavanja" name="datum_izdavanja">

                        <input  style="height:45px; width:40%; margin-left:10%; margin-top:2%"  type="text" class="form-control" placeholder="Ko izdaje" name="izdao_ko">
                        <br>
                        <textarea name="spisak_alata" id="" cols="70" rows="20" placeholder="Spisak alata"></textarea>
                    </div>



                    <button type="submit" class="btn btn-primary">DODAJ</button>
                </form>
                    
                
            </div>

        </div>
        
    </div>

</body>
</html>