<div style="width: 250px; background-color: #004487; color: white; height: 100vh; position: fixed; padding: 20px; font-family: 'Inter', sans-serif;">
    <h3 style="margin-bottom: 10px; font-size: 20px;">DASHBOARD</h3>
    <div style="width: 100%; height: 2px; background-color: #e67e22; margin-bottom: 30px;"></div>
    <span style="font-size: 14px; color: #bdc3c7;">ADMIN</span>
    
    <ul style="list-style: none; padding: 0; margin-top: 40px;">
        <?php 
        $page = basename($_SERVER['PHP_SELF']); 
        // Helper untuk ganti warna dan icon
        function getLinkStyle($target, $current) { return ($target == $current) ? "#e67e22" : "white"; }
        function getIcon($name, $target, $current) { return "../assets/img/dashboard/icon_".$name."_" . (($target == $current) ? "oranye" : "putih") . ".png"; }
        ?>
        <li style="margin-bottom: 61px;">
            <a href="dashboard.php" style="color: <?= getLinkStyle('dashboard.php', $page) ?>; text-decoration: none; display: flex; align-items: center; gap: 10px;">
                <img src="<?= getIcon('dashboard', 'dashboard.php', $page) ?>" style="width: 20px;"> Dashboard
            </a>
        </li>
        <li style="margin-bottom: 61px;">
            <a href="data_pendaftar.php" style="color: <?= getLinkStyle('data_pendaftar.php', $page) ?>; text-decoration: none; display: flex; align-items: center; gap: 10px;">
                <img src="<?= getIcon('data_pendaftar', 'data_pendaftar.php', $page) ?>" style="width: 20px;"> Data Pendaftar
            </a>
        </li>
        <li>
            <a href="logout.php" style="color: white; text-decoration: none; display: flex; align-items: center; gap: 10px;">
                <img src="../assets/img/dashboard/icon_logout_putih.png" style="width: 20px;"> Logout
            </a>
        </li>
    </ul>
</div>