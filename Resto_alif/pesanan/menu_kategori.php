<?php
require_once 'config.php';

// Function to insert new menu_kategori
function insertMenuKategori($id_menu, $id_kategori) {
    $sql = "INSERT INTO menu_kategori (id_menu, id_kategori) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $id_menu, $id_kategori);
    $stmt->execute();
    $stmt->close();
}

// Function to get all menu_kategori
function getAllMenuKategori() {
    $sql = "SELECT * FROM menu_kategori";
    $result = $conn->query($sql);
    return $result;
}

// Example usage:
// insertMenuKategori(1, 1);
// $menu_kategori = getAllMenuKategori();
// foreach ($menu_kategori as $row) {
//     echo $row["id_menu"] . " - " . $row["id_kategori"] . "<br>";
// }
?>