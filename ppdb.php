<?php include 'includes/header.php'; ?>

<main class="container" style="padding: 40px 20px;">
    <div style="max-width: 600px; margin: 0 auto; background: #004487; padding: 30px; border-radius: 8px; color: white;">
        <h2 style="text-align: center; margin-bottom: 20px;">FORMULIR PENDAFTARAN SANTRI BARU<br>MTs WI KEBARONGAN</h2>
        
        <form action="proses_ppdb.php" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
            
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap" required style="width: 100%; padding: 10px; border-radius: 4px; border: none;">
            </div>

            <div class="form-group">
                <label>NISN (Jika Ada)</label>
                <input type="text" name="nisn" style="width: 100%; padding: 10px; border-radius: 4px; border: none;">
            </div>

            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir" required style="width: 100%; padding: 10px; border-radius: 4px; border: none;">
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" required style="width: 100%; padding: 10px; border-radius: 4px; border: none;">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" rows="3" required style="width: 100%; padding: 10px; border-radius: 4px; border: none;"></textarea>
            </div>

            <div class="form-group">
                <label>Asal Sekolah</label>
                <input type="text" name="asal_sekolah" required style="width: 100%; padding: 10px; border-radius: 4px; border: none;">
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label><br>
                <div style="background: white; color: black; padding: 10px; border-radius: 4px;">
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
                    <span style="margin-left: 20px;"></span>
                    <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
                </div>
            </div>

            <button type="submit" style="background: #3498db; color: white; padding: 12px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer; margin-top: 10px;">
                Kirim
            </button>
        </form>
    </div>
</main>

<?php include 'includes/footer.php'; ?>