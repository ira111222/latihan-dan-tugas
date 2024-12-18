<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Harga Barang</title>
</head>
<body>
    <h2>Tabel Harga Barang</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Produk</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
        <?php
        // Daftar barang
        $barang = [
            ["id" => 1, "produk" => "Buavita", "stok" => 30, "harga" => 7890],
            ["id" => 2, "produk" => "Bango", "stok" => 21, "harga" => 21890],
            ["id" => 3, "produk" => "Sariwangi", "stok" => 10, "harga" => 9990],
            ["id" => 4, "produk" => "Shampo Baby", "stok" => 20, "harga" => 20000],
            ["id" => 5, "produk" => "Bedak", "stok" => 15, "harga" => 15000],
            ["id" => 6, "produk" => "Baju Bayi", "stok" => 20, "harga" => 35500],
            ["id" => 7, "produk" => "Jumper", "stok" => 25, "harga" => 50000]
        ];

        $total = 0;

        foreach ($barang as $item) {
            $jumlah = $item['stok'] * $item['harga'];
            $total += $jumlah;
            echo "<tr>
                <td>{$item['id']}</td>
                <td>{$item['produk']}</td>
                <td>{$item['stok']}</td>
                <td>" . number_format($item['harga'], 0, ',', '.') . "</td>
                <td>" . number_format($jumlah, 0, ',', '.') . "</td>
            </tr>";
        }

        // Menentukan diskon
        $diskon = 0;
        if ($total >= 250000) {
            $diskon = ($total >= 300000) ? 0.25 : 0.1;
        }
        $totalSetelahDiskon = $total * (1 - $diskon);
        ?>
    </table>

    <h3>Total: Rp <?php echo number_format($total, 0, ',', '.'); ?></h3>
    <h3>Diskon: <?php echo $diskon * 100; ?>%</h3>
    <h3>Total Setelah Diskon: Rp <?php echo number_format($totalSetelahDiskon, 0, ',', '.'); ?></h3>
</body>
</html>