<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tugas1_formulir";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
