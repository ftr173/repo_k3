<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <h2>Menampilkan data dari database</h2>
        </div>
        <div class="row  mt-5">
            <a href="input.php" class="btn btn-outline-info">+ input data user</a>
        </div>
        <div class="row mt-2">
            <?php
            if (isset($_GET['pesan'])) {
                $p = $_GET['pesan'];
                if ($p == "input") {
                    echo "Data berhasil diinputkan";
                } elseif ($p == "update") {
                    echo "Data berhasil diupdate";
                } elseif ($p == "hapus") {
                    echo "Data berhasil dihapus";
                }
            }

            ?>
            <table class="tabelku" style="background-color: antiquewhite;">
                <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Pekerjaan</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php
                    include "koneksi.php";
                    $nomor = 1;
                    $sql = mysqli_query($konek, "select * from user");
                    while ($d = mysqli_fetch_assoc($sql)) {
                    ?>
                        <tr>
                            <td><?= $nomor++; ?></td>
                            <td><?= $d['nama']; ?></td>
                            <td><?= $d['alamat']; ?></td>
                            <td><?= $d['pekerjaan']; ?></td>
                            <td><a href="edit.php?id=<?= $d['id_user']; ?>" class="btn btn-info">Edit</a> - <a href="aksi.php?p=hapus&id=<?= $d['id_user']; ?>" class="btn btn-danger">Hapus</a></td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</body>

</html>