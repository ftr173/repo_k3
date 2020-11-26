<?php
include "koneksi.php";
$p = $_GET['p'];

if ($p == "input") {
    $nama = $_POST['xnama'];
    $alamat = $_POST['xalamat'];
    $peker = $_POST['xpekerjaan'];

    mysqli_query($konek, "insert into user(nama,alamat,pekerjaan)values('$nama','$alamat','$peker')");
    header("location:.?pesan=input");
}

if ($p == "update") {
    $id = $_GET['id'];
    $nama = $_POST['xnama'];
    $alamat = $_POST['xalamat'];
    $peker = $_POST['xpekerjaan'];

    mysqli_query($konek, "update user set nama='$nama',alamat='$alamat',pekerjaan='$peker' where id_user='$id'");
    header("location:.?pesan=update");
}

if ($p == "hapus") {
    $id = $_GET['id'];
    mysqli_query($konek, "delete from user where id_user='$id'");
    header("location:.?pesan=hapus");
}
