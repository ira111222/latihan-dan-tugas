<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Modul 2 - Latihan 1</title>
</head>
<body>
<?php
$baris = 15;
$kolom = 5;

echo "<table border='1' cellpadding='3' cellspacing='0'>";
for ($i = 1; $i <= $baris; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $kolom; $j++) {
        echo "<th>Kolom $j</th>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>