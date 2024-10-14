<?php
// Menyertakan file koneksi
include 'koneksi.php';

// Proses pengiriman pesanan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $menu = $_POST['menu'];
    $jumlah = $_POST['quantity'];

    // Menyimpan data ke database
    $sql = "INSERT INTO pesanan (nama, email, menu, jumlah) VALUES ('$nama', '$email', '$menu', '$jumlah')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Pesanan berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Pesan Daftar Menu</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Logo" height="65" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#daftarmenu">DAFTAR MENU</a></li>
                    <li class="nav-item"><a class="nav-link" href="#order-section">PESAN SEKARANG</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html">WEB UTAMA</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero bg-primary text-white text-center py-5">
        <div class="container">
            <h1="lead">Pesan makanan favorit Anda dengan mudah dan cepat!</h1=>
        </div>
    </header>

    <!-- Daftar Menu Section -->
    <section id="daftarmenu" class="py-5">
        <div data-aos="fade-down" data-aos-delay="150"></div>
        <div class="container">
            <h2 class="text-center mb-5">Daftar Menu Makanan</h2>
            <div class="row">
                <!-- Menu Item 1 -->
                <div class="col-md-3 mb-4">
                    <div class="card menu-item shadow-sm border-0">
                        <img src="images/margarita.png" class="card-img-top img-fluid" alt="Pizza" />
                        <div class="card-body text-center">
                            <h5 class="menu-title">Pizza Margherita</h5>
                            <p class="menu-price">Rp 50.000</p>
                            <p class="card-text">Pizza dengan topping keju mozzarella dan saus tomat segar.</p>
                            <a href="#order-section" class="btn btn-custom">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 2 -->
                <div class="col-md-3 mb-4">
                    <div class="card menu-item shadow-sm border-0