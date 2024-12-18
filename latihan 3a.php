<?php
function ganti_style($tulisan, $kelas) {
  return "<span class='$kelas'>$tulisan</span>";
}

$tulisan = "Hello World! Here I come!";
$kelas = 'ganti-style';

echo ganti_style($tulisan, $kelas);
?>