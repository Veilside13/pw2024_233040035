<?php 

$nama_depan = "Moreno";
$nama_belakang = "Daffa"; 

for ($i = 1; $i <= 100; $i ++) {
    //Jika habis dibagi 3 dan 5
    if ($i % 3 == 0 && $i %5 == 0) {
        echo $nama_depan . " " . $nama_belakang . "<br>";
        //Jika habis dibagi 3
    } elseif ($i % 3 == 0) {
        echo $nama_depan .  "<br>" ;
        //Jika habis dibagi 5
    } elseif ($i % 5 == 0) {
        echo $nama_belakang . "<br>";
    } else {
        echo $i . "<br>git";
    }
}