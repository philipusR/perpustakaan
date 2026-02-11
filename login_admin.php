<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-page">

<div class="container">
    <h2>Login Admin</h2>

    <form action="proses_login.php" method="post">
        <input type="hidden" name="role" value="admin">

        <label>Username</label>
        <input type="text" name="username">

        <label>Password</label>
        <input type="password" name="password">

        <div class="link-area single-link">
            <span>Siswa?</span>
            <a href="login_siswa.php">login disini</a>
        </div>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
