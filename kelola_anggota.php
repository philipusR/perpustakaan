<?php
include 'config.php';
$data = mysqli_query($koneksi, "SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kelola Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="dashboard-page">

<div class="dashboard">
    <h2>Kelola Anggota</h2>

    <table>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>

        <?php $no=1; while($s = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $s['username'] ?></td>
            <td><?= $s['kelas'] ?></td>
            <td>
                <a href="hapus_anggota.php?id=<?= $s['id'] ?>">
                    <button class="btn-small">Hapus</button>
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>
