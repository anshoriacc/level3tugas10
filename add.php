<?php
include_once("config.php");

$mysql = mysqli_query($connect, "SELECT * FROM produk ORDER BY id_produk DESC");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    <title>TAMBAH PRODUK</title>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-6 bg-secondary text-white rounded text-center">
                <h1>TAMBAH PRODUK</h1>
                <a role="button" href="index.php" class="btn btn-light mb-3" id="back">&#8592</a>

                <form action="add.php" method="post">
                    <div class="row mb-3">
                        <label for="nama_produk" class="col-sm-3 col-form-label">Nama Produk</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="harga" name="harga" required>
                    </div>
                    </div>
                    <div class="row mb-3">
                        <label for="jumlah" class="col-sm-3 col-form-label">Jumlah</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jumlah" name="jumlah" required>
                        </div>
                    </div>
                    <input type="submit" name="Submit" value="Tambah" class="btn btn-primary">
                </form>
                <?php
 
                // jika form disubmit, insert data
                if(isset($_POST['Submit'])) {
                    $nama_produk = $_POST['nama_produk'];
                    $keterangan = $_POST['keterangan'];
                    $harga = $_POST['harga'];
                    $jumlah = $_POST['jumlah'];
                    
                    include_once("config.php");
                    
                    $mysql = mysqli_query($connect, "INSERT INTO produk(nama_produk, keterangan, harga, jumlah) VALUES('$nama_produk','$keterangan','$harga','$jumlah')");
                    
                    echo "Produk berhasil ditambahkan. Lihat <a style='color: white;'href='index.php'>daftar produk</a>.";
                    
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>