<?php
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$mahasiswa = [
    [
        "nama" => "Sultoni Rahman",
        "npm" => "123456",
        "jurusan" => "Teknik Informatika",
        "email" => "sultonirahman85@gmail.com"
    ],
    [
        "nama" => "Warno Suparno",
        "npm" => "123456",
        "jurusan" => "Kedokteran",
        "email" => "suparnowarno232@gmail.com"
    ],
    [
        "nama" => "Egi Aditya Ramdani",
        "npm" => "123456",
        "jurusan" => "Teknik Sipil",
        "email" => "adityaegi@gmail.com"
    ],
    [
        "nama" => "Akwal Yuspa",
        "npm" => "123456",
        "jurusan" => "Teknik Informatika",
        "email" => "akwalyuspa32@gmail.com"
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
    <style>
        .clear {
            clear: both;
        }

        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["npm"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>

    <div class="clear"></div>

    <?php foreach ($angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>


</body>

</html>