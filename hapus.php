<?php
include "koneksi.php";
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM kasir WHERE id=$id");
header("Location: index.php");
?>
