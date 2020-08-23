<?php

session_start();

if(!isset($_SESSION['login']))
{
    header('location:login.php');
    exit;
}

require 'functions.php';
//ambil id

$id = $_GET["id"];

if(hapus($id) > 0)
{
    echo "Berhasil Dihapus !";
    echo "
    <script>
        alert('Data Berhasil Dihapus !');
        document.location.href = 'index.php';
    </script>
    ";
}
else
{
    echo "Gagal Dihapus !";
    echo "
    <script>
        alert('Data Gagal Dihapus !');
        document.location.href = 'index.php';
    </script>
    ";
}
?>