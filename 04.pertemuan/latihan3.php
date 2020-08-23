<?php
// Array Numerik
$mahasiswa =
[
    ["Saeful Anwar","D11161061","Teknik Informatika","saeful@gmail.com"],
    ["Kabul Jathura","D1116284","Teknik Farmasi","kabulin@gmail.com"],
    ["Kiki Somantav","D2355646","Teknik Gatau","kiki@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
    
        <li>Nama : <?= $mhs[0] ?></li>
        <li>Nim : <?= $mhs[1] ?></li>
        <li>Jurusan : <?= $mhs[2] ?></li>
        <li>Email : <?= $mhs[3] ?></li>
        <br>
    
    </ul>
    <?php endforeach; ?>
</body>
</html>