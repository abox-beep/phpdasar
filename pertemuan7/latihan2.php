<?php
// if (
//     !isset($_GET['nama']) ||
//     !isset($_GET['nrp']) ||
//     !isset($_GET['email']) ||
//     !isset($_GET['jurusan']) ||
//     !isset($_GET['gambar'])
// ) {
//     //redirect
//     header("Location: latihan.php");
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>

    <ul>
        <li>
            <img src="img/<?= $_GET['gambar']; ?>" alt="" width="70px">
        </li>
        <li><?= $_GET['nama']; ?></li>
        <li><?= $_GET['npm']; ?></li>
        <li><?= $_GET['email']; ?></li>
        <li><?= $_GET['jurusan']; ?></li>
    </ul>

    <a href="latihan.php">Back to Latihan1</a>

</body>

</html>