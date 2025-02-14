<?php 
    require_once "Potrosni/db.php";
    $stmt = $pdo->prepare("DELETE FROM otpremnice WHERE id=?");
    $stmt->execute([$_REQUEST['id']]);

    header("Location: zaduzen-alat.php");
?>