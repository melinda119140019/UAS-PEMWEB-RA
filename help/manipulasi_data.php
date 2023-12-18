<?php
//Menambah data mahasiswa
$sqlTambah = "INSERT INTO mahasiswa (nama, nim, prodi, email, password, jenisKelamin, tglLahir, alamat)
              VALUES ('John Doe', '123456', 'Informatika', 'john@example.com', 'hashed_password', 'Laki-Laki', '2000-01-01', 'Jl. Contoh No. 123')";
$conn->query($sqlTambah);

//Mengambil data mahasiswa
$sqlAmbil = "SELECT * FROM mahasiswa";
$result = $conn->query($sqlAmbil);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nama: " . $row["nama"] . " - Prodi: " . $row["prodi"] . "<br>";
    }
} else {
    echo "Tidak ada data mahasiswa.";
}

//Menutup koneksi
$conn->close();
?>
