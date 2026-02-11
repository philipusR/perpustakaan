<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: login_admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="admin-page">

<div class="admin-dashboard">
    <h2>Dashboard Admin</h2>

    <div class="admin-menu">
        <a href="kelola_buku.php" class="admin-card">
            <div class="admin-icon"></div>
            <p>Kelola Data Buku</p>
        </a>

        <a href="transaksi.php" class="admin-card">
            <div class="admin-icon"></div>
            <p>Transaksi</p>
        </a>

        <a href="kelola_anggota.php" class="admin-card">
            <div class="admin-icon"></div>
            <p>Kelola Anggota</p>
        </a>
    </div>
</div>

</body>
</html>
