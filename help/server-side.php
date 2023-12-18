<?php
//server-side.php

//Fungsi untuk validasi input
function validateInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Mengambil data dari formulir
    $name = validateInput($_POST["name"]);
    $email = validateInput($_POST["email"]);
    $check = isset($_POST["check"]) ? "Ya" : "Tidak";
    $radioValue = isset($_POST["radioGroup"]) ? validateInput($_POST["radioGroup"]) : "";

    //Menampilkan hasil pengolahan data ke layar
    echo "<h2>Hasil Pengolahan Data</h2>";
    echo "<p>Nama: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Checklist: $check</p>";
    echo "<p>Radio Group: $radioValue</p>";

    //Simpan ke basisdata 

    //Menampilkan jenis browser dan alamat IP pengguna
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $userIP = $_SERVER['REMOTE_ADDR'];
    echo "<p>Jenis Browser: $userAgent</p>";
    echo "<p>Alamat IP Pengguna: $userIP</p>";
} else {
    echo "Metode tidak valid.";
}
?>
