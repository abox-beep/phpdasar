<?php
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
        "npm" => "123456",
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
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NPM : <?= $mhs["npm"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>