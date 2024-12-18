<?php

// Mengubah array biasa menjadi associative array
$negara = array (
    "Indonesia",
    "Singapura",
    "Malaysia",
    "Brunei",
    "Thailand",
    "Laos",
    "Filipina",
    "Myanmar",
);

$ibukota = array (
    "D.K.I. Jakarta",
    "Singapura",
    "Kuala Lumpur",
    "Bandar Seri Begawan",
    "Bangkok",
    "Vientiane",
    "Manila",
    "Naypyidaw",
);

// Mengubah array menjadi associative array
$asean = array_combine($negara, $ibukota);

// Menampilkan hasil menggunakan foreach
echo "Daftar Negara ASEAN dan Ibukota : <br>";
foreach ($asean as $negara => $ibukota) {
    echo "• " . $negara . ": " . $ibukota . "<br>";
}

?>