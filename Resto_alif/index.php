<?php
// index.php

// Set the content type
header('Content-Type: text/html; charset=UTF-8');
?>
<?php include 'header.php'; ?>

<?php include 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LA CASA DI ALIFIO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


    <!-- Header -->
    <header>
        
       <!-- Navbar -->
       <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="navbar">
    <div class="container">
        <a class="navbar-brand mx-auto" href="#hero">
            <img src="images/logo.png" alt="Logo" class="img-fluid logo-responsive" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#hero">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="#motor-section">MENU</a></li>
                <li class="nav-item"><a class="nav-link" href="#news-section">INFORMATION</a></li>
                <li class="nav-item"><a class="nav-link" href="#news-events">NEWS & EVENTS</a></li>
                <li class="nav-item"><a class="nav-link" href="#signature-dishes">SIGNATURE DISHES</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       CONTACT US
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://wa.me/+6285797041255" target="_blank">
                            <img src="images/wa.png" alt="Chat" width="20" /> Chat via WhatsApp
                        </a>
                        <a class="dropdown-item" href="https://www.google.com/maps/search/?api=1&query=Jalan+Saturnus+Utara+VIII+No.+15,+Bandung,+Jawa+Barat" target="_blank">
                            <img src="images/loc.png" alt="Location" width="20" /> Location
                        </a>
                        <a class="dropdown-item" href="tel:+6285797041255">
                            <img src="images/phone.png" alt="Phone" width="20" /> Call
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white daftar-menu-btn" href="#daftarmenu">DAFTAR MENU</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    </header>

    <!-- Hero Section -->
    <div class="container-fluid mt-5" data-aos="fade-down" data-aos-delay="150" id="hero">
    <div class="card mb-3 border-0 shadow-lg">
        <div class="row no-gutters align-items-center">
            <!-- Image on the left -->
            <div class="col-lg-6">
                <img src="images/Alip.png" class="card-img" alt="LA CASA DI ALIFIO Restaurant Image" style="height: 100%; object-fit: cover;">
            </div>
            <!-- Description on the right -->
            <div class="col-lg-6">
                <div class="card-body">
                    <h2 class="card-title text-uppercase">LA CASA DI ALIFIO</h2>
                    <p class="card-text">
                        Welcome to <strong>LA CASA DI ALIFIO</strong>, where authentic flavors meet modern dining! Our restaurant offers a wide range of exquisite dishes, blending traditional recipes with innovative culinary techniques. Whether you're here for our delicious pasta, fresh seafood, or perfectly grilled meats, each dish is crafted with the finest ingredients and served in a warm, inviting atmosphere.
                    </p>
                    <p class="card-text">
                        Located in the heart of the city, <strong>LA CASA DI ALIFIO</strong> is the perfect spot for a romantic dinner, family gathering, or special celebration. Our passionate chefs and friendly staff are dedicated to providing you with an unforgettable dining experience. Visit us today and discover why we are known as a favorite destination for food lovers!
                    </p>
                    <a href="#daftarmenu" class="btn btn-primary">Explore Our Menu</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section>
<div id="panorama-container"></div>
</section>

    
    <!-- Menu Section -->
    <section id="motor-section" class="container py-5">
        <div data-aos="fade-down" data-aos-delay="150">
            <h2 class="text-center mb-5">PILIH MAKANAN <span class="text-danger">ITALIA</span> UNTUK ANDA!</h2>
            <div class="row">
                <!-- BEAT Card -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0">
                        <img src="images/pizza.jpeg" class="card-img-top img-fluid" alt="Honda BEAT">
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">PIZZA</h5>
                            <p class="card-text text-danger">Harga Mulai Dari<br>Rp17.900</p>
                            <span class="badge badge-warning">NEW</span>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-dark mr-2" data-toggle="modal" data-target="#pizzaModal">CARI TAHU LEBIH LANJUT</button>
                                <a href="pesan.php" class="btn btn-danger">BOOKING SEKARANG</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CBR Card -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0">
                        <img src="images/salad.jpeg" class="card-img-top img-fluid" alt="Honda CBR 150">
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">SALAD</h5>
                            <p class="card-text text-danger">Harga Mulai Dari<br>Rp15.000.</p>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-dark mr-2" data-toggle="modal" data-target="#saladModal">CARI TAHU LEBIH LANJUT</button>
                                <a href="pesan.php" class="btn btn-danger">BOOKING SEKARANG</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CRF Card -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0">
                        <img src="images/tortelini.webp" class="card-img-top img-fluid" alt="Honda CRF 150-L">
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">TORTELINI</h5>
                            <p class="card-text text-danger">Harga Mulai Dari<br>Rp30.000.</p>
                            <span class="badge badge-warning">NEW</span>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-dark mr-2" data-toggle="modal" data-target="#torteliniModal">CARI TAHU LEBIH LANJUT</button>
                                <a href="pesan.php" class="btn btn-danger">BOOKING SEKARANG</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- New Card 4: ADV -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0">
                        <img src="images/lasagna.webp" class="card-img-top img-fluid" alt="Honda ADV 150">
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">LASAGNA</h5>
                            <p class="card-text text-danger">Harga Mulai Dari<br>Rp36.000.</p>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-dark mr-2" data-toggle="modal" data-target="#lasagnaModal">CARI TAHU LEBIH LANJUT</button>
                                <a href="pesan.php" class="btn btn-danger">BOOKING SEKARANG</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- New Card 5: SH -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0">
                        <img src="images/burger.jpg" class="card-img-top img-fluid" alt="Honda SH 150">
                        <div class ="card-body text-center">
                            <h5 class="card-title font-weight-bold">BURGER</h5>
                            <p class="card-text text-danger">Harga Mulai Dari<br>Rp40.000.</p>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-dark mr-2" data-toggle="modal" data-target="#burgerModal">CARI TAHU LEBIH LANJUT</button>
                                <a href="pesan.php" class="btn btn-danger">BOOKING SEKARANG</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- New Card 6: CB -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0">
                        <img src="images/spagetti.jpeg" class="card-img-top img-fluid" alt="Honda CB 150">
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">SPAGETTI</h5>
                            <p class="card-text text-danger">Harga Mulai Dari<br>Rp31.000.</p>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-dark mr-2" data-toggle="modal" data-target="#spagettiModal">CARI TAHU LEBIH LANJUT</button>
                                <a href="booking.html" class="btn btn-danger">BOOKING SEKARANG</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modals -->
    <!-- Modals -->
    <!-- Pizza Modal -->
    <div class="modal fade" id="pizzaModal" tabindex="-1" aria-labelledby="pizzaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pizzaModalLabel">PIZZA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Informasi lebih lanjut tentang PIZZA.</p>
                    <ul>
                        <li>Spesifikasi: ...</li>
                        <li>Fitur: ...</li>
                        <li>Review: ...</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Salad Modal -->
    <div class="modal fade" id="saladModal" tabindex="-1" aria-labelledby="saladModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="saladModalLabel">SALAD</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Informasi lebih lanjut tentang SALAD.</p>
                    <ul>
                        <li>Spesifikasi: ...</li>
                        <li>Fitur: ...</li>
                        <li>Review: ...</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tortelini Modal -->
    <div class="modal fade" id="torteliniModal" tabindex="-1" aria-labelledby="torteliniModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="torteliniModalLabel">TORTELINI</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Informasi lebih lanjut tentang TORTELINI.</p>
                    <ul>
                        <li>Spesifikasi: ...</li>
                        <li>Fitur: ...</li>
                        <li>Review: ...</li>
                    </ul>
                </div>
                <div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Lasagna Modal -->
    <div class="modal fade" id="lasagnaModal" tabindex="-1" aria-labelledby="lasagnaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lasagnaModalLabel">LASAGNA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Informasi lebih lanjut tentang LASAGNA.</p>
                    <ul>
                        <li>Spesifikasi: ...</li>
                        <li>Fitur: ...</li>
                        <li>Review: ...</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Burger Modal -->
    <div class="modal fade" id="burgerModal" tabindex="-1" aria-labelledby="burgerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="burgerModalLabel">BURGER</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Informasi lebih lanjut tentang BURGER.</p>
                    <ul>
                        <li>Spesifikasi: ...</li>
                        <li>Fitur: ...</li>
                        <li>Review: ...</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Spaghetti Modal -->
    <div class="modal fade" id="spagettiModal" tabindex="-1" aria-labelledby="spaghettiModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="spaghettiModalLabel">SPAGETTI</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Informasi lebih lanjut tentang SPAGETTI.</p>
                    <ul>
                        <li>Spesifikasi: ...</li>
                        <li>Fitur: ...</li>
                        <li>Review: ...</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <section id="news-section" class="container py-5">
    <div data-aos="fade-down" data-aos-delay="150">
        <h2 class="text-center mb-5">INFORMASI <span class="text-danger">TERKINI</span> UNTUK ANDA!</h2>
        <div class="row">
            <!-- Card 1: New Menu Item -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-danger font-weight-bold">Menu Baru</h5>
                        <p class="card-text">Coba hidangan baru kami: Pasta al Pesto, sempurna untuk penggemar masakan Italia!</p>
                    </div>
                </div>
            </div>

            <!-- Card 2: Special Event -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-danger font-weight-bold">Acara Spesial</h5>
                        <p class="card-text">Bergabunglah dengan kami untuk malam musik live setiap Jumat malam!</p>
                    </div>
                </div>
            </div>

            <!-- Card 3: Chef's Recommendation -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-danger font-weight-bold">Rekomendasi Koki</h5>
                        <p class="card-text">Jangan lewatkan Pizza Margherita kami, paduan sempurna dari bahan segar!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="signature-dishes" class="py-5">
    <div data-aos="fade-down" data-aos-delay="150"></div>
    <div class="container">
        <h2 class="text-center mb-4">Signature Dishes</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Pasta Aglio e Olio</h5>
                        <p class="card-text">Pasta dengan bumbu bawang putih dan minyak zaitun, disajikan dengan herbs segar.</p>
                        <p class="card-price">IDR 75,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Grilled Salmon</h5>
                        <p class="card-text">Salmon panggang dengan bumbu lemon dan rosemary, disajikan dengan sayuran segar.</p>
                        <p class="card-price">IDR 120,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Tiramisu</h5>
                        <p class="card-text">Dessert klasik Italia dengan lapisan kopi dan krim mascarpone.</p>
                        <p class="card-price">IDR 50,000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <section id="news-events" class="news-events">
        <div data-aos="fade-down" data-aos-delay="150">
            <div class="container">
                <h2 class="text-center mb-5">NEWS & <span class="text-danger">EVENTS</span></h2>
                <div class="event-item">
                    <h3>Grand Opening</h3>
                    <p>Date: October 15, 2024</p>
                    <p>Join us for the grand opening of LA CASA DI ALIFIO! Enjoy complimentary appetizers and drinks from 5 PM to 8 PM.</p>
                </div>
                <div class="event-item">
                    <h3>Live Music Night</h3>
                    <p>Date: October 22, 2024</p>
                    <p>Experience a night of live music at our restaurant featuring local artists. Reservations are recommended!</p>
                </div>
                <div class="event-item">
                    <h3>Cooking Class</h3>
                    <p>Date: October 29, 2024</p>
                    <p>Join our chef for a special cooking class where you will learn how to prepare authentic Italian dishes.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="daftarmenu" style="background-color: EBD3F8;">
        <div data-aos="fade-down" data-aos-delay="150">
            <div class="container py-5">
                <h2 class="text-center mb-5">Daftar Menu Makanan</h2>

                <div id="menuCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <!-- Carousel Item 1 -->
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="col-md-6 mb-4">
                                    <div class="card menu-item shadow-sm border-0">
                                        <img src="images/margarita.png" class="card-img-top img-fluid" alt="Pizza Margherita" />
                                        <div class="card-body text-center">
                                            <h5 class="menu-title">Pizza Margherita</h5>
                                            <p class="menu-price">Rp 50.000</p>
                                            <p class="card-text">Pizza dengan topping keju mozzarella dan saus tomat segar.</p>
                                            <a href="pesan.php" class="btn btn-danger">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Item 2 -->
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-md-6 mb-4">
                                    <div class="card menu-item shadow-sm border-0">
                                        <img src="images/cheeseburger .jpg" class="card-img-top img-fluid" alt="Cheeseburger" />
                                        <div class="card-body text-center">
                                            <h5 class="menu-title">Cheeseburger</h5>
                                            <p class="menu-price">Rp 35.000</p>
                                            <p class="card-text">Burger dengan daging sapi, keju cheddar, selada, dan tomat.</p>
                                            <a href="pesan.php" class="btn btn-danger">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Item 3 -->
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-md-6 mb-4">
                                    <div class="card menu-item shadow-sm border-0">
                                        <img src="images /salad1.png" class="card-img-top img-fluid" alt="Caesar Salad" />
                                        <div class="card-body text-center">
                                            <h5 class="menu-title">Caesar Salad</h5>
                                            <p class="menu-price">Rp 25.000</p>
                                            <p class="card-text">Salad segar dengan selada, crouton, ayam panggang, dan saus Caesar.</p>
                                            <a href="pesan.php" class="btn btn-danger">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Item 4 -->
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-md-6 mb-4">
                                    <div class="card menu-item shadow-sm border-0">
                                        <img src="images/spagetti1.png" class="card-img-top img-fluid" alt="Spaghetti Bolognese" />
                                        <div class="card-body text-center">
                                            <h5 class="menu-title">Spaghetti Bolognese</h5>
                                            <p class="menu-price">Rp 40.000</p>
                                            <p class="card-text">Spaghetti dengan saus daging sapi cincang dan saus tomat yang nikmat.</p>
                                            <a href="pesan.php" class="btn btn-danger">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Item 5 -->
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-md-6 mb-4">
                                    <div class="card menu-item shadow-sm border-0">
                                        <img src="images/susi.png" class="card-img-top img-fluid" alt="Sushi Roll" />
                                        <div class="card-body text-center">
                                            <h5 class="menu-title">Sushi Roll</h5>
                                            <p class="menu-price">Rp 60.000</p>
                                            <p class="card-text">Sushi roll dengan isi ikan tuna, salmon, dan alpukat.</p>
                                            <a href="pesan.php" class="btn btn-danger">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Item 6 -->
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-md-6 mb-4">
                                    <div class="card menu-item shadow-sm border-0">
                                        <img src="images/icecream.png" class="card-img-top img-fluid" alt="Ice Cream Sundae" />
                                        <div class="card-body text-center">
                                            <h5 class="menu-title">Ice Cream Sundae</h5>
                                            <p class="menu-price">Rp 20.000</p>
                                            <p class="card-text">Es krim vanila dengan saus cokelat dan kacang almond.</p>
                                            <a href="pesan.php" class="btn btn-danger">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Item 7 -->
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-md-6 mb-4">
                                    <div class="card menu-item shadow-sm border-0">
                                        <img src="images/pasta.png" class="card-img-top img-fluid" alt="Pasta Aglio Olio" />
                                        <div class="card-body text-center">
                                            <h5 class="menu-title">Pasta Aglio Olio</h5>
                                            <p class="menu-price">Rp 30.000</p>
                                            <p class="card-text">Pasta dengan minyak zaitun, bawang putih, dan cabai.</p>
                                            <a href="pesan.php" class="btn btn-danger">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Item 8 -->
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-md-6 mb-4">
                                    <div class="card menu-item shadow-sm border-0">
                                        <img src="images/tacos.png" class="card-img-top img-fluid" alt="Tacos" />
                                        <div class="card-body text-center">
                                            <h5 class="menu-title">Tacos</h5>
                                            <p class="menu-price">Rp  45.000</p>
                                            <p class="card-text">Tacos isi daging ayam, salsa, dan guacamole.</p>
                                            <a href="pesan.php" class="btn btn-danger">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Item 9 -->
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-md-6 mb-4">
                                    <div class="card menu-item shadow-sm border-0">
                                        <img src="images/brownis.png" class="card-img-top img-fluid" alt="Brownies Cokelat" />
                                        <div class="card-body text-center">
                                            <h5 class="menu-title">Brownies Cokelat</h5>
                                            <p class="menu-price">Rp 25.000</p>
                                            <p class="card-text">Brownies lezat dengan saus cokelat dan kacang.</p>
                                            <a href="pesan.php" class="btn btn-danger">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Item 10 -->
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-md-6 mb-4">
                                    <div class="card menu-item shadow-sm border-0">
                                        <img src="images/kentang.png" class="card-img-top img-fluid" alt="French Fries" />
                                        <div class="card-body text-center">
                                            <h5 class="menu-title">French Fries</h5>
                                            <p class="menu-price">Rp 15.000</p>
                                            <p class="card-text">Kentang goreng renyah yang disajikan dengan saus sambal.</p>
                                            <a href="pesan.php" class="btn btn-danger">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Carousel Controls -->
                    <a class="carousel-control-prev" href="#menuCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#menuCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div data-aos="fade-down" data-aos-delay="150">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Link Terkait</h5>
                        <ul>
                            <li><a href="#">Kontak</a></li>
                            <li><a href="#">Penerimaan Mahasiswa Baru</a></li>
                            <li><a href="#">Badan Penjaminan Mutu</a></li>
                            <li><a href="#">Institut Kajian Strategis</a></li>
                            <li><a href="#">FAQs & Help</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5>Informasi</h5>
                        <ul>
                            <li><a href="#">Jln. Terusan Halimun No.37 (Pelajar Pejuang 45) Bandung 40263, Jawa Barat</a></li>
                            <li><a href="#">(022) 7301-987</a></li>
                            <li><a href="#">info@ukri.ac.id</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5>Maps</h5>
                        <p>Jalan Saturnus Utara VIII No 15, Bandung, Jawa Barat</p>
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.079793513022!2d107.60226341392084!3d-6.912706268944425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e700 0a94e6c7%3A0xb4f94bd76b1d8d0a!2sJalan%20Saturnus%20Utara%20VIII%20No%2015%2C%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sen!2sid!4v1696172141190!5m2!1sen!2sid" 
                            width="100%" 
                            height="300" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center" style="margin-top: 20px;">
                        <p>&copy; 2024 LA CASA DI ALIFIO. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
 
    <script>
    AOS.init({
        duration: 1000, // Durasi animasi dalam milidetik
        once: true, // Apakah animasi hanya akan terjadi sekali
    });
</script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="index.js"></script>
</body>
</html> 