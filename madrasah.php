<?php include 'includes/header.php'; ?>

<body style="margin: 0; padding: 0; font-family: 'Inter', sans-serif; background-color: #FFFFFF;">

    <!-- 1. HERO BANNER -->
    <div style="position: relative; width: 100%; height: 350px; background-image: url('assets/img/madrasah/bg_sekolah.png'); background-size: cover; background-position: center;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('assets/img/madrasah/timpa_bg.png');"></div>
        <div style="position: relative; z-index: 1; padding: 100px 10%; color: white;">
            <h1 style="font-size: 45px; margin: 0; line-height: 1;">Selamat Datang di</h1>
            <h1 style="font-size: 45px; margin: 0; line-height: 1;">MTs WI Kebarongan</h1>
        </div>
    </div>

    <!-- 2. BAGIAN VISI -->
    <div style="padding: 40px 10%;">
        <h2 style="color: #004487; margin-bottom: 5px; display: inline-block;">Visi</h2>
        <div style="width: 40px; height: 3px; background-color: #CC8432; margin-bottom: 25px;"></div>
        
        <div style="display: flex; justify-content: center; gap: 220px; margin: 30px 0;">
            <div style="width: 100px;"><img src="assets/img/madrasah/iman.png" style="width: 100%;"><p style="font-weight: bold; text-align:center;">Iman</p></div>
            <div style="width: 100px;"><img src="assets/img/madrasah/ilmu.png" style="width: 100%;"><p style="font-weight: bold; text-align:center;">Ilmu</p></div>
            <div style="width: 100px;"><img src="assets/img/madrasah/aman.png" style="width: 100%;"><p style="font-weight: bold; text-align:center;">Aman</p></div>
        </div>
    </div>

    <!-- 3. BAGIAN MISI -->
    <div style="padding: 0 10% 40px 10%;">
        <h2 style="color: #004487; margin-bottom: 5px; display: inline-block;">Misi</h2>
        <div style="width: 45px; height: 3px; background-color: #CC8432; margin-bottom: 25px;"></div>
        <p style="color: #555; line-height: 1.6; max-width: 800px;">
            Membentuk insan-insan Ulul Albab yang berakidah Islamiyah, alim dan intelek serta berakhlak mulia, peduli terhadap pelaksanaan tugas da’wah Amar Ma’ruf Nahi Munkar.
        </p>
    </div>

    <!-- 4. BAGIAN PRESTASI -->
    <div style="padding: 40px 10%; background-color: #004487; color: white;">
        <h2 style="margin-bottom: 5px; display: inline-block;">Prestasi</h2>
        <div style="width: 85px; height: 3px; background-color: #CC8432; margin-bottom: 25px;"></div>
        
        <div style="display: flex; gap: 20px;">
            <img src="assets/img/madrasah/prestasi1.png" style="width: 32%; border-radius: 8px;">
            <img src="assets/img/madrasah/prestasi2.png" style="width: 32%; border-radius: 8px;">
            <img src="assets/img/madrasah/prestasi3.png" style="width: 32%; border-radius: 8px;">
        </div>
    </div>

   <!-- 5. BAGIAN MTS UPDATE -->
    <div style="padding: 40px 10% 60px 10%; background-color: #FFFFFF;">
        <h2 style="color: #004487; margin-bottom: 5px; display: inline-block;">MTs Update</h2>
        <div style="width: 105px; height: 3px; background-color: #CC8432; margin-bottom: 25px;"></div>
        
        <div style="display: flex; gap: 20px;">
            <?php 
            // Kita tambahkan 'link' ke dalam array data berita
            $berita = [
                ["berita1.png", "Bekali Pengawas, Kepala MTs WI: Jalankan Amanah Ujian dengan Niat Ibadah", "berita/berita1.php"], 
                ["berita2.png", "Pelaksanaan TKA di MTs WI Kebarongan Terselenggara dengan Sukses", "berita/berita2.php"], 
                ["berita3.png", "Masa Depan Santri Bukan Spekulasi! Intip Strategi MTs WI Kebarongan Siapkan Lulusan Unggul", "berita/berita3.php"]
            ];

            foreach($berita as $b) {
                // Bungkus dengan tag <a> agar bisa diklik
                echo '<a href="'.$b[2].'" style="text-decoration: none;">
                        <div style="width: 424px; height: 555px; background: white; border: 1px solid #ddd; border-radius: 8px; overflow: hidden; transition: 0.3s;">
                            <img src="assets/img/madrasah/'.$b[0].'" style="width: 100%; height: 300px; object-fit: cover;">
                            <div style="padding: 20px;">
                                <p style="font-size: 16px; font-weight: bold; margin: 0; color: #333;">'.$b[1].'</p>
                            </div>
                        </div>
                      </a>';
            }
            ?>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>
</body>