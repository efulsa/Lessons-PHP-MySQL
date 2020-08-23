<?php
require 'functions.php';

$alatmusik = query('SELECT * FROM alat_musik');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Musik</title>
</head>
<body>
    <h1>Alat Musik</h1>
    <table border=1 cellpadding="10" cellspacing="0">
        <tr>
            <td>Id</td>
            <td>Gambar</td>
            <td>Nama</td>
            <td>Merek</td>
            <td>Harga</td>
            <td>Tahun</td>
            <td>Option</td>
        </tr>
<?php foreach($alatmusik as $alat) : ?>
        <tr>
            <td><?= $alat['id']; ?></td>
            <td><img src="img/<?= $alat['gambar']; ?>" alt=""></td>
            <td><?= $alat['nama']; ?></td>
            <td><?= $alat['merek']; ?></td>
            <td><?= $alat['harga']; ?></td>
            <td><?= $alat['tahun']; ?></td>
            <td></td>
        </tr>
<?php endforeach; ?>
    </table>
</body>
</html>