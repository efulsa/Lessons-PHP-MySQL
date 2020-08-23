<?php
require 'functions.php';

$alatmusik = query('SELECT * FROM alat_musik ORDER BY id DESC');
// DESC dari besar ke kecil /baru ke lama
// ASC dari kecil ke besar / lama ke baru

if(isset($_POST["cari"]))
{
   $alatmusik = cari($_POST['ketik']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Musik</title>
    <style>
        img
        {
            width: 60px;
            height: 60;
        }
    </style>
</head>
<body>
    <h1>Alat Musik</h1>
    <br>
    <form action="" method="post">
        <input type="text" name="ketik" id="" placeholder="Cari ..." autofocus="" autocomplate="off" size="100px">
        <button type="submit"name="cari">Cari</button>
    </form>
    <br>
    <a href="tambah.php">Tambah Alat Musik</a>
    <br>
    <table border=1 cellpadding="10" cellspacing="0">
        <tr>
            <td>No</td>
            <td>Id</td>
            <td>Gambar</td>
            <td>Nama</td>
            <td>Merek</td>
            <td>Harga</td>
            <td>Tahun</td>
            <td>Option</td>
        </tr>
<?php $no = 1; ?>
<?php foreach($alatmusik as $alat) : ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $alat['id']; ?></td>
            <td><img src="img/<?= $alat['gambar']; ?>" alt=""></td>
            <td><?= $alat['nama']; ?></td>
            <td><?= $alat['merek']; ?></td>
            <td><?= $alat['harga']; ?></td>
            <td><?= $alat['tahun']; ?></td>
            <td>
                <a href="ubah.php?id=<?= $alat['id']?>">Ubah</a>
                <a href="hapus.php?id=<?= $alat['id']?>" onclick="return confirm('yakin ?');">Hapus</a>
            </td>
        </tr>
        <?php $no++; ?>
<?php endforeach; ?>
    </table>
</body>
</html>