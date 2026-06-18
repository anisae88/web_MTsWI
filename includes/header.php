<?php
// Deteksi folder saat ini secara otomatis
$current_url = $_SERVER['PHP_SELF'];
// Jika URL mengandung garis miring lebih dari satu (berarti di dalam sub-folder)
$depth = substr_count($current_url, '/') - 1; 
$prefix = str_repeat('../', $depth);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTs WI Kebarongan</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo $prefix; ?>assets/css/style.css">
    
    <style>
        /* CSS ini akan memaksa SEMUA elemen memakai Inter */
        * {
            font-family: 'Inter', sans-serif !important;
        }
        
        /* Pastikan elemen body tidak meng-override font */
        body {
            margin: 0;
            padding: 0;
        }
        
        /* ... (lanjutkan CSS dropdown-mu di sini) ... */
    </style>
</head>
<body>
    <header style="background-color: #004487; padding: 15px 50px; display: flex; justify-content: space-between; align-items: center; color: white;">
        
        <div class="logo">
            <img src="<?php echo $prefix; ?>assets/img/home/logo_mts.webp" alt="Logo MTs WI" style="width: 279px; height: 48px; object-fit: contain;">
        </div>
        
        <nav>
    <ul style="list-style: none; display: flex; gap: 25px; margin: 0; padding: 0; align-items: center; font-size: 15px; font-weight: 500;">
        <?php 
        $menu = [
            "Home"      => "index.php",
            "Madrasah"  => "madrasah.php",
            "Fasilitas" => "fasilitas.php",
            "Ekstra"    => "ekstra.php",
            "Berita"    => "berita.php"
        ];
        
        // Mendapatkan nama file saat ini untuk perbandingan
        $current_page = basename($_SERVER['PHP_SELF']);
        
        foreach ($menu as $label => $file) {
            $link = $prefix . $file;
            
            // Logika deteksi halaman aktif
            $isActive = ($current_page == $file);
            $textColor = $isActive ? '#CC8432' : 'white';
            $borderStyle = $isActive ? 'border-bottom: 2px solid #CC8432; padding-bottom: 5px;' : '';
            
            if ($label == 'Ekstra') {
                echo '<li class="dropdown">
                        <a href="'.$link.'" style="color: '.$textColor.'; text-decoration: none; font-weight: 600; '.$borderStyle.'">Ekstra ▼</a>
                        <div class="dropdown-content">
                            <a href="'.$prefix.'ekstra/pramuka.php">Pramuka</a>
                            <a href="'.$prefix.'ekstra/pmr.php">PMR</a>
                            <a href="'.$prefix.'ekstra/drumband.php">Drumband</a>
                            <a href="'.$prefix.'ekstra/pencak_silat.php">Pencak Silat</a>
                            <a href="'.$prefix.'ekstra/kaligrafi.php">Kaligrafi</a>
                            <a href="'.$prefix.'ekstra/teater.php">Teater</a>
                            <a href="'.$prefix.'ekstra/hadroh.php">Hadroh</a>
                            <a href="'.$prefix.'ekstra/tilawah.php">Tilawah</a>
                            <a href="'.$prefix.'ekstra/sepak_bola.php">Sepak Bola</a>
                            <a href="'.$prefix.'ekstra/pks.php">PKS</a>
                        </div>
                      </li>';
            } else {
                echo '<li><a href="'.$link.'" style="color: '.$textColor.'; text-decoration: none; font-weight: 600; '.$borderStyle.'">'.$label.'</a></li>';
            }
        }
        ?>
        <li><a href="<?php echo $prefix; ?>ppdb.php" style="background-color: #e67e22; padding: 8px 15px; border-radius: 4px; color: white; text-decoration: none; font-weight: 600;">Daftar Sekarang</a></li>
        <li><a href="<?php echo $prefix; ?>cek_kelulusan.php" style="background-color: #ecf0f1; color: #004487; padding: 8px 15px; border-radius: 4px; text-decoration: none; font-weight: 600;">Cek Kelulusan</a></li>
    </ul>
</nav>
    </header>