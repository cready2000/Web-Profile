<?php
$host = 'localhost';     // ganti dengan host Anda
$username = 'root';      // ganti dengan username Anda
$password = '';          // ganti dengan password Anda
$dbname = 'portofolio';  // ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>