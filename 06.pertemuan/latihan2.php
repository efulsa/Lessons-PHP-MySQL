<?php
// Mengecek data yang dikirm apakan ada ? di _GET

if
(
    !isset($_GET["nama"]) ||
    !isset($_GET["harga"]) ||
    !isset($_GET["merek"]) ||
    !isset($_GET["tahun"]) ||
    !isset($_GET["gambar"])
)// mengecek apakah udah dibikin belum ?? apakah _GET belum pernah dibikin / di set ?
{
 //pindahkan redirect
    header("location: latihan1.php");
    exit;
} 
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Alat Musik</title>
</head>
<body>
    <ul>
        <img src="img/<?= $_GET[gambar]; ?>" alt="">
        <li>Nama : <?= $_GET[nama]; ?> </li>
        <li>Harga : <?= $_GET[harga]; ?> </li>
        <li>Merek : <?= $_GET[merek]; ?> </li>
        <li>Tahun : <?= $_GET[tahun]; ?> </li>
    </ul>
<a href="latihan1.php">Kembali</a>
</body>
</html>