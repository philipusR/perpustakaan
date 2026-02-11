<?php
include 'config.php';

$nama  = $_POST['nama'];
$jenis = $_POST['jenis'];

mysqli_query($koneksi,
    "INSERT INTO buku VALUES ('','$nama','$jenis')"
);

header("Location: kelola_buku.php");
