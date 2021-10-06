<?php
include_once("config.php");

//mengambil id_produk dari url
$id_produk = $_GET['id_produk'];

$mysql = mysqli_query($connect, "SELECT * FROM produk WHERE id_produk = $id_produk");
 
while($produk = mysqli_fetch_array($mysql)) {
    $nama_produk = $produk['nama_produk'];
    $keterangan = $produk['keterangan'];
    $harga = $produk['harga'];
    $jumlah = $produk['jumlah'];
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    <title>EDIT PRODUK</title>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-6 bg-secondary text-white rounded text-center">
                <h1>EDIT PRODUK</h1>
                <a role="button" href="index.php" class="btn btn-light mb-3" id="back">&#8592</a>

                <form action="#" method="post">
                    <div class="row mb-3">
                        <label for="id_produk" class="col-sm-3 col-form-label">ID Produk</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="id_produk" name="id_produk" value=<?php echo $id_produk;?> disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nama_produk" class="col-sm-3 col-form-label">Nama Produk</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" value=<?php echo $nama_produk;?>>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="keterangan" name="keterangan" value=<?php echo $keterangan;?>>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="harga" name="harga" value=<?php echo $harga;?>>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jumlah" class="col-sm-3 col-form-label">Jumlah</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="jumlah" name="jumlah" value=<?php echo $jumlah;?>>
                    </div>
                </div>
                <input type="submit" name="update" value="Simpan" class="btn btn-primary">
                </form>
                <?php
 
                // jika form disubmit, update data
                if(isset($_POST['update'])) {
                    $nama_produk = $_POST['nama_produk'];
                    $keterangan = $_POST['keterangan'];
                    $harga = $_POST['harga'];
                    $jumlah = $_POST['jumlah'];
                    
                    $mysql = mysqli_query($connect, "UPDATE produk SET nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE id_produk='$id_produk'");
                    
                    echo "Produk berhasil diupdate. Lihat <a style='color: white;'href='index.php'>daftar produk</a>.";
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>