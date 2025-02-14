<?php 
    require_once "Potrosni/db.php";
    echo $_REQUEST['id'];
    // echo $_REQUEST['sadrzaj'];
    $stmt = $pdo->prepare("UPDATE otpremnice SET spisak_alata=? WHERE id=?");
    $stmt->execute([$_REQUEST['sadrzaj'], $_REQUEST['id']]);

    header("Location: zaduzen-alat.php");

?>