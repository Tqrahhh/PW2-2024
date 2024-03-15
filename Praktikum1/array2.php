<?php

    $dinos = [
        [
            "dinoName" => "Tricera",
            "dinoAge" => 300
        ],
        [
            "dinoName" => "Rex",
            "dinoAge" => 250
        ],
        [
            "dinoName" => "Ptera",
            "dinoAge" => 200
        ],
    ]; 

    foreach ($dinos as $dino) {
        echo $dino["dinoName"] . " - " .$dino["dinoAge"] . "Tahun";
        echo '<br>';
    }
?>