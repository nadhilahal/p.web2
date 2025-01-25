<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link rel="icon" type="image/x-icon" href="style/image/bg.png" />

    <!-- style -->
    <link rel="stylesheet" href="style/biodata.css" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />

    <!-- icons -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <marquee behavior="alternate">Welcome to my page!</marquee>
    <section class="main">
        <div class="image">
            <img src="style/image/profile5.png">
        </div>
        <div>
            <div class="bio">
                <h1>Biodata</h1>
                <?php
                    $nama = "Nadhilah Al Adawiyah";
                    $nim = "09031282328061";
                    $kelas = "SIREG 4B";
                    $jurusan = "Sistem Informasi";
                    $hobi = "Menggambar";

                    echo "<table>";
                    echo "<tr><td>Nama </td><td>: " . $nama. "</td></tr>";
                    echo "<tr><td>NIM </td><td>: " . $nim. "</td></tr>";
                    echo "<tr><td>Kelas </td><td>: ". $kelas."</td></tr>";
                    echo "<tr><td>Jurusan </td><td>: ". $jurusan. "</td></tr>";
                    echo "<tr><td>Hobi </td><td>: ". $hobi. "</td></tr>";
                    echo "</table>";
                ?>
                <div class="cnt">Contact</div>
                <div class="contact">
                <a href="mailto:nadhilah0216@gmail.com">
                    <i data-feather="mail"></i>
                    <p>nadhilah0216@gmail.com</p>
                </a>
                <a href="https://instagram.com/ndlladw_">
                    <i data-feather="instagram"></i>
                    <p>@ndlladw_</p>
                </a>
                <a href="https://linkedin.com/in/nadhilah-al-adawiyah">
                    <i data-feather="linkedin"></i>
                    <p>linkedin/nadhilah</p>
                </a>
                </div>
            </div>
            <div class="materi">
                <h1>Latihan Prak. Pemrograman Web II </h1>
                <div class="row">
                    <a href="latihan/latihanprak.php">
                        <p>Biodata</p>
                    </a>
                    <a href="latihan/hitungharga.php">
                        <p>Hitung Harga</p>
                    </a>
                    <a href="latihan/lingkaran.php">
                        <p>Lingkaran</p>
                    </a>
                    <a href="latihan/kubus.php">
                        <p>Kubus</p>
                    </a>
                    <a href="latihan/marquee.php">
                        <p>Marquee</p>
                    </a>
                    <a href="latihan/hitungbelanja.php">
                        <p>Hitung Belanja</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- icons -->
    <script>
      feather.replace();
    </script>
</body>
</html>