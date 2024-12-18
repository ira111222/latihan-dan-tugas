<?php
function pangkat($angka, $pangkat) {
    $hasil = 1;
    for ($i = 1; $i <= $pangkat; $i++) {
        $hasil *= $angka;
    }
    return $hasil;
}

// Contoh penggunaan
$angka = 5;
$pangkat = 4;
$hasil = pangkat($angka, $pangkat);

echo "$angka pangkat $pangkat = $hasil";
?>