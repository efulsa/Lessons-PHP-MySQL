<?php
//koneksi
require 'functions.php';

//ambil id dari url get





$id = $_GET["id"];
$alat = query("SELECT * FROM alat_musik WHERE id = $id")[0];
//query data berdasarkan id
// $conn = mysqli_connect("localhost","root","123456","tokomusik");
//cek apakah submit sudah pernah dipencet?


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
if(isset($_POST['submit']))
{
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

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
        <input type="hidden" name="id" value="<?= $alat['id']; ?>">
        <input type="hidden" name="gambarLama" value="<?= $alat['gambar']; ?>">
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama"  id="nama" value="<?= $alat['nama']; ?>">
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="number" name="harga"  id="harga" value="<?= $alat['harga']; ?>">
            </li>
            <li>
                <label for="merek">Merek :</label>
                <input type="text" name="merek"  id="merek" value="<?= $alat['merek']; ?>">
            </li>
            <li>
                <label for="tahun">Tahun :</label>
                <input type="number" name="tahun"  id="tahun" value="<?= $alat['tahun']; ?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <img src="upload/<?= $alat['gambar']; ?>" alt="">
                <input type="file" name="gambar"  id="gambar" value="<?= $alat['gambar']; ?>">
                
                
            </li>
            <li>
                <button type="submit" name="submit">Sumbit</button>
            </li>
        </ul>
    </form>
</body>
</html>