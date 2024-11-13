<?php
// Konfigurasi database
$host = "localhost";
$user = "root";       // Username default untuk XAMPP
$password = "";       // Password default kosong
$dbname = "db_school";  // Ganti dengan nama database yang akan digunakan

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil!";
?>
