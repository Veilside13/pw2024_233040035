<?php
//SISI KUBUS A = 9, SISI KUBUS B = 4
//HITUNG TOTAL VOLUME KEDUA KUBUS
// $sisi_a = 9;
// $sisi_b = 4;
// $volume_a = $sisi_a * $sisi_a * $sisi_a;
// $volume_b = $sisi_b * $sisi_b * $sisi_b;
// $total = $volume_a + $volume_b;
// echo "Total Volume Kubus A Dan B Adalah = $total";
// echo "<br>";



// $sisi_c = 10;
// $sisi_d = 15;
// $volume_c = $sisi_c * $sisi_c * $sisi_c;
// $volume_d = $sisi_d * $sisi_d * $sisi_d;
// $total = $volume_c + $volume_d;
// echo "Total Volume Kubus C Dan D Adalah = $total";


function total_volume_dua_kubus($a, $b) {
    $volume_a = $a * $a * $a;
    $volume_b = $b * $b * $b;

    $total = $volume_a + $volume_b;

    return $total;
}


