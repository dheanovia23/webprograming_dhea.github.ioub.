<?php
$host = "localhost";
$user = "root";
$pass = "";

// Membuat koneksi
$koneksi = mysqli_connect("localhost", "root", "");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Membuat database
$sql = "CREATE DATABASE foto";
if (mysqli_query($koneksi, $sql)) {
    echo "Database 'foto' berhasil dibuat.";
} else {
    echo "Gagal membuat database: " . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
?>