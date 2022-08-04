<?php
//Pengulangan pada array
//for / foreach

$angka = [1,2,3,4,11,12,13];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
	<style type="text/css">
		div {
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}
	</style>
</head>
<body>

<?php for( $i = 0; $i < count($angka); $i++ ) : ?>
<div><?= $angka[$i]; ?></div>
<?php endfor ?>	

</body>
</html>