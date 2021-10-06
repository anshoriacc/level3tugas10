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

    <title>DAFTAR PRODUK</title>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-6 bg-secondary text-white rounded text-center">
                <h1>DAFTAR PRODUK</h1>
                <a role="button" href="add.php" class="btn btn-primary mb-3">Tambah Produk</a>

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php  
                    while($produk = mysqli_fetch_array($mysql)) {         
                        echo "<tr>";
                        echo "<td>".$produk['id_produk']."</td>";
                        echo "<td>".$produk['nama_produk']."</td>";
                        echo "<td>".$produk['keterangan']."</td>";
                        echo "<td>".$produk['harga']."</td>";
                        echo "<td>".$produk['jumlah']."</td>";
                        echo "<td><a role='button' href='edit.php?id_produk=$produk[id_produk]' class='btn btn-light mb-3'>Edit</a>   <a role='button' href='delete.php?id_produk=$produk[id_produk]' class='btn btn-danger mb-3'>Delete</a></td></tr>";        
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>