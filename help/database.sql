-- Syntax untuk membuat tabel mahasiswa
CREATE TABLE mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    nim VARCHAR(20) NOT NULL,
    prodi VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    jenisKelamin VARCHAR(15) NOT NULL,
    tglLahir DATE NOT NULL,
    alamat TEXT NOT NULL
);
