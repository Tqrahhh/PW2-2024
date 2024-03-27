<?php
require_once '../config/Database.php';
require_once '../class/JenisProduk.php';

$database = new Database();
$db = $database->dbConnection();

$jproduk = new JenisProduk($db);

if(isset($_POST['update'])) {
    $jproduk->id = $_POST['id'];
    $jproduk->nama = $_POST['nama'];

    $jproduk->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $jproduk->id = $_GET['id'];
    $stmt = $jproduk->edit();
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
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $nama; ?>" required>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>