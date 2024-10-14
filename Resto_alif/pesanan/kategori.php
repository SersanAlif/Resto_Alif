<?php
require_once 'config.php';

// Function to insert new kategori
function insertKategori($nama_kategori) {
    $sql = "INSERT INTO kategori (nama_kategori) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nama_kategori);
    $stmt->execute();
    $stmt->close();
}

// Function to get all kategori
function getAllKategori() {
    $sql = "SELECT * FROM kategori";
    $result = $conn->query($sql);
    return $result;
}

// Example usage:
// insertKategori("Kategori 1");
// $kategori = getAllKategori();
// foreach ($kategori as $row) {
//     echo $row["nama_kategori"] . "<br>";
// }
?>