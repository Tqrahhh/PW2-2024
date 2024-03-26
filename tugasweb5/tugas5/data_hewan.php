<?php

    require_once "class_hewan.php";

    $singa = new Singa("Singa", "Karnivora", "Hutan Rimba");

    echo "Info Hewan:<br>";
    $singa->tampilkanInfo();
    echo "<br>";

    $sapi = new Sapi("Sapi", "Herbivora", "Ladang");

    echo "Info Hewan:<br>";
    $sapi->tampilkanInfo();
    echo "<br>";
?>