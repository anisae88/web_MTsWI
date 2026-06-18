<?php
// Ini wajib ada di paling atas biar nggak error garis merah ($koneksi)
include 'includes/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_lengkap = mysqli_real_escape_string($koneksi, $_POST['nama_lengkap']);
    $nisn         = mysqli_real_escape_string($koneksi, $_POST['nisn']);
    $tempat_lahir = mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']);
    $tanggal_lahir= mysqli_real_escape_string($koneksi, $_POST['tanggal_lahir']);
    $alamat       = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $asal_sekolah = mysqli_real_escape_string($koneksi, $_POST['asal_sekolah']);
    $jenis_kelamin= mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);

    // Bikin Nomor Pendaftaran Otomatis
    $nomor_pendaftaran = "PPDB26" . rand(1000, 9999);

    $query = "INSERT INTO pendaftaran (nomor_pendaftaran, nama_lengkap, nisn, tempat_lahir, tanggal_lahir, alamat, asal_sekolah, jenis_kelamin) 
              VALUES ('$nomor_pendaftaran', '$nama_lengkap', '$nisn', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$asal_sekolah', '$jenis_kelamin')";

    if (mysqli_query($koneksi, $query)) {
        // Panggil header untuk desain
        include 'includes/header.php';
        ?>

        <!-- KARTU NOMOR PENDAFTARAN -->
        <main style="padding: 60px 20px; display: flex; justify-content: center; background-color: #f5f5f5; min-height: 80vh;">
            <div style="background-color: #004487; width: 100%; max-width: 500px; padding: 40px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                
                <div style="text-align: center; margin-bottom: 30px;">
                    <h2 style="color: white; font-weight: 700; margin: 0; font-size: 18px; letter-spacing: 1px;">NOMOR PENDAFTARAN</h2>
                    <div style="height: 2px; width: 250px; background-color: #e67e22; margin: 10px auto 0;"></div>
                </div>

                <div style="background: white; padding: 15px; border-radius: 4px; margin-bottom: 15px;">
                    <p style="margin: 0 0 5px 0; font-size: 12px; font-weight: 600; color: #333;">Nama Lengkap</p>
                    <p style="margin: 0; font-size: 15px; color: #000; font-weight: 500;"><?= $nama_lengkap; ?></p>
                </div>

                <div style="background: white; padding: 15px; border-radius: 4px; margin-bottom: 30px;">
                    <p style="margin: 0 0 5px 0; font-size: 12px; font-weight: 600; color: #333;">Nomor Pendaftaran</p>
                    <p id="teks-nomor" style="margin: 0; font-size: 18px; font-weight: 700; color: #000;"><?= $nomor_pendaftaran; ?></p>
                </div>

                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <button onclick="salinNomor()" style="background-color: #d88e30; color: white; border: none; padding: 10px 30px; border-radius: 4px; font-weight: 600; font-family: 'Inter', sans-serif; cursor: pointer;">
                        Salin
                    </button>
                    
                    <a href="index.php" style="background-color: #5dade2; color: white; text-decoration: none; padding: 10px 30px; border-radius: 4px; font-weight: 600; font-family: 'Inter', sans-serif; display: inline-block;">
                        Selesai
                    </a>
                </div>

            </div>
        </main>

        <script>
            function salinNomor() {
                var nomor = document.getElementById("teks-nomor").innerText;
                navigator.clipboard.writeText(nomor).then(function() {
                    alert("Berhasil disalin: " + nomor);
                }, function() {
                    alert("Gagal menyalin nomor.");
                });
            }
        </script>

        <?php 
        // Panggil footer
        include 'includes/footer.php';
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    header("Location: ppdb.php");
    exit();
}
?>