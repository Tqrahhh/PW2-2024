<?php
require_once '../config/Database.php';
require_once '../class/JenisProduk.php';

$database = new Database();
$db = $database->dbConnection();

$jproduk = new JenisProduk($db);

if(isset($_POST['tambah'])){
    $jproduk->nama = $_POST['nama'];

    $jproduk->store(); 
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>