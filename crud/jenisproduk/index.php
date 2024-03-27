<?php
require_once '../config/Database.php';
require_once '../class/JenisProduk.php';

$database = new Database();
$db = $database->dbConnection();

$jproduk = new JenisProduk($db);

// Cek jika parameter id ada pada URL
if(isset($_GET['id'])){
    $jproduk->id = $_GET['id'];

    if($jproduk->delete()){
        header("Location: index.php");
    }else{
        echo "Gagal menghapus produk.";
    }
}

// Tampilkan data dari method index
$data = $jproduk->index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Jenis Produk</title>
</head>
<body>
    <h1>Daftar Jenis Produk</h1>
    <a href="create.php">Tambah</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($data as $row) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        |
                        <a href="index.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>