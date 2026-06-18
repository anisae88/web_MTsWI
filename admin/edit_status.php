<?php 
session_start();

// --- KONEKSI LANGSUNG (TANPA INCLUDE) ---
$koneksi = mysqli_connect("localhost", "root", "", "db_mtswi");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Cek apakah ID ada di URL
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE id='$id'");
    $data = mysqli_fetch_assoc($query);
} else {
    header("Location: data_pendaftar.php");
    exit();
}

// Proses update
if(isset($_POST['update'])){
    $status = $_POST['status'];
    mysqli_query($koneksi, "UPDATE pendaftaran SET status='$status' WHERE id='$id'");
    header("Location: data_pendaftar.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<body style="margin: 0; padding: 0; font-family: 'Inter', sans-serif;">
    <div style="margin-left: 280px; padding: 40px;">
        <h2 style="color: #CC8432;">Edit Status Pendaftar</h2>
        <form method="POST">
            <p>Nama: <strong><?= isset($data['nama_lengkap']) ? $data['nama_lengkap'] : 'Data tidak ditemukan' ?></strong></p>
            <label>Status:</label><br>
            <select name="status" style="padding: 10px; width: 200px; margin: 10px 0;">
                <option value="Diproses" <?= (isset($data['status']) && $data['status'] == 'Diproses') ? 'selected' : '' ?>>Diproses</option>
                <option value="Lulus" <?= (isset($data['status']) && $data['status'] == 'Lulus') ? 'selected' : '' ?>>Lulus</option>
                <option value="Tidak Lulus" <?= (isset($data['status']) && $data['status'] == 'Tidak Lulus') ? 'selected' : '' ?>>Tidak Lulus</option>
            </select><br>
            <button type="submit" name="update" style="padding: 10px 20px; background: #004487; color: white; border: none; border-radius: 4px; cursor: pointer;">Simpan Perubahan</button>
            <a href="data_pendaftar.php" style="margin-left: 10px; color: #555;">Batal</a>
        </form>
    </div>
</body>
</html>