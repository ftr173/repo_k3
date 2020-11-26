<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <h2>Menambahkan data ke database</h2>
        </div>
        <div class="row  mt-5">
            <a href="." class="btn btn-outline-info">Kembali</a>
        </div>
        <div class="row mt-2">
            <form action="aksi.php?p=input" method="POST">
                <div class="form-group">
                    <div class="row">
                        <label>Nama</label>
                        <input type="text" name="xnama" id="xnama" class="form-control">
                    </div>
                    <div class="row">
                        <label>Alamat</label>
                        <input type="text" name="xalamat" id="xnama" class="form-control">
                    </div>
                    <div class="row">
                        <label>Pekerjaan</label>
                        <input type="text" name="xpekerjaan" id="xnama" class="form-control">
                    </div>
                    <div class="row mt-2">
                        <button type="submit" class="btn btn-primary">Tambahkan</button> &nbsp;
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>