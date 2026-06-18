<?php include 'includes/header.php'; ?>

<div style="padding: 50px 10%; background-color: #f5f5f5;">
    <div style="text-align: center; margin-bottom: 40px;">
        <h1 style="color: #004487; margin: 0;">Berita Madrasah</h1>
        <div style="width: 80px; height: 3px; background-color: #CC8432; margin: 10px auto 0 auto;"></div>
    </div>

    <div style="display: grid; grid-template-columns: repeat(3, 424px); gap: 25px; justify-content: center;">
        <?php
        $daftar_berita = [
            ["file" => "berita/berita1.php", "img" => "berita_home1.png", "judul" => "Bekali Pengawas, Kepala MTs WI Kebarongan Hadiri Rakor"],
            ["file" => "berita/berita2.php", "img" => "berita_home2.png", "judul" => "Pelaksanaan TKA di MTs WI Kebarongan Berjalan Lancar"],
            ["file" => "berita/berita3.php", "img" => "berita_home3.png", "judul" => "Masa Depan Santri Bukan Hanya Akademik, Tapi Juga Akhlak"],
            ["file" => "berita/berita4.php", "img" => "berita_home4.png", "judul" => "Open House & Baksos MTs WI Kebarongan Ajak Masyarakat Peduli"],
            ["file" => "berita/berita5.php", "img" => "berita_home5.png", "judul" => "Rapat Kelulusan dan Kenaikan Kelas Tahun Ajaran 2026"],
            ["file" => "berita/berita6.php", "img" => "berita_home6.png", "judul" => "Upacara Hari Senin Bersama Pembina dari Polsek Kemranjen"],
        ];

        foreach ($daftar_berita as $b) {
            echo '<a href="'.$b['file'].'" style="text-decoration: none; color: inherit;">
                    <div style="width: 424px; height: 547.86px; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: 0.3s; display: flex; flex-direction: column;">
                        <img src="assets/img/berita/'.$b['img'].'" style="width: 100%; height: 350px; object-fit: cover;">
                        <div style="padding: 20px; flex-grow: 1;">
                            <h3 style="color: #004487; margin: 0; font-size: 18px; line-height: 1.5; font-weight: 600;">'.$b['judul'].'</h3>
                        </div>
                    </div>
                  </a>';
        }
        ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>