<?php

session_start();

if(!isset($_SESSION['login']))
{
    header('location:login.php');
    exit;
}
require 'functions.php';

//pagination

//konfigurasi
$jumlahDataPerHalaman = 5;
// $result = mysqli_query($conn,"SELECT * FROM alat_musik");
// $jumlahData = mysqli_num_rows($result); //melihat jumlah data alat musik  //cara manuall
// var_dump($jumlahData);
$jumlahData = count(query("SELECT * FROM alat_musik")); //mengambil query dari function
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);

var_dump($jumlahHalaman);

// $hamlamanAktif = $_GET['halaman'];
// if(isset($_GET['halaman']))
// {
//     $hamlamanAktif = $_GET['halaman'];   //carra pertama
// }
// else{
//     $hamlamanAktif = 1;
// }

$halamanAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1; //ternari ,, ? = jika kondisinya true

$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;


$alatmusik = query("SELECT * FROM alat_musik LIMIT $awalData, $jumlahDataPerHalaman");



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
<br>
<a href="logout.php">Logout</a>
<br>

    <h1>Alat Musik</h1>
    <br>
    <form action="" method="post">
        <input type="text" name="ketik" id="" placeholder="Cari ..." autofocus="" autocomplate="off" size="63px">
        <button type="submit"name="cari">Cari</button>
    </form>
    <br>
<!-- navigasi pagination -->
<?php if($halamanAktif > 1) :?>
<a href="?halaman=<?= $halamanAktif - 1; ?>"> << </a>
<?php endif; ?>

<?php for($i =1; $i <= $jumlahHalaman; $i++) :?>
    <?php if($i == $halamanAktif) : ?>
        <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color:red;"><?= $i; ?></a>
    <?php else:?>
        <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
    <?php endif;?>
<?php endfor; ?>
<?php if($halamanAktif < $jumlahHalaman) :?>
<a href="?halaman=<?= $halamanAktif + 1; ?>"> >> </a>
<?php endif; ?>
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
            <td><img src="upload/<?= $alat['gambar']; ?>" alt=""></td>
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