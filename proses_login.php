<?php
session_start();
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];
$role     = $_POST['role'];

// LOGIN SISWA
if ($role == 'siswa') {
    $query = mysqli_query(
        $koneksi,
        "SELECT * FROM siswa 
         WHERE username='$username' 
         AND password='$password'"
    );
}

// LOGIN ADMIN
else if ($role == 'admin') {
    $query = mysqli_query(
        $koneksi,
        "SELECT * FROM admin 
         WHERE username='$username' 
         AND password='$password'"
    );
}

if (mysqli_num_rows($query) > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['role']     = $role;

    // REDIRECT SESUAI ROLE
    if ($role == 'admin') {
        header("Location: admin.php");
    } else {
        header("Location: dashboard_siswa.php");
    }
    exit;
} else {
    echo "Login gagal";
}
