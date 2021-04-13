<?php
echo "work";
    include "../modele/db.php";
    $manage = $_GET["manage"];
    $requet_1 = new crud($manage);
    $execution= $requet_1->delete($_GET["id"]);
    header("Location: ../vue/dashboard.php?manage=$manage");
?>
