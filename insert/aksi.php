<?php

$servername = "localhost";
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "product"; // Ganti dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Berhasil";
}

    $no_pesanan = $_POST["no_pesanan"];
    $tanggal = $_POST["tanggal"];
    $nm_supplier = $_POST["nm_supplier"];
    $nm_produk = $_POST["nm_produk"];
    $total = $_POST["total"];

    // Query SQL untuk menyimpan data ke dalam tabel
    $mysqli = "INSERT INTO t_pesanan (no_pesanan, tanggal, nm_supplier, nm_produk, total) VALUES ('$no_pesanan', '$tanggal', '$nm_supplier', '$nm_produk', '$total')";

    if ($conn->query($mysqli) === TRUE) {
        header("Location: insert.php");
        exit();
    } else {
        echo "Error: " . $mysqli . "<br>" . $conn->error;
    }

$conn->close();
?>
