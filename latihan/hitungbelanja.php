<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h2>Hitung Total Belanja</h2>
    <form method="post">
        <label for="nama">Nama Pelanggan:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="harga">Harga Barang (pisahkan dengan koma):</label>
        <input type="text" id="harga" name="harga" required><br><br>
        <button type="submit">Hitung</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $harga_input = explode(',', $_POST['harga']);
        $daftar_harga = [];
        foreach ($harga_input as $harga) {
            $daftar_harga[] = (float) trim($harga);
        }
    
        echo "<h3>Nama Pelanggan: $nama</h3>";
        echo "<h4>Daftar Harga Barang:</h4><ul>";
        foreach ($daftar_harga as $idx => $harga) {
            echo "<li>Barang " . ($idx + 1) . ": Rp{$harga}</li>";
        }
        echo "</ul>";
        echo "<h3>Total Belanja: Rp" . array_sum($daftar_harga) . "</h3>";
    }
    ?>
</body>
</html>