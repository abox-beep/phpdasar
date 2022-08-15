<?php
//konekci ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data dari tabel mahasiswa / query
$result = mysqli_query($conn, "SELECT * FROM mahasiswa" );

//ambil data (fetch) mahasiswa dari object result
//mysqli_fetch_row() -> mengembalikkan array numerik
//mysqli_fetch_assoc -> mengembalikkan array assosiatif
//myswli_fetch_array -> mengembalikkan keduanya
//mydqli_fetch_object

// while($mhs = mysqli_fetch_assoc($result)){
// var_dump($mhs);

// }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<table border="1" cellpadding="10" cellspacing="0">

		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
<?php $num = 1; ?>
		<?php while( $row = mysqli_fetch_assoc( $result ) ) : ?>
		<tr>
			<td><?= $num; ?></td>
			<td>
				<a href="">Ubah</a> | 
				<a href="">Hapus</a>
			</td>
			<td>
				<img src="img/<?= $row['gambar'] ?>" width="50px">
			</td>
			<td><?= $row['nrp'] ?></td>
			<td><?= $row['nama'] ?></td>
			<td><?= $row['email'] ?></td>
			<td><?= $row['jurusan'] ?></td>
		</tr>
		<?php $num++; ?>
	<?php endwhile ?>
	
		
	</table>

</body>
</html>