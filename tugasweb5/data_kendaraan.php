<?php
    require_once 'class_kendaraan.php';

    $motor = new Motor("Motor", "Bensin", 2);
    $submarine = new Submarine("Kapal Laut", "Nuclear", 1000);

    echo "Info Motor:<br>";
    $motor->getInfomotor();
    echo "<br>";

    echo "Info Kapal Laut:<br>";
    $submarine->getInfosubmarine();
    echo "<br>";

?>