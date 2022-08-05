<?php
//variabel scope / lingkup variabel
//variabel super global
//variabel global milik php
//merupakan array associative
// $x = 10;

// function tampilX()
// {
//     global $x;
//     echo $x;
// }

// tampilX();

// var_dump($_SERVER);
// echo "</br>";
// echo $_SERVER["SERVER_NAME"];

//$_GET
$mahasiswa = [
    [
        "nama" => "Sultoni Rahman",
        "npm" => "123456",
        "jurusan" => "Teknik Informatika",
        "email" => "sultonirahman85@gmail.com",
        "gambar" => "1.png"
    ],
    [
        "nama" => "Warno Suparno",
        "npm" => "789101112",
        "jurusan" => "Kedokteran",
        "email" => "suparnowarno232@gmail.com",
        "gambar" => "2.png"
    ],
    [
        "nama" => "Egi Aditya Ramdani",
        "npm" => "123456",
        "jurusan" => "Teknik Sipil",
        "email" => "adityaegi@gmail.com",
        "gambar" => "3.png"
    ],
    [
        "nama" => "Akwal Yuspa",
        "npm" => "123456",
        "jurusan" => "Teknik Informatika",
        "email" => "akwalyuspa32@gmail.com",
        "gambar" => "4.png"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan $_GET</title>
</head>

<body>
    <h1>Latihan GET REQUEST</h1>


    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs['nama']; ?>&npm=<?= $mhs['npm']; ?>&email=<?= $mhs['email']; ?>&jurusan=<?= $mhs['jurusan']; ?>&gambar=<?= $mhs['gambar']; ?>"><?= $mhs['nama']; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>


</body>

</html>