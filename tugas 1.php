<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Bilangan</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>Angka</th>
        <th>Jenis</th>
    </tr>

    <?php
    // Function to check if a number is prime
    function is_prime($number) {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    // Loop through numbers 1 to 19
    for ($i = 1; $i <= 19; $i++) {
        // Check if the number is odd or even
        if ($i % 2 == 0) {
            $type = "Genap";
        } else {
            $type = "Ganjil";
        }

        // Check if the number is prime
        if (is_prime($i)) {
            $type .= " (Prima)";
        }

        // Print the result in table row
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>$type</td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>