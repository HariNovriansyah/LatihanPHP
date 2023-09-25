<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>

<body>
    <h1>Belajar menjalankan kode html dan php dengan xampp</h1>
    <?php
    echo "teks ini berasal dari PHP";

    echo "<ol>";
    echo "<li>list pertama</li>";
    echo "<li>list kedua</li>";
    echo "<li>list ketiga</li>";
    echo "</ol>";

    $nama = "Hari Novriansyah";
    $umur = "21 tahun";
    $alamat = "Sumbawa Barat";

    echo "nama saya " . $nama . "<br>";
    echo "Umur saya " . $umur . "<br>";
    echo "Alamat saya " . $alamat . "<br>";

    $number = 1234567890;
    $string = "ini type string ";
    $boleanTrue = true;
    $boleanfalse = false;

    echo "ini type data number " . $number . "<br>";
    echo "ini type data string " . $string . "<br>";
    echo "ini type data boleanTrue " . $boleanTrue . "<br>";
    echo "ini type data boleanFalse " . $boleanfalse . "<br>";
    ?>
</body>

</html>