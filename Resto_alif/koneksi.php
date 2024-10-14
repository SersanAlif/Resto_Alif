<?php
// koneksi.php

$host = "localhost"; // Host database
$user = "root"; // Username database (default XAMPP)
$pass = ""; // Password database (default XAMPP)
$dbname = "Resto_Alif"; // Nama database yang telah dibuat

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>