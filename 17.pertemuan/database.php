<?php
$host = "localhost";
$user = "root";
$password = "123456";
$database = "tokomusik";

$conn = mysqli_connect($host,$user,$password,$database);

if (!$conn)
{
    $error = mysqli_error($conn);

    echo "database gagal terkoneksi";
}

?>