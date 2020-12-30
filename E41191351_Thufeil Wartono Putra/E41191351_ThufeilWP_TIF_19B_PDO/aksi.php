<?php
include "koneksi/koneksi.php";

$p = $_GET['p'];

if ($p == 'tambah') {
    $sql = "insert into mahasiswa values ('','$_POST[xnama]','$_POST[xjurusan]','$_POST[xprodi]','$_POST[xemail]')";
    $data = $konek->prepare($sql);
    $data->execute(); //menjalankan perintah sql

    echo "<script>alert('Sukses!');location='.'</script>";
}

if ($p == 'edit') {
    $sql = "update mahasiswa set nama_mhs='$_POST[xnama]',Jurusan='$_POST[xjurusan]',Prodi='$_POST[xprodi]', email_mhs='$_POST[xemail]' where id_mhs='$_GET[id]'";
    $data = $konek->prepare($sql);
    $data->execute(); //menjalankan perintah sql

    echo "<script>alert('Update Sukses!');location='.'</script>";
}

if ($p == 'hapus') {
    $sql = "delete from mahasiswa where id_mhs='$_GET[id]'";
    $data = $konek->prepare($sql);
    $data->execute(); //menjalankan perintah sql

    echo "<script>alert('Data Berhasil Dihapus');location='.'</script>";
}
