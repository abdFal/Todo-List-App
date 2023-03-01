<?php
include('config.php');
$id = $_GET['Id'];

// Hapus data dari tabel
mysqli_query($connect, "DELETE FROM list WHERE Id=$id");

// Perbarui urutan ID pada baris yang tersisa di tabel
mysqli_query($connect, "ALTER TABLE list AUTO_INCREMENT = 1");
mysqli_query($connect, "SET @count = 0");
mysqli_query($connect, "UPDATE list SET Id = @count:= @count + 1");

// Redirect ke halaman utama setelah penghapusan berhasil
header("location:index.php");
?>
