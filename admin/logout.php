<?php 
// 1. Memulai sesi
session_start();

// 2. Menghapus semua data sesi
session_destroy();

// 3. Mengarahkan kembali ke halaman home (sesuaikan path-nya)
// Jika home.php berada di luar folder admin, gunakan '../home.php'
header("Location: ../index.php"); 
exit();
?>