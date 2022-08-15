<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
//cek apakah tombol tambah data sudah ditekan
if( isset( $_POST['submit'] ) ) {
	
	//ambil data yang diinputkan user
	$nrp = $_POST['nrp'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$jurusan = $_POST['jurusan'];
	$gambar = $_POST['gambar'];

	//query insert data
	$query = "INSERT INTO mahasiswa VALUES
			( '', '$nrp', '$nama', '$email', '$jurusan', '$gambar' )
			";
	mysqli_query( $conn, $query );

	// cek apakah data berhasil ditambahkan atau tidak
	if( mysqli_affected_rows( $conn ) > 0 ) {
		echo "berhasil";
	} else {
		echo "gagal!";
		echo "</br>";

	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>

<form action="" method="post">
	<ul>
		<li>
			<label for="nrp">NRP : </label>
			<input type="text" name="nrp" id="nrp">
		</li>
		<li>
			<label for="nama">Nama : </label>
			<input type="text" name="nama" id="nama">
		</li>
		<li>
			<label for="email">Email : </label>
			<input type="text" name="email" id="email">
		</li>
		<li>
			<label for="jurusan">Jurusan : </label>
			<input type="text" name="jurusan" id="jurusan">
		</li>
		<li>
			<label for="gambar">Gambar : </label>
			<input type="text" name="gambar" id="gambar">
		</li>
		<li>
			<button type="submit" name="submit">Tambah Data</button>
		</li>
	</ul>
</form>

</body>
</html>