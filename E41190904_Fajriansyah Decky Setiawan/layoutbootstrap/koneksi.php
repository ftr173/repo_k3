<?php
    $server = "localhost";
	$user = "root";
	$pass = "";
	$db = "akademikmahasiswa";

	$koneksi = mysqli_connect($server, $user, $pass, $db);
	if ($koneksi) {
		# code...
		echo "Koneksi Berhasil";
	}else{
		die("Koneksi Gagal Terhubung ".mysqli_connect_error($konek));
	}
?>