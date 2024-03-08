<?php

// 1. Membuat Array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$mahasiswa = ["Moreno",3.1, false];




// 2. Mencetak Isi Array
// Memcetak satu nilai pada array, menggunakan index.
// Index dimulai dari 0.
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mahasiswa[1];
echo "<hr>";

// Cetak semua isi array
// var_dump() atau print_r()
// digunakan saat debugging

var_dump ($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mahasiswa);
echo "<hr>";




// Memanipulasi Isi Array
// Menambah isi array
// di akhir [] atau array_push()
$hari[] = "Kamis";
$hari[]= "Jumat";
print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei");
print_r($bulan);
echo "<br>";


// Di awal: array_unshsift()
array_unshift($mahasiswa, "233040035");
print_r($mahasiswa);
echo "<hr>";




// Menghapus isi array

// Dibelakang: Array_pop();
// Didepan: Array_shift();

array_pop($hari);
array_shift($bulan);
print_r($hari);
echo "<br>";
print_r($bulan);