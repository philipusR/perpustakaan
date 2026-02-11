<!DOCTYPE html>
<html>
<head>
    <title>Daftar Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-page">

<div class="container">
    <h2>Daftar Anggota</h2>

    <form action="proses_daftar.php" method="post">

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Kelas</label>
        <input type="text" name="kelas" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit">Daftar</button>
    </form>
</div>

</body>
</html>
