<?php
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];
$kelas    = $_POST['kelas'];   // TAMBAHAN

// SIMPAN KE DATABASE
$query = mysqli_query(
    $koneksi,
    "INSERT INTO siswa (username, password, kelas)
     VALUES ('$username', '$password', '$kelas')"
);

// JIKA BERHASIL → KEMBALI KE LOGIN
if ($query) {
    header("Location: login_siswa.php");
    exit;
} else {
    echo "Gagal daftar";
}
