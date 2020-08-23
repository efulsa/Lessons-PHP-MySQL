<?php
// $mahasiswa =
// [
//     ["Saeful Anwar","D11161061","Teknik Informatika","saeful@gmail.com"],
//     ["Kiki Somantav","D11161461","Teknik Farmasi","kiki@gmail.com"],
//     ["Kabulin Jathura","D11164361","Teknik Rekaman","kabulin@gmail.com"],
//     ["D11164363","Ary Lesmana","Teknik Rekaman","kabulin@gmail.com"],
// ];

// Array Associative
// Key-nya  adalah  string yang kita buat sendiri

$mahasiswa =
[
    [
        "nama" => "Saeful Anwar",
        "nim" => "D11161061",
        "jurusan" => "Teknik Informatika",
        "email" => "saeful@gmail.com",
        "gambar" => "contoh.png"
    ],
    [
        "nama" => "Kiki Somantav",
        "nim" => "D11161461",
        "jurusan" => "Teknik Farmasi",
        "email" => "kiki@gmail.com",
        "gambar" => "contoh.png"
    ],
    [
        "nim" => "D11164363",
        "nama" => "Ary Lesmana",
        "jurusan" => "Teknik Rekaman",
        "email" => "kabulin@gmail.com",
        "tugas" => [80,50,40],
        "gambar" => "contoh.png"
    ]

];
?>

<?php echo $mahasiswa[2]["tugas"][1]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
    <style>
        img
        {
            width: 150px;
            height: 100px;
        }
    </style>
</head>
<body>
<h1>Daftar Mahaiswa</h1>
<?php foreach($mahasiswa as $mhs) : ?>
    <ul>
    <img src="img/<?= $mhs[gambar]; ?>" alt="">
        <li>Nama : <?= $mhs[nama]; ?></li>
        <li>NIM : <?= $mhs[nim]; ?></li>
        <li>Jurusan : <?= $mhs[jurusan]; ?></li>
        <li>Email : <?= $mhs[email]; ?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>