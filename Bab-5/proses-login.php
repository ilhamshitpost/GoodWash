<?php
session_start();

// Cek apakah ada data yang dikirimkan melalui metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $validUsername = "admin";
  $validPassword = "12345";

  if ($username === "" || $password === "") {
    echo "<script>alert('Isi semua data terlebih dahulu.');</script>";
  } elseif ($username === $validUsername && $password === $validPassword) {
    // Simpan username ke session
    $_SESSION['username'] = $username;
    setcookie('username', $username, time() + (86400 * 30), '/'); // Set cookie dengan nama 'username' dan nilai username pengguna
    echo "<script>alert('Login berhasil!'); window.location.href = 'admin.php';</script>";
    exit();
  } else {
    echo "<script>alert('Username atau password salah.'); window.location.href = 'login.php';</script>";
    exit();
  }
}
?>