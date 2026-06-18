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

    <!-- 2. JUDUL UTAMA (Center) -->
    <div style="padding: 60px 10%; text-align: center;">
        <h2 style="color: #004487; margin-bottom: 5px; display: inline-block;">Berbagai Fasilitas di MTs WI Kebarongan</h2>
        <div style="width: 350px; height: 3px; background-color: #CC8432; margin: 0 auto 50px auto;"></div>

        <?php
        // Data fasilitas dengan deskripsi sesuai gambar
        $fasilitas = [
            ["Aula Serbaguna", "aula.png", "MTs WI Kebarongan memiliki aula serbaguna yang digunakan untuk berbagai kegiatan sekolah. Aula ini menjadi sarana pendukung yang menunjang kelancaran berbagai aktivitas sekolah."],
            ["Laboratorium multimedia", "lab.png", "MTs Wi Kebarongan memiliki laboratorium multimedia yang digunakan sebagai sarana pembelajaran berbasis teknologi. Laboratorium ini mendukung kegiatan belajar mengajar serta membantu siswa mengembangkan keterampilan dalam bidang komputer dan multimedia."],
            ["Pondok", "pondok.png", "MTs Wi Kebarongan memiliki pondok pesantren yang menjadi sarana pembinaan karakter dan pendidikan keagamaan bagi siswa. Melalui berbagai kegiatan keislaman, pondok pesantren mendukung pengembangan akhlak, kedisiplinan, dan pemahaman agama siswa."],
            ["Perpustakaan", "perpustakaan.png", "MTs Wi Kebarongan memiliki perpustakaan yang menyediakan berbagai koleksi buku sebagai sumber belajar bagi siswa. Perpustakaan ini menjadi sarana untuk meningkatkan minat baca serta mendukung kegiatan pembelajaran di sekolah."],
            ["Masjid", "masjid.png", "MTs Wi Kebarongan memiliki masjid yang digunakan sebagai tempat ibadah dan kegiatan keagamaan bagi siswa serta warga sekolah. Masjid ini menjadi sarana untuk meningkatkan keimanan, ketakwaan, dan pembentukan karakter Islami."],
            ["Lapangan", "lapangan.png", "MTs Wi Kebarongan memiliki lapangan yang digunakan untuk kegiatan olahraga, upacara, dan berbagai aktivitas sekolah lainnya. Lapangan ini menjadi sarana pendukung untuk mengembangkan kesehatan, keterampilan, dan kebersamaan siswa."]
        ];

        foreach ($fasilitas as $item) {
            // Menghitung lebar garis agar menyesuaikan panjang kata judul (perkiraan 10px per huruf)
            $garis_width = strlen($item[0]) * 10; 
            echo '
            <div style="margin-bottom: 50px; text-align: left;">
                <h3 style="color: #004487; margin-bottom: 5px; display: inline-block;">'.$item[0].'</h3>
                <div style="width: '.$garis_width.'px; height: 3px; background-color: #CC8432; margin-bottom: 15px;"></div>
                <p style="color: #555; line-height: 1.6; margin-bottom: 20px;">'.$item[2].'</p>
                <div style="text-align: center;">
                    <img src="assets/img/fasilitas/'.$item[1].'" style="width: 80%; border-radius: 8px;">
                </div>
            </div>';
        }
        ?>
    </div>

<?php include 'includes/footer.php'; ?>
</body>