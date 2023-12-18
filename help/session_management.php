<?php
session_start();

//Simpan informasi USER ke dalam session
$_SESSION['user'] = [
    'username' => 'contoh_user',
    'email' => 'user@example.com',
    // informasi pengguna lainnya
];


// membaca informasi dari session
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']['username'];
    echo "Selamat datang, $username!";
} else {
    echo "Silakan masuk terlebih dahulu.";
}
?>
