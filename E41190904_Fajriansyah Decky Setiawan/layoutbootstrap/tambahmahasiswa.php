<?php
include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tanggallahir = $_POST['tanggallahir'];

$coba = mysqli_query($koneksi,"insert into tabel_mahasiswa values('$nim','$nama','$alamat','$tanggallahir')");

if ($coba) {
    # code...
    header("location:datamahasiswa.php");
}else{
    die('Koneksi Error : '.mysqli_connect_errno() 
    .' - '.mysqli_connect_error());
}

?>