<?php
include "koneksi.php";
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM kasir WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $query = "UPDATE kasir SET nama_barang='$nama', harga='$harga', stok='$stok' WHERE id=$id";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
    } else {
        echo "Gagal memperbarui data!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit Barang</h2>
    <form action="" method="POST">
        <input type="text" name="nama_barang" value="<?= $row['nama_barang']; ?>" required><br>
        <input type="number" name="harga" value="<?= $row['harga']; ?>" required><br>
        <input type="number" name="stok" value="<?= $row['stok']; ?>" required><br>
        <button type="submit" name="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
