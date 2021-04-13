<?php
echo "work";
    include "../modele/db.php";
    $manage = $_GET["manage"];
    $exucetion = new crud($manage );
    $exucetion->delete($_GET["id"]);
    header("Location: ../vue/dashboard.php?manage=$manage");
    
?>
