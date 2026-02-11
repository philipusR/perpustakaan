<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'siswa') {
    header("Location: login_siswa.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="dashboard-page">

<div class="dashboard">
    <h2>Dashboard Siswa</h2>

    <!-- SEARCH -->
    <input type="text" class="search" placeholder="Cari buku...">

    <!-- LIST BUKU -->
    <div class="book-list">

        <div class="book-card">
            <div class="cover"></div>
            <p class="book-title">Laskar Pelangi</p>
            <button class="btn-small">Pinjam</button>
        </div>

        <div class="book-card">
            <div class="cover"></div>
            <p class="book-title">Bumi Manusia</p>
            <button class="btn-small">Pinjam</button>
        </div>

        <div class="book-card">
            <div class="cover"></div>
            <p class="book-title">Negeri 5 Menara</p>
            <button class="btn-small">Pinjam</button>
        </div>

    </div>

    <!-- TABEL PEMINJAMAN -->
    <h3>Daftar Buku Dipinjam</h3>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Buku</th>
            <th>Jenis Buku</th>
            <th>Kembalikan</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Laskar Pelangi</td>
            <td>Novel</td>
            <td><button class="btn-small">Kembalikan</button></td>
        </tr>
    </table>

</div>

</body>
</html>
