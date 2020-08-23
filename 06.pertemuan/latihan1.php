<?php
// Variabel Scope / lingkup variable
// Variable global
// $x = 10;

// function tampilX()
// {
//     global $x; // mencari keluar function
//     echo $x;
// }

// tampilX();

// Variable SuperGlobal

// var_dump($_GET);
// var_dump($_POST);
// var_dump($_SERVER);
// echo "$_SERVER[SERVER_NAME]";

//$_GET

// $_GET["nama"] = "Saeful Anwar";
// $_GET["nim"] = "D11161061";
// $_GET["jurusan"] = "Teknik Informatika";
// $_GET["email"] = "saeful@gmali.com";

// http://localhost:8000/06.pertemuan/latihan1.php?nama=Saeful%20Anwar
// http://localhost:8000/06.pertemuan/latihan1.php?nama=Saeful%20Anwar&nim=D11161061

// var_dump($_GET);
//----------------------------------------------------------------------------------------------------------------------------

$alatMusik =
[
    [
        "nama" => "accordion",
        "harga" => 1000000,
        "merek" => "Yamaha",
        "tahun" => 1899,
        "gambar" => "accordion.jpg"
    ],
    [
        "nama" => "Angklung",
        "harga" => 200000,
        "merek" => "Hondang",
        "tahun" => 1989,
        "gambar" => "Angklung.jpg"
    ],
    [
        "nama" => "aramba",
        "harga" => 3100000,
        "merek" => "Garit",
        "tahun" => 1324,
        "gambar" => "aramba.jpg"
    ],
]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET</title>
    <style>
    img
    {
        width: 100px;
        height: 100px;
    }
    </style>
</head>
<body>
    <h1>Alat Musik</h1>

    <ul>
    <?php foreach($alatMusik as $alat) : ?>
        <li>
            <a href="latihan2.php?nama=<?=$alat[nama];?>&harga=<?=$alat[harga];?>&merek=<?=$alat[merek];?>&tahun=<?=$alat[tahun];?>&gambar=<?=$alat[gambar];?>"> <?= $alat[nama]; ?> </a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>