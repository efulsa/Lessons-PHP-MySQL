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
// upload gambar

$gambar = upload(); //nama fungsi upload

if($gambar === false) //kalo yang dikirim gagal 
{
    return false; // mengecek error
}


$query = "INSERT INTO alat_musik
            VALUES
            (
                NULL,'$nama','$harga','$merek','$tahun','$gambar'
            )";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}

function upload()
{
    // return false;  // mengecek error return
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah gambar diupload 


    if( $error === 4) //4 artinya tidak ada gambar yang di upload
    {
        echo "
        <script>
            alert('pilih gambar terlebih dahulu ! ' );
        </script>
        ";

        return false;
    }

    // cek apakah yang di upload adalah gambar ??

    $ekstensiGambarValid = ['jpg','jpeg','png'];
    
    $ekstensiGambar = explode('.', $namaFile); //delimiter = pemisah contoh . //memecah string file yng di upload menjadi array contoh ['eful','jpg']
    $ekstensiGambar =  strtolower(end($ekstensiGambar)); // mengambil dari 1 , contoh ['eful','jpg'] =mengambil jpg nya saja jika nama file eful.anwar.jpg yang di ambil anwar maka harus pakai end dan str to lower untuk memeastika yang semua hurup kecil JPG
    
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)) //mencari adakah string di dalam array // kalau tidak ada
    {
        echo
        "
        <script>
            alert('yang anda upload bukan gambar cuk !');
        </script>
        ";
        return false;
    }
    // jika ukuran file terlalu besar
    if($ukuranFile > 1000000)
    {
        echo
        "
        <script>
            alert('ukurannya kecilan donk!');
        </script>
        ";
        return false;
    }
// mengganti nama file rendom agar tidak ada yang sama
$namaFileBaru = uniqid();
$namaFileBaru .= ".";
$namaFileBaru .= $ekstensiGambar;

    // jika sudah lolos pengecekan
    move_uploaded_file($tmpName, 'upload/' . $namaFileBaru);
    
        return $namaFileBaru;
    
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

    $gambarLama = $data['gambarLama'];
        //apakah gambar baru atau tidak ?
        if($_FILES['gambar']['error'] === 4)
        {
            $gambar = $gambarLama;
        }
        else
        {
            $gambar = upload();
        }

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