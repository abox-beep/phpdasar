<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Method POST</title>
</head>

<body>
    <?php if (isset($_POST['nama'])) : ?>
        <h1>Selamat Datang, <?= $_POST['nama']; ?></h1>
    <?php endif; ?>

    <form action="" method="POST">
        Masukkan Nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>

</body>

</html>