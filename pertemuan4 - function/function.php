<?php
function salam( $nama = "Sultoni Rahman", $waktu = "Malam" ) {
	return "Selamat $waktu, $nama!" ;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
	<h1><?= salam(); ?></h1>

</body>
</html>

