<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "foto";

// Membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "foto");

// Memeriksa apakah koneksi berhasil
if (!$koneksi) {
    die("Gagal koneksi: " . mysqli_connect_error());
}

echo "Koneksi berhasil!";
?>