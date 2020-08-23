<?php

// Array
// variabel yang dapat menampung banyak nilai
// elemen pada Array boleh memiliki tipe data berbeda
// Membuat Array
// Cara lama

// $namaHari = array("Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu","Minggu");

// Cara Baru

$namaHari = ["Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu","Minggu"];
$campur = ["aku",1,"adalah",1];

// Menampilkan Array
// var_dump()
// print_r()

// var_dump($namaHari,$campur);
// print_r($namaHari);

// Menampilkan 1 elemen pada array

// echo $namaHari[3];

// Menambahkan elemen baru pada array
$namaHari[] = "Kamis";
$namaHari[] = "Kamis";
echo "<br>";

var_dump($namaHari);
?>