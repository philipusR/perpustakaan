<?php
include 'config.php';
$data = mysqli_query($koneksi, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kelola Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="dashboard-page">

<div class="dashboard">
    <h2>Kelola Data Buku</h2>

    <form action="tambah_buku.php" method="post" style="margin-bottom:20px;">
        <input type="text" name="nama" placeholder="Nama Buku" required>
        <input type="text" name="jenis" placeholder="Jenis Buku" required>
        <button class="btn-small">+ Tambah Buku</button>
    </form>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Buku</th>
            <th>Jenis</th>
            <th>Aksi</th>
        </tr>

        <?php $no=1; while($b = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $b['nama_buku'] ?></td>
            <td><?= $b['jenis_buku'] ?></td>
            <td>
                <a href="hapus_buku.php?id=<?= $b['id'] ?>">
                    <button class="btn-small">Hapus</button>
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>
