<?php 
include 'includes/header.php'; 
// Panggil koneksi database
include 'includes/config.php'; 
?>

<main style="padding: 60px 20px; display: flex; justify-content: center; background-color: #f5f5f5; min-height: 80vh;">

<?php
$tampil_hasil = false;
$pesan_error = "";
$data_siswa = [];

// Mengecek apakah tombol Kirim sudah ditekan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_lengkap = mysqli_real_escape_string($koneksi, $_POST['nama_lengkap']);
    $nomor_pendaftaran = mysqli_real_escape_string($koneksi, $_POST['nomor_pendaftaran']);

    // Cek ke database apakah Nama dan Nomor Pendaftarannya cocok
    $query = "SELECT * FROM pendaftaran WHERE nama_lengkap = '$nama_lengkap' AND nomor_pendaftaran = '$nomor_pendaftaran'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        // Kalau datanya ketemu, ambil datanya dan ubah tampilan ke halaman hasil
        $data_siswa = mysqli_fetch_assoc($result);
        $tampil_hasil = true;
    } else {
        // Kalau nggak ketemu, munculin pesan error
        $pesan_error = "Maaf, Nama Lengkap atau Nomor Pendaftaran tidak ditemukan. Silakan cek kembali!";
    }
}

// =========================================================================
// 1. TAMPILAN JIKA LOLOS (Gambar ke-2 Figma)
// =========================================================================
if ($tampil_hasil) {
    ?>
    <div style="background-color: #004487; width: 100%; max-width: 600px; padding: 40px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
        
        <div style="text-align: center; margin-bottom: 30px;">
            <h2 style="color: white; font-weight: 700; margin: 0; font-size: 18px; letter-spacing: 1px;">PENGUMUMAN</h2>
            <div style="height: 2px; width: 180px; background-color: #e67e22; margin: 10px auto 0;"></div>
        </div>

        <!-- Kotak Data Siswa (Warna Krem Terang) -->
        <div style="background: #f0eee4; padding: 15px; border-radius: 8px; margin-bottom: 15px;">
            <p style="margin: 0 0 5px 0; font-size: 13px; font-weight: 600; color: #333;">Nama Lengkap</p>
            <p style="margin: 0; font-size: 16px; color: #000; font-weight: 500;"><?= $data_siswa['nama_lengkap'] ?></p>
        </div>

        <div style="background: #f0eee4; padding: 15px; border-radius: 8px; margin-bottom: 30px;">
            <p style="margin: 0 0 5px 0; font-size: 13px; font-weight: 600; color: #333;">Nomor Pendaftaran</p>
            <p style="margin: 0; font-size: 16px; color: #000; font-weight: 500;"><?= $data_siswa['nomor_pendaftaran'] ?></p>
        </div>

        <!-- Kotak Status Kelulusan (Warna Oren) -->
        <div style="background-color: #d88e30; padding: 30px; border-radius: 8px; text-align: center; margin-bottom: 30px;">
            <h3 style="color: white; margin: 0; font-size: 16px; line-height: 1.6; font-weight: 600;">
                Anda dinyatakan LOLOS seleksi<br>
                Penerimaan Peserta Didik Baru (PPDB)<br>
                MTs Wi Kebarongan
            </h3>
        </div>

        <!-- Persyaratan Daftar Ulang -->
        <div style="color: white; font-size: 14px; line-height: 1.6;">
            <p style="font-weight: 700; margin-bottom: 15px;">Silakan melakukan daftar ulang pada tanggal 21 Juli 2026 di MTs WI Kebarongan</p>
            
            <p style="margin-bottom: 5px;">Persyaratan Pendaftaran<br>Adapun persyaratan yang harus dilengkapi oleh calon peserta didik adalah sebagai berikut:</p>
            <ol style="padding-left: 20px; margin-top: 5px;">
                <li>Fotokopi Ijazah (menyusul apabila belum diterbitkan).</li>
                <li>Fotokopi SKHUN (menyusul apabila belum diterbitkan).</li>
                <li>Fotokopi rapor 5 (lima) semester terakhir.</li>
                <li>Fotokopi Akta Kelahiran sebanyak 2 lembar.</li>
                <li>Pas foto ukuran 3x4 cm dengan latar belakang biru sebanyak 5 lembar.</li>
                <li>Fotokopi Kartu Keluarga (KK) sebanyak 2 lembar.</li>
                <li>Fotokopi KTP orang tua/wali sebanyak 2 lembar.</li>
                <li>Fotokopi KPS, PKH, atau KIP (bagi yang memiliki).</li>
                <li>Fotokopi sertifikat atau piagam penghargaan (bagi yang memiliki).</li>
            </ol>
        </div>

        <div style="text-align: center; margin-top: 30px;">
            <!-- Link diubah menjadi index.php -->
            <a href="index.php" style="background-color: #5dade2; color: white; text-decoration: none; padding: 10px 40px; border-radius: 4px; font-weight: 600; font-family: 'Inter', sans-serif; display: inline-block;">
                Kembali
            </a>
        </div>

    </div>
    <?php
} 
// =========================================================================
// 2. TAMPILAN FORM PENGECEKAN (Gambar ke-1 Figma)
// =========================================================================
else {
    ?>
    <div style="background-color: #004487; width: 100%; max-width: 600px; padding: 40px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
        
        <div style="text-align: center; margin-bottom: 30px;">
            <h2 style="color: white; font-weight: 700; margin: 0; font-size: 18px; letter-spacing: 1px;">PENGUMUMAN</h2>
            <div style="height: 2px; width: 180px; background-color: #e67e22; margin: 10px auto 0;"></div>
        </div>

        <!-- Alert Error (Hanya muncul jika salah ketik) -->
        <?php if($pesan_error != ""): ?>
            <div style="background-color: #e74c3c; color: white; padding: 12px; border-radius: 4px; margin-bottom: 25px; text-align: center; font-size: 14px; font-weight: 500;">
                <?= $pesan_error ?>
            </div>
        <?php endif; ?>

        <!-- Form Pencarian -->
        <form action="cek_kelulusan.php" method="POST">
            
            <div style="background: white; padding: 12px 15px; border-radius: 4px; margin-bottom: 15px;">
                <label style="display: block; font-size: 14px; color: #333; font-weight: 600; margin-bottom: 5px;">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" placeholder="Jawaban Anda" required style="width: 100%; border: none; outline: none; font-family: 'Inter', sans-serif; font-size: 14px; color: #555;">
            </div>

            <div style="background: white; padding: 12px 15px; border-radius: 4px; margin-bottom: 35px;">
                <label style="display: block; font-size: 14px; color: #333; font-weight: 600; margin-bottom: 5px;">Nomor Pendaftaran</label>
                <input type="text" name="nomor_pendaftaran" placeholder="Jawaban Anda" required style="width: 100%; border: none; outline: none; font-family: 'Inter', sans-serif; font-size: 14px; color: #555;">
            </div>

            <div style="text-align: center;">
                <button type="submit" style="background-color: #5dade2; color: white; border: none; padding: 12px 50px; border-radius: 4px; font-weight: 600; font-family: 'Inter', sans-serif; cursor: pointer;">
                    Kirim
                </button>
            </div>

        </form>
    </div>
    <?php
}
?>
</main>

<?php include 'includes/footer.php'; ?>