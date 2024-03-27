<?php
require_once '../config/Database.php';
require_once '../class/Produk.php';

$database = new Database();
$db = $database->dbConnection();

$produk = new Produk($db);

if(isset($_POST['tambah'])){
    $produk->kode = $_POST['kode'];
    $produk->nama = $_POST['nama'];
    $produk->harga_beli = $_POST['harga_beli'];
    $produk->harga_jual = $_POST['harga_jual'];
    $produk->stok = $_POST['stok'];
    $produk->min_stok = $_POST['min_stok'];
    $produk->jenis_produk_id = $_POST['jenis_produk_id'];

    $produk->store(); 
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
        <label for="kode">Kode:</label>
        <input type="text" name="kode" required>
        <br>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <br>
        <label for="harga_beli">Harga Beli:</label>
        <input type="number" name="harga_beli" required>
        <br>
        <label for="harga_jual">Harga Jual:</label>
        <input type="number" name="harga_jual" required>
        <br>
        <label for="stok">Stok:</label>
        <input type="number" name="stok" required>
        <br>
        <label for="min_stok">Min Stok:</label>
        <input type="number" name="min_stok" required>
        <br>
        <label for="jenis_produk_id">Jenis Produk ID:</label>
        <input type="number" name="jenis_produk_id" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>