<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 4</title>
</head>
<body>
    <h1>Konsep Pewarisan</h1>
    <div class="">
        <?php
            require_once "OrangBiasa.php";
            require_once "OrangInggris.php";
            require_once "Mahasiswa.php";

            $nadia = new OrangBiasa();
            $nadia->setNama('Putri Yani Anjali');
            $nadia->ucapSalam();

            echo "<br>";

            $james = new OrangInggris();
            $james->setNama("James William");
            $james->ucapSalam();

            echo "<br>";

            $mahasiswa = new Mahasiswa();
            $mahasiswa->setNama("Jeje Lucy");
            $mahasiswa->setNim(701230053);

            $nilaiMahasiswa = new Nilai();
            $nilaiMahasiswa->setTugas(70);
            $nilaiMahasiswa->setUts(67);
            $nilaiMahasiswa->setUas(90);

            $mahasiswa->setNilai($nilaiMahasiswa);

            $mahasiswa->ucapSalam();
            $mahasiswa->tampilkanData();

        ?>
    </div>
</body>
</html>