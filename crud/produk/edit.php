<?php
require_once '../config/Database.php';
require_once '../class/Produk.php';

$database = new Database();
$db = $database->dbConnection();

$produk = new Produk($db);

if(isset($_POST['update'])) {
    $produk->id = $_POST['id'];
    $produk->kode = $_POST['kode'];
    $produk->nama = $_POST['nama'];
    $produk->harga_beli = $_POST['harga_beli'];
    $produk->harga_jual = $_POST['harga_jual'];
    $produk->stok = $_POST['stok'];
    $produk->min_stok = $_POST['min_stok'];
    $produk->jenis_produk_id = $_POST['jenis_produk_id'];

    $produk->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $produk->id = $_GET['id'];
    $stmt = $produk->edit();
    $num = $stmt->rowCount();

    if($num > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak ditemukan.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="kode">Kode:</label>
        <input type="text" name="kode" value="<?php echo $kode; ?>" required>
        <br>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $nama; ?>" required>
        <br>
        <label for="harga_beli">Harga Beli:</label>
        <input type="number" name="harga_beli" value="<?php echo $harga_beli; ?>" required>
        <br>
        <label for="harga_jual">Harga Jual:</label>
        <input type="number" name="harga_jual" value="<?php echo $harga_jual; ?>" required>
        <br>
        <label for="stok">Stok:</label>
        <input type="number" name="stok" value="<?php echo $stok; ?>" required>
        <br>
        <label for="min_stok">Min Stok:</label>
        <input type="number" name="min_stok" value="<?php echo $min_stok; ?>" required>
        <br>
        <label for="jenis_produk_id">Jenis Produk ID:</label>
        <input type="number" name="jenis_produk_id" value="<?php echo $jenis_produk_id; ?>" required>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>