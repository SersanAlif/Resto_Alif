<?php
require_once 'config.php';

// Function to insert new menu
function insertMenu($nama_menu, $harga, $deskripsi, $gambar) {
    $sql = "INSERT INTO menu (nama_menu, harga, deskripsi, gambar) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nama_menu, $harga, $deskripsi, $gambar);
    $stmt->execute();
    $stmt->close();
}

// Function to get all menu
function getAllMenu() {
    $sql = "SELECT * FROM menu";
    $result = $conn->query($sql);
    return $result;
}

// Example usage:
// insertMenu("Menu 1", 10000.00, "Deskripsi Menu 1", "gambar_menu1.jpg");
// $menu = getAllMenu();
// foreach ($menu as $row) {
//     echo $row["nama_menu"] . " - " . $row["harga"] . "<br>";
// }
?>