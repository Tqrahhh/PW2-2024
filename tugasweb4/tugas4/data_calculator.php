<?php
    // Buat object dan tampilkan masing-masing method

    require_once 'class_calculator.php';

    $calculator = new Calculator(10,5);

    echo "Pertambahan: " . $calculator->pertambahan() . 
         ", Pengurangan: " . $calculator->pengurangan() . 
         ", Perkalian: " . $calculator->perkalian() . 
         ", Pembagian: " . $calculator->pembagian() . "\n";

?>