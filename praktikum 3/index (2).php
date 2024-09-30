<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3</title>
</head>
<body>
    <div class="fs-45">
        <?php
        include "visibility.php";

        $visibility = new visibility();
        $visibility->tampilkanData();

        echo "<br>";

        echo "Akses didalam Kelas <br>";
        echo "Public" . $visibility->public . "<br>";
        // echo "Private" . $visibility->private . "<br>";
        // echo "Protected" . $visibility->protected . "<br>";
        echo "<br> <br>";
        echo "<h2> Konsep Pewarisan </h2>";

        include "mahasiswa.php";

        $mahasiswa = new mahasiswa(" Erika");
        $mahasiswa->ucapSalam();

        $mahasiswaInggris = new mahasiswaAsing(" Jeje");
        $mahasiswaInggris->ucapSalam();


        ?>
    </div>
    
</body>
</html>