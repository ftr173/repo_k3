<style>
input[type=text], select {
  width: 100%;
  padding: 9px 15px;
  margin: 4px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
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
</style>
<?php
include "header.php";
?>

<div class="container">
    <form action="aksi.php?p=edit&id=<?php echo $_GET['id'] ?>" method="POST">
        <?php
        $no = 1;
        $sql = "select * from mahasiswa";
        $data = $konek->prepare($sql);
        $data->execute();
        $d = $data->fetch(PDO::FETCH_ASSOC);
        ?>
        <!-- <input type="hidden" name="xid" value="<?= $d['id_mhs']; ?>"> -->
        <div class="form-group">
            <label for="pwd">Nama Mahasiswa :</label>
            <input type="text" class="form-control" value="<?= $d['nama_mhs']; ?>" name="xnama" id="xnama">
        </div>
        <div class="form-group">
            <label for="pwd">Jurusan :</label>
            <input type="text" class="form-control" value="<?= $d['Jurusan']; ?>" placeholder="Masukkan Jurusan" name="xjurusan" id="xjurusan">
        </div>
        <div class="form-group">
            <label for="pwd">Prodi :</label>
            <input type="text" class="form-control" value="<?= $d['Prodi']; ?>" placeholder="Masukkan Prodi" name="xprodi" id="xprodi">
        </div>
        <div class="form-group">
            <label for="pwd">Email :</label>
            <input type="text" class="form-control" value="<?= $d['email_mhs']; ?>" name="xemail" id="xemail">
        </div>
        <button type="submit" class="button button2">Update</button>
    </form>

</div>


<?php
include "footer.php"
?>