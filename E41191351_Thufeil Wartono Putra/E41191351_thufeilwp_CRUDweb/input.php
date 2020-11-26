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

    <h3>Input Data Baru</h3>
    <div>
    <form action="input-aksi.php" method="POST">
        <table id="customers">
            <tr>
                <td>Nama</td>
                <td><input type="text"  name="nama" placeholder="Nama..."></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" placeholder="Alamat..."></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan" placeholder="Pekerjan..."></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="button button1" value="simpan"></td>
            </tr>
            </form>
        </table>
        </div>
</body>
</html>