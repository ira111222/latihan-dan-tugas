<?php

$negara_asean = array(
    "Indonesia",
    "Singapura",
    "Malaysia",
    "Brunei",
    "Thailand"
);

// Menampilkan array dalam bentuk list HTML
echo "Daftar Negara ASEAN awal <ul>";
foreach ($negara_asean as $negara) {
    echo "<li>" . $negara . "</li>";
}
echo "</ul>";

// Menambahkan elemen baru ke array
$negara_asean[] = "Laos";
$negara_asean[] = "Filipina";
$negara_asean[] = "Myanmar";

// Menampilkan array baru dalam bentuk list HTML
echo "Daftar Neagara ASEAN baru <ul>";
foreach ($negara_asean as $negara) {
    echo "<li>" . $negara . "</li>";
}
echo "</ul>";

?>