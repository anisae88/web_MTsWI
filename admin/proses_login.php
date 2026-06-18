<?php
// 1. Memulai sesi
session_start();

// 2. Memanggil koneksi database dengan path yang benar
// Jika file ini di dalam folder 'admin' dan 'includes' sejajar dengan 'admin',
// maka '../includes/config.php' adalah path yang tepat.
require_once('../includes/config.php');

// 3. Pastikan variabel $koneksi benar-benar ada
if (!isset($koneksi)) {
    die("Error: Koneksi database tidak ditemukan. Periksa file config.php Anda.");
}

// 4. Mengambil data dari form login
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);

// 5. Cek ke database
$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = mysqli_query($koneksi, $query);

// 6. Cek hasil
if (!$result) {
    die("Query Error: " . mysqli_error($koneksi));
}

if (mysqli_num_rows($result) > 0) {
    // Jika login berhasil
    $_SESSION['status'] = "login";
    $_SESSION['username'] = $username;
    
    // Langsung pindah ke dashboard
    header("Location: dashboard.php");
    exit();
} else {
    // Jika login gagal
    echo "<script>
            alert('Username atau Password salah!'); 
            window.location.href='login.php';
          </script>";
}
?>