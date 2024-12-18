<?php
// Penjelasan fungsi isset()
$var1 = "Hello";
$var2 = null;

echo "Contoh isset():\n";
echo isset($var1) ? "var1 sudah diatur dan tidak NULL\n" : "var1 tidak diatur atau NULL\n";
echo isset($var2) ? "var2 sudah diatur dan tidak NULL\n" : "var2 tidak diatur atau NULL\n";
echo isset($var3) ? "var3 sudah diatur dan tidak NULL\n" : "var3 tidak diatur atau NULL\n"; // var3 belum didefinisikan

echo "\n";

// Penjelasan fungsi empty()
$var4 = 0;
$var5 = "";

echo "Contoh empty():\n";
echo empty($var4) ? "var4 kosong\n" : "var4 tidak kosong\n";
echo empty($var5) ? "var5 kosong\n" : "var5 tidak kosong\n";
echo empty($var6) ? "var6 kosong\n" : "var6 tidak kosong\n"; // var6 belum didefinisikan
?>