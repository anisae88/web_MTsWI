<?php 
session_start();
// Koneksi langsung agar tidak error lagi
$koneksi = mysqli_connect("localhost", "root", "", "db_mtswi");

if($_SESSION['status'] != "login"){ header("Location: login.php"); exit(); }
include 'sidebar.php'; 
?>

<div style="margin-left: 280px; padding: 40px; font-family: 'Inter', sans-serif; background-color: #f5f5f5; min-height: 100vh;">
    <h2 style="color: #CC8432; margin-bottom: 30px;">DATA LENGKAP PENDAFTAR</h2>

    <div style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; font-size: 14px;">
            <thead>
                <tr style="background: #004487; color: white; text-align: left;">
                    <th style="padding: 12px;">No</th>
                    <th style="padding: 12px;">No Pendaftaran</th>
                    <th style="padding: 12px;">Nama Lengkap</th>
                    <th style="padding: 12px;">NISN</th>
                    <th style="padding: 12px;">Jenis Kelamin</th>
                    <th style="padding: 12px;">Tempat Lahir</th>
                    <th style="padding: 12px;">Tanggal Lahir</th>
                    <th style="padding: 12px;">Asal Sekolah</th>
                    <th style="padding: 12px;">Status</th>
                    <th style="padding: 12px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                // Pastikan nama kolom di database (nama_lengkap, nisn, tgl_lahir, dll) 
                // sama persis dengan yang ada di kodingan bawah ini
                $query = mysqli_query($koneksi, "SELECT * FROM pendaftaran ORDER BY id DESC");
                while($d = mysqli_fetch_assoc($query)) {
                    echo "<tr>
                            <td style='padding: 12px; border-bottom: 1px solid #ddd;'>".$no++."</td>
                            <td style='padding: 12px; border-bottom: 1px solid #ddd;'>{$d['nomor_pendaftaran']}</td>
                            <td style='padding: 12px; border-bottom: 1px solid #ddd;'>{$d['nama_lengkap']}</td>
                            <td style='padding: 12px; border-bottom: 1px solid #ddd;'>{$d['nisn']}</td>
                            <td style='padding: 12px; border-bottom: 1px solid #ddd;'>{$d['jenis_kelamin']}</td>
                            <td style='padding: 12px; border-bottom: 1px solid #ddd;'>{$d['tempat_lahir']}</td>
                            <td style='padding: 12px; border-bottom: 1px solid #ddd;'>{$d['tanggal_lahir']}</td>
                            <td style='padding: 12px; border-bottom: 1px solid #ddd;'>{$d['asal_sekolah']}</td>
                            <td style='padding: 12px; border-bottom: 1px solid #ddd;'>{$d['status']}</td>
                            <td style='padding: 12px; border-bottom: 1px solid #ddd;'>
                                <a href='edit_status.php?id={$d['id']}' style='color: #CC8432; text-decoration: none; font-weight: bold;'>Edit</a>
                            </td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>