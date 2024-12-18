<?php
// Tentukan tiga digit terakhir NRP
$nrp = 12345; // Ganti dengan NRP Anda
$kategori = $nrp % 5;

// Buat data berdasarkan kategori
$data = [];
switch ($kategori) {
    case 1:
        $judul = "Budaya Daerah di Indonesia";
        $data = [
            ["Nama" => "Tari Saman", "Daerah" => "Aceh", "Jenis" => "Tarian", "Deskripsi" => "Tarian tradisional Aceh", "Gambar" => "saman.jpg"],
            ["Nama" => "Angklung", "Daerah" => "Jawa Barat", "Jenis" => "Alat Musik", "Deskripsi" => "Alat musik tradisional", "Gambar" => "angklung.jpg"],
            ["Nama" => "Batik", "Daerah" => "Jawa", "Jenis" => "Pakaian", "Deskripsi" => "Kain tradisional Indonesia", "Gambar" => "batik.jpg"],
            ["Nama" => "Tor-Tor", "Daerah" => "Batak", "Jenis" => "Tarian", "Deskripsi" => "Tarian tradisional Batak", "Gambar" => "tor-tor.jpg"],
            ["Nama" => "Reog", "Daerah" => "Ponorogo", "Jenis" => "Tarian", "Deskripsi" => "Tarian khas Ponorogo", "Gambar" => "reog.jpg"],
        ];
        break;
    case 2:
        $judul = "Penemu-Penemu Terkenal di Dunia";
        $data = [
            ["Nama" => "Albert Einstein", "Bidang" => "Fisika", "Penemuan" => "Relativitas", "Negara" => "Jerman", "Gambar" => "einstein.jpg"],
            ["Nama" => "Thomas Edison", "Bidang" => "Teknologi", "Penemuan" => "Lampu Pijar", "Negara" => "Amerika", "Gambar" => "edison.jpg"],
            ["Nama" => "Marie Curie", "Bidang" => "Kimia", "Penemuan" => "Radioaktivitas", "Negara" => "Polandia", "Gambar" => "curie.jpg"],
            ["Nama" => "Alexander Graham Bell", "Bidang" => "Teknologi", "Penemuan" => "Telepon", "Negara" => "Skotlandia", "Gambar" => "bell.jpg"],
            ["Nama" => "Isaac Newton", "Bidang" => "Fisika", "Penemuan" => "Hukum Gravitasi", "Negara" => "Inggris", "Gambar" => "newton.jpg"],
        ];
        break;
    case 3:
        $judul = "Flora dan Fauna Terancam Punah";
        $data = [
            ["Nama" => "Harimau Sumatra", "Jenis" => "Fauna", "Habitat" => "Sumatra", "Status" => "Terancam Punah", "Gambar" => "harimau.jpg"],
            ["Nama" => "Orangutan", "Jenis" => "Fauna", "Habitat" => "Kalimantan", "Status" => "Terancam Punah", "Gambar" => "orangutan.jpg"],
            ["Nama" => "Rafflesia Arnoldii", "Jenis" => "Flora", "Habitat" => "Sumatra", "Status" => "Langka", "Gambar" => "rafflesia.jpg"],
            ["Nama" => "Elang Jawa", "Jenis" => "Fauna", "Habitat" => "Jawa", "Status" => "Terancam Punah", "Gambar" => "elang.jpg"],
            ["Nama" => "Komodo", "Jenis" => "Fauna", "Habitat" => "Komodo", "Status" => "Langka", "Gambar" => "komodo.jpg"],
        ];
        break;
    case 4:
        $judul = "Pahlawan Nasional Indonesia";
        $data = [
            ["Nama" => "Soekarno", "Peran" => "Proklamator", "Asal" => "Blitar", "Tahun" => "1901-1970", "Gambar" => "soekarno.jpg"],
            ["Nama" => "Kartini", "Peran" => "Emansipasi Wanita", "Asal" => "Jepara", "Tahun" => "1879-1904", "Gambar" => "kartini.jpg"],
            ["Nama" => "Diponegoro", "Peran" => "Pahlawan Perang Jawa", "Asal" => "Yogyakarta", "Tahun" => "1785-1855", "Gambar" => "diponegoro.jpg"],
            ["Nama" => "Cut Nyak Dien", "Peran" => "Pejuang Aceh", "Asal" => "Aceh", "Tahun" => "1848-1908", "Gambar" => "cutnyak.jpg"],
            ["Nama" => "Pangeran Antasari", "Peran" => "Pahlawan Kalimantan", "Asal" => "Kalimantan", "Tahun" => "1797-1862", "Gambar" => "antasari.jpg"],
        ];
        break;
    case 0:
        $judul = "Perusahaan Teknologi";
        $data = [
            ["Nama" => "Apple", "Pendiri" => "Steve Jobs", "Tahun" => "1976", "Negara" => "Amerika", "Gambar" => "apple.jpg"],
            ["Nama" => "Microsoft", "Pendiri" => "Bill Gates", "Tahun" => "1975", "Negara" => "Amerika", "Gambar" => "microsoft.jpg"],
            ["Nama" => "Google", "Pendiri" => "Larry Page", "Tahun" => "1998", "Negara" => "Amerika", "Gambar" => "google.jpg"],
            ["Nama" => "Tesla", "Pendiri" => "Elon Musk", "Tahun" => "2003", "Negara" => "Amerika", "Gambar" => "tesla.jpg"],
            ["Nama" => "Samsung", "Pendiri" => "Lee Byung-chul", "Tahun" => "1938", "Negara" => "Korea Selatan", "Gambar" => "samsung.jpg"],
        ];
        break;
}

// Tampilkan data dalam tabel
echo "<h1>$judul</h1>";
echo "<table border='1'>";
echo "<tr>";
foreach (array_keys($data[0]) as $header) {
    echo "<th>$header</th>";
}
echo "</tr>";

foreach ($data as $item) {
    echo "<tr>";
    foreach ($item as $key => $value) {
        if ($key == "Gambar") {
            echo "<td><img src='$value' alt='$value' width='100'></td>";
        } else {
            echo "<td>$value</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>