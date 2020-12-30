<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 4px 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}



.button2 {
  background-color: white; 
  color: #008CBA; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.button3 {
  background-color: white; 
  color: #f44336; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}


</style>
</head>
<body>
<?php
include "header.php";

?>
<div class="container">
    <a href="tambah.php" ><button class="button button2">+ Tambah Data</button></a> <br> <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Prodi</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $sql = "select * from mahasiswa";
            $data = $konek->prepare($sql);
            $data->execute();
            while ($d = $data->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $d['nama_mhs'] ?></td>
                    <td><?= $d['Jurusan']; ?></td>
                    <td><?= $d['Prodi']; ?></td>
                    <td><?= $d['email_mhs']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $d['id_mhs'] ?>" ><button class="button button2">Edit</button></a>
                        <a href="aksi.php?p=hapus&id=<?= $d['id_mhs'] ?>" ><button class="button button3">hapus</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
include "footer.php"
?>
</body>
</html>
