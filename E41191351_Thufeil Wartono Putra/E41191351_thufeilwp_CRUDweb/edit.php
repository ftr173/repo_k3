<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Membuat CRUD</h1>
        <h2>Menampilkan Data</h2>
    </div>

    <br>

    <a href="index.php" class="button button1">Lihat Data</a>

    <br>

    <h3>Edit Data</h3>
    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query_mysql = mysqli_query($koneksi, "select * from user where id ='$id'");
    $nomor =1;
    while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
    <form action="update.php" method="POST">
        <table id="customers">
            <tr>
                <td>Nama</td>
                <td><input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <input type="text" name="nama" placeholder="Nama..." value="<?php echo $data['nama'] ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <input type="text" name="alamat" placeholder="Alamat..." value="<?php echo $data['alamat'] ?>">
                </td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <input type="text" name="pekerjaan" placeholder="Pekerjaan..." value="<?php echo $data['pekerjaan'] ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                <input type="submit" class="button button1" value="simpan">
                </td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>