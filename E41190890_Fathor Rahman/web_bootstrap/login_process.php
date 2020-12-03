<?php
include "koneksi.php";
session_start();

$user = $_POST['xemail'];
$pass = $_POST['xpass'];

$sql = mysqli_query($con, "select * from tb_user where username = '$user'");
$d = mysqli_fetch_assoc($sql);

if ($d['password'] == ($pass)) {
    header("location:.?pesan=berhasil");
    $_SESSION['id_user'] = $d['id_user'];
    $_SESSION['nama_user'] = $d['nama']; //menyimpan session nama
    $_SESSION['username'] = $d['username']; //menyimpan session username
    $_SESSION['password'] = $d['password'];
    $_SESSION['alamat'] = $d['alamat'];
} else {
    header("location:login.php?pesan=gagal");
}
