<?php
require_once 'config.php';

// Function to insert new pesanan
function insertPesanan($nama, $email, $menu, $jumlah) {
    $sql = "INSERT INTO pesanan (nama, email, menu, jumlah) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $nama, $email, $menu, $jumlah);
    $stmt->execute();
    $stmt->close();
}

// Function to get all pesanan
function getAllPesanan() {
    $sql = "SELECT * FROM pesanan";
    $result = $conn->query($sql);
    return $result;
}

// Example usage:
// insertPesanan("John Doe", "johndoe@example.com", "Menu 1", 2);
// $pesanan = getAllPesanan();
// foreach ($pesanan as $row) {
//     echo $row["nama"] . " - " . $row["email"] . "<br>";
// }
?>