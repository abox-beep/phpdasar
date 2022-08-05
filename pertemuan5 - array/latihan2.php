<?php
//Pengulangan pada array
//for / foreach

$numbers = [1, 2, 3, 4, 11, 12, 13];
?>
<!DOCTYPE html>
<html>

<head>
	<title>Latihan 2</title>
	<style type="text/css">
		.kotak {
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}

		.clear {
			clear: both;
		}
	</style>
</head>

<body>

	<?php for ($i = 0; $i < count($numbers); $i++) : ?>
		<div class="kotak"><?= $numbers[$i]; ?></div>
	<?php endfor ?>

	<div class="clear"></div>

	<?php foreach ($numbers as $number) { ?>
		<div class="kotak"><?php echo "$number"; ?></div>
	<?php } ?>

	<div class="clear"></div>

	<?php foreach ($numbers as $number) : ?>
		<div class="kotak"><?= $number; ?></div>
	<?php endforeach; ?>

</body>

</html>