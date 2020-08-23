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
$id = htmlspecialchar($data['id']);
$nama = htmlspecialchar($data['nama']);
$harga = htmlspecialchar($data['harga']);
$merek = htmlspecialchar($data['merek']);
$tahun = htmlspecialchar($data['tahun']);
$gambar = htmlspecialchar($data['gambar']);

$query = "INSERT INTO alat_musik
            VALUES
            (
                '$id','$nama','$harga','$merek','$tahun','$gambar
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

?>