<?php
//koneksi
require 'functions.php';

//ambil id dari url get

$id = $_GET["id"];

//query data berdasarkan id

$alatmusik = query("SELECT * FROM alat_musik WHERE id = $id")[0];

// $conn = mysqli_connect("localhost","root","123456","tokomusik");
//cek apakah submit sudah pernah dipencet?

if(isset($_POST[submit]))
{
//ambil data dari tiap elemen submit

// $id = $_POST['id'];
// $nama = $_POST['nama'];
// $harga = $_POST['harga'];
// $merek = $_POST['merek'];
// $tahun = $_POST['tahun'];
// $gambar = $_POST['gambar'];

//query insert data
// $query = "INSERT INTO alat_musik
//             VALUES
//             (
//                 '$id','$nama','$harga','$merek','$tahun','$gambar'
//             )";

// mysqli_query($conn, $query);
//cek apakah data berhasil di tambah ?
// if( mysqli_affected_rows($conn) > 0)
// {
//     echo "berhasil !";
// }
// else
// {
//     echo "gagal !";
//     echo "<br";
//     echo mysqli_error($conn);
// }

if( ubah($_POST) > 0 )
{
    echo "Berhasil !";
    echo "
    <script>
        alert('Data Berhasil Diubah !');
        document.location.href = 'index.php';
    </script>
    ";
}
else
{
    echo "Gagal !";
    echo "
    <script>
        alert('Data Gagal Diubah !');
        document.location.href = 'index.php';
    </script>
    ";
}


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Alat Musik</title>
</head>
<body>
    <h1>Tambah Data Alat Ubah</h1>

    <form action="" method="post">
        <ul>
            <li>
                <input type="hidden" name="id" require id="id" value="<?= $alatmusik['id']; ?>">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" require id="nama" value="<?= $alatmusik['nama']; ?>">
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="number" name="harga" require id="harga" value="<?= $alatmusik['harga']; ?>">
            </li>
            <li>
                <label for="merek">Merek :</label>
                <input type="text" name="merek" require id="merek" value="<?= $alatmusik['merek']; ?>">
            </li>
            <li>
                <label for="tahun">Tahun :</label>
                <input type="number" name="tahun" require id="tahun" value="<?= $alatmusik['tahun']; ?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="file" name="gambar" require id="gambar" value="<?= $alatmusik['gambar']; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Sumbit</button>
            </li>
        </ul>
    </form>
</body>
</html>