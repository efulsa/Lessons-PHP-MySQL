<?php

include 'database.php';

function query($query)

{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
    }

    return $rows;
}



function tambah($data)
{
global $conn;


$nama = $data['nama'];
$harga = $data['harga'];
$merek = $data['merek'];
$tahun = $data['tahun'];
$gambar = $data['gambar'];

$query = "INSERT INTO alat_musik
            VALUES
            (
                NULL,'$nama','$harga','$merek','$tahun','$gambar'
            )";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}


function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM alat_musik WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    global $conn;
    
    $id = $data['id'];
    $nama = $data['nama'];
    $harga = $data['harga'];
    $merek = $data['merek'];
    $tahun = $data['tahun'];
    $gambar = $data['gambar'];

$query = "UPDATE alat_musik
            SET
                id = '$id',
                nama = '$nama',
                harga = '$harga',
                merek = '$merek',
                tahun = '$tahun',
                gambar = '$gambar'
            WHERE id = $id
            ";
            
        mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}


function cari($ketik)
{
    $query = "SELECT * FROM alat_musik WHERE
                nama LIKE '%$ketik%' OR
                harga LIKE '%$ketik%' OR
                merek LIKE '%$ketik%' OR
                tahun LIKE '%$ketik%'
                ";
    return query($query);
}
?>