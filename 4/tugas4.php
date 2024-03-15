<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h2>Calculator</h2>
    <form action="" method="post">
        <label for="bilangan1">Bilangan 1:</label>
        <input type="number" id="bilangan1" name="bilangan1" required><br><br>
        
        <label for="bilangan2">Bilangan 2:</label>
        <input type="number" id="bilangan2" name="bilangan2" required><br><br>
        
        <input type="submit" name="tambah" value="Tambah">
        <input type="submit" name="kurang" value="Kurang">
        <input type="submit" name="bagi" value="Bagi">
        <input type="submit" name="kali" value="Kali">
    </form>

    <?php
    
    include 'Calculator.php';

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan1 = $_POST["bilangan1"];
        $bilangan2 = $_POST["bilangan2"];

    
        $kalkulator = new Calculator($bilangan1, $bilangan2);

       
        if (isset($_POST['tambah'])) {
            echo "Hasil Pertambahan: " . $kalkulator->pertambahan();
        } elseif (isset($_POST['kurang'])) {
            echo "Hasil Pengurangan: " . $kalkulator->pengurangan();
        } elseif (isset($_POST['bagi'])) {
            echo "Hasil Pembagian: " . $kalkulator->pembagian();
        } elseif (isset($_POST['kali'])) {
            echo "Hasil Perkalian: " . $kalkulator->perkalian();
        }
    }
    ?>
</body>
</html>

