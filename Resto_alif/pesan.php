

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
                    <li class="nav-item"><a class="nav-link" href="index.php">WEB UTAMA</a></li>
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
                    <div class="card menu-item shadow-sm border-0">
                        <img src="images/cheeseburger .jpg" class="card-img-top img-fluid" alt="Burger" />
                        <div class="card-body text-center">
                            <h5 class="menu-title">Cheeseburger</h5>
                            <p class="menu-price">Rp 35.000</p>
                            <p class="card-text">Burger dengan daging sapi, keju cheddar, selada, dan tomat.</p>
                            <a href="#order-section" class="btn btn-custom">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 3 -->
                <div class="col-md-3 mb-4">
                    <div class="card menu-item shadow-sm border-0">
                        <img src="images/salad1.png" class="card-img-top img-fluid" alt="Salad" />
                        <div class="card-body text-center">
                            <h5 class="menu-title">Caesar Salad</h5>
                            <p class="menu-price">Rp 25.000</p>
                            <p class="card-text">Salad segar dengan selada, crouton, ayam panggang, dan saus Caesar.</p>
                            <a href="#order-section" class="btn btn-custom">Pesan Sekar ang</a>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 4 -->
                <div class="col-md-3 mb-4">
                    <div class="card menu-item shadow-sm border-0">
                        <img src="images/spagetti1.png" class="card-img-top img-fluid" alt="Spaghetti" />
                        <div class="card-body text-center">
                            <h5 class="menu-title">Spaghetti Bolognese</h5>
                            <p class="menu-price">Rp 40.000</p>
                            <p class="card-text">Spaghetti dengan saus daging sapi cincang dan saus tomat.</p>
                            <a href="#order-section" class="btn btn-custom">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 5 -->
                <div class="col-md-3 mb-4">
                    <div class="card menu-item shadow-sm border-0">
                        <img src="images/susi.png" class="card-img-top img-fluid" alt="Sushi" />
                        <div class="card-body text-center">
                            <h5 class="menu-title">Sushi Roll</h5>
                            <p class="menu-price">Rp 60.000</p>
                            <p class="card-text">Sushi roll dengan isi ikan tuna, salmon, dan alpukat.</p>
                            <a href="#order-section" class="btn btn-custom">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 6 -->
                <div class="col-md-3 mb-4">
                    <div class="card menu-item shadow-sm border-0">
                        <img src="images/icecream.png" class="card-img-top img-fluid" alt="Ice Cream" />
                        <div class="card-body text-center">
                            <h5 class="menu-title">Ice Cream Sundae</h5>
                            <p class="menu-price">Rp 20.000</p>
                            <p class="card-text">Es krim vanila dengan saus cokelat dan kacang almond.</p>
                            <a href="#order-section" class="btn btn-custom">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 7 -->
                <div class="col-md-3 mb-4">
                    <div class="card menu-item shadow-sm border-0">
                        <img src="images/tacos.png" class="card-img-top img-fluid" alt="Tacos" />
                        <div class="card-body text-center">
                            <h5 class="menu-title">Tacos</h5>
                            <p class="menu-price">Rp 45.000</p>
                            <p class="card-text">Taco dengan daging ayam, salsa, dan guacamole.</p>
                            <a href="#order-section" class="btn btn-custom">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 8 -->
                <div class="col-md-3 mb-4">
                    <div class="card menu-item shadow-sm border-0">
                        <img src="images/pasta.png" class="card-img-top img-fluid" alt="Pasta" />
                        <div class="card-body text-center">
                            <h5 class="menu-title">Pasta Aglio e Olio</h5>
                            <p class="menu-price">Rp 30.000</p>
                            <p class="card-text">Pasta dengan bawang putih, minyak zaitun, dan cabai.</p>
                            <a href="#order-section" class="btn btn-custom">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 9 -->
                <div class="col-md-3 mb-4">
                    <div class="card menu-item shadow-sm border-0">
                        <img src="images/brownis.png" class="card-img-top img-fluid" alt="Brownies" />
                        <div class="card-body text-center">
                            <h5 class="menu-title">Brownies Cokelat</h5>
                            <p class="menu-price">Rp 15.000</p>
                            <p class="card-text">Brownies lembut dengan rasa cokelat yang kaya.</p>
                            <a href="#order-section" class="btn btn-custom">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 10 -->
                <div class="col-md-3 mb-4">
                    <div class="card menu -item shadow-sm border-0">
                        <img src="images/lasagna.webp" class="card-img-top img-fluid" alt="Hot Dog" />
                        <div class="card-body text-center">
                            <h5 class="menu-title">Lasagna</h5>
                            <p class="menu-price">Rp 25.000</p>
                            <p class="card-text">Hot dog dengan sosis daging sapi dan saus BBQ.</p>
                            <a href="#order-section" class="btn btn-custom">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 11 -->
                <div class="col-md-3 mb-4">
                    <div class="card menu-item shadow-sm border-0">
                        <img src="images/salad1.png" class="card-img-top img-fluid" alt="Pancake" />
                        <div class="card-body text-center">
                            <h5 class="menu-title">Salad</h5>
                            <p class="menu-price">Rp 28.000</p>
                            <p class="card-text">Pancake lembut dengan sirup maple dan buah segar.</p>
                            <a href="#order-section" class="btn btn-custom">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 12 -->
                <div class="col-md-3 mb-4">
                    <div class="card menu-item shadow-sm border-0">
                        <img src="images/kentang.png" class="card-img-top img-fluid" alt="Fried Rice" />
                        <div class="card-body text-center">
                            <h5 class="menu-title">Kentang Goreng</h5>
                            <p class="menu-price">Rp 30.000</p>
                            <p class="card-text">Nasi goreng dengan ayam, telur, dan sayuran.</p>
                            <a href="#order-section" class="btn btn-custom">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  
<!-- Order Section -->
<section id="order-section" class="py-5 bg-light">
    <div data-aos="fade-down" data-aos-delay="150"></div>
    <div class="container">
        <h2 class="text-center mb-5">Form Pemesanan</h2>
        <form id="orderForm">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda" required />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda" required />
            </div>
            <div class="mb-3">
                <label for="menu" class="form-label">Pilih Menu</label>
                <select class="form-select" id="menu" required>
                    <option value="">Pilih menu...</option>
                    <option value="pizza">Pizza Margherita - Rp 50.000</option>
                    <option value="burger">Cheeseburger - Rp 35.000</option>
                    <option value="salad">Caesar Salad - Rp 25.000</option>
                    <option value="spaghetti">Spaghetti Bolognese - Rp 40.000</option>
                    <option value="sushi">Sushi Roll - Rp 60.000</option>
                    <option value="ice-cream">Ice Cream Sundae - Rp 20.000</option>
                    <option value="tacos">Tacos - Rp 45.000</option>
                    <option value="pasta">Pasta Aglio e Olio - Rp 30.000</option>
                    <option value="brownies">Brownies Cokelat - Rp 15.000</option>
                    <option value="hot-dog">Hot Dog - Rp 25.000</option>
                    <option value="pancake">Pancake - Rp 28.000</option>
                    <option value="nasi-goreng">Nasi Goreng - Rp 30.000</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Jumlah Pesanan</label>
                <input type="number" class="form-control" id="quantity" min="1" value="1" required />
            </div>
            <div class="mb-3">
                <label for="payment" class="form-label">Metode Pembayaran</label>
                <select class="form-select" id="payment" required>
                    <option value="">Pilih metode pembayaran...</option>
                    <option value="cash">Cash</option>
                    <option value="bank-transfer">Transfer Bank</option>
                    <option value="credit-debit">Kartu Kredit/Debit</option>
                    <option value="ewallet">E-Wallet (e.g., OVO, DANA, GoPay)</option>
                </select>
            </div>
            <div id="paymentDetails" class="mb-3" style="display: none;">
                <h5>Detail Pembayaran</h5>
                <div id="bankTransfer" style="display: none;">
                    <label for="bankAccount" class="form-label">Nomor Rekening</label>
                    <input type="text" class="form-control" id="bankAccount" placeholder="Masukkan nomor rekening" />
                </div>
                <div id="creditCard" style="display: none;">
                    <label for="cardNumber" class="form-label">Nomor Kartu</label>
                    <input type="text" class="form-control" id="cardNumber" placeholder="Masukkan nomor kartu" />
                    <label for="expiryDate" class="form-label">Tanggal Kadaluarsa</label>
                    <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY" />
                    <label for="cvv" class="form-label">CVV</label>
                    <input type="text" class="form-control" id="cvv" placeholder="Masukkan CVV" />
                </div>
                <div id="ewalletDetails" style="display: none;">
                    <label for="ewalletNumber" class="form-label">Nomor E-Wallet</label>
                    <input type="text" class="form-control" id="ewalletNumber" placeholder="Masukkan nomor e-wallet" />
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Kirim Pesanan</button>
        </form>
    </div>
</section>


    <!-- Modal -->
    <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderModalLabel">Pesanan Diterima!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Terima kasih, pesanan Anda telah diterima. Kami akan memproses pesanan Anda secepatnya.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 LA CASA DI ALIFIO. All rights reserved.</p>
    </footer>
    <script>
    document.getElementById("payment").addEventListener("change", function() {
        var paymentMethod = this.value;
        var paymentDetails = document.getElementById("paymentDetails");

        // Show payment details section
        paymentDetails.style.display = "block";

        // Hide all payment detail fields
        document.getElementById("bankTransfer").style.display = "none";
        document.getElementById("creditCard").style.display = "none";
        document.getElementById("ewalletDetails").style.display = "none";

        // Show specific fields based on the payment method
        if (paymentMethod === "bank-transfer") {
            document.getElementById("bankTransfer").style.display = "block";
        } else if (paymentMethod === "credit-debit") {
            document.getElementById("creditCard").style.display = "block";
        } else if (paymentMethod === "ewallet") {
            document.getElementById("ewalletDetails").style.display = "block";
        }
    });

    document.getElementById("orderForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the form from submitting normally

        // Show the modal (implement your modal functionality here)
        var orderModal = new bootstrap.Modal(document.getElementById("orderModal"));
        orderModal.show();

        // Reset the form after showing the modal
        this.reset();
        document.getElementById("paymentDetails").style.display = "none"; // Hide payment details again
    });
</script>
   

    <script>
        AOS.init();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>