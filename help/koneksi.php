<?php
//Konfigurasi koneksi ke database
$host = "localhost";
$username = "nama_user_database";
$password = "password_database";
$database = "nama_database";

//Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

//Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
?>
