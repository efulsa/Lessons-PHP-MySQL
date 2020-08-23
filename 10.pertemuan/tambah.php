<?php
//koneksi
require 'functions.php';
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

if( tambah($_POST) > 0 )
{
    echo "Berhasil !";
    echo "
    <script>
        alert('Data Berhasil Ditambahkan !');
        document.location.href = 'index.php';
    </script>
    ";
}
else
{
    echo "Gagal !";
    echo "
    <script>
        alert('Data Gagal Ditambahkan !');
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
    <title>Tambah Alat Musik</title>
</head>
<body>
    <h1>Tambah Data Alat Musik</h1>

    <form action="" method="post">
        <ul>
         
                <input type="hidden" name="id" id="id">
  
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="number" name="harga" id="harga">
            </li>
            <li>
                <label for="merek">Merek :</label>
                <input type="text" name="merek" id="merek">
            </li>
            <li>
                <label for="tahun">Tahun :</label>
                <input type="number" name="tahun" id="tahun">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Sumbit</button>
            </li>
        </ul>
    </form>
</body>
</html>