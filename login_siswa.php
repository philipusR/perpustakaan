<!DOCTYPE html>
<html>
<head>
    <title>Login Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-page">

<div class="container">
    <h2>Login Siswa</h2>

    <form action="proses_login.php" method="post">
        <input type="hidden" name="role" value="siswa">

        <label>Username</label>
        <input type="text" name="username">

        <label>Password</label>
        <input type="password" name="password">

        <!-- LINK AREA -->
        <div class="link-area">
            <div class="admin-link">
                <span>Admin?</span>
                <a href="login_admin.php">login disini</a>
            </div>

            <div class="register-link">
                <span>Belum menjadi anggota?</span>
                <a href="daftar.php">daftar dulu</a>
            </div>
        </div>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
