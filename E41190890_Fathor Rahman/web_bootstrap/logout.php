<?php 
session_start();
unset($_SESSION['id_user']);
unset($_SESSION['nama_user']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['alamat']);

echo "<script>location='login.php' </script>";
