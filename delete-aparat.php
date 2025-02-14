<?php 
    session_start();
    require_once "db2.php";

    $id = $_REQUEST['id'];
    $stmt = $pdo->prepare("DELETE FROM ppaparati WHERE id=?");
    $stmt->execute([$id]);
    header("Location:ppaparati.php");
    die();
?>
