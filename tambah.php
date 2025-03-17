<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $query = "INSERT INTO kasir (nama_barang, harga, stok) VALUES ('$nama', '$harga', '$stok')";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tambah Barang</h2>
    <form action="tambah.php" method="POST">
        <input type="text" name="nama_barang" placeholder="Nama Barang" required><br>
        <input type="number" name="harga" placeholder="Harga" required><br>
        <input type="number" name="stok" placeholder="Stok" required><br>
        <button type="submit" name="submit">Tambah</button>
    </form>
</body>
</html>
