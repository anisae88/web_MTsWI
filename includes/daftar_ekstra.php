<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; max-width: 800px; margin: 0 auto;">
    <?php
    $current_page = basename($_SERVER['PHP_SELF']);
    
    // Cek apakah kita sedang di folder 'ekstra/' atau di root
    $in_folder = (strpos($_SERVER['PHP_SELF'], '/ekstra/') !== false);
    $prefix = $in_folder ? '' : 'ekstra/';
    
    $ekstra = [
        "Pramuka" => "pramuka.php",
        "Teater" => "teater.php",
        "Palang Merah Remaja (PMR)" => "pmr.php",
        "Hadroh" => "hadroh.php",
        "Drumband" => "drumband.php",
        "Tilawah" => "tilawah.php",
        "Bela Diri (BKC) / Pencak Silat" => "pencak_silat.php",
        "Sepak Bola" => "sepak_bola.php",
        "Kaligrafi" => "kaligrafi.php",
        "PKS" => "pks.php"
    ];

    foreach ($ekstra as $nama => $link) {
        $bg_color = ($current_page == $link) ? '#59ABDB' : '#004487';
        
        echo '<a href="'.$prefix.$link.'" style="background-color: '.$bg_color.'; color: white; padding: 15px; text-decoration: none; font-weight: bold; text-align: center; border-radius: 5px; display: block;">'.$nama.'</a>';
    }
    ?>
</div>