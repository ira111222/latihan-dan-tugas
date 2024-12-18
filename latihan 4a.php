<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balon Warna</title>
    <style>
        .highlight {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <?php
    // Membuat array warna
    $warna = ["hijau", "kuning", "kelabu", "merah muda", "biru"];
    
    // Menampilkan teks dengan warna di dalam array yang di-highlight
    echo "<p>Balonku ada lima.<br>";
    echo "Rupa-rupa warnanya ";
    
    // Loop untuk menampilkan setiap warna dengan highlight
    foreach ($warna as $index => $value) {
        echo "<span class='highlight'>$value</span>";
        if ($index < count($warna) - 1) {
            echo ", ";
        }
    }

    echo " dan <span class='highlight'>hijau</span>.<br>";
    echo "Meletus balon <span class='highlight'>hijau</span> DOR!!!<br>";
    echo "Hatiku sangat kacau.</p>";
    ?>
</body>
</html>