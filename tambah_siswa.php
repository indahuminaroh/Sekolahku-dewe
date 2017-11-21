<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
	$nis = $_POST['nis'];
	$nama_siswa = $_POST['nama_siswa'];
	$alamat = $_POST['alamat'];
	$id_jurusan = $_POST['id_jurusan'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];




//echo $nama . "," . $jumlah . "," . $jenis . "," . $keadaan;

	$sql = "INSERT INTO siswa(nis, nama_siswa, alamat, id_jurusan,tempat_lahir ,tgl_lahir) VALUES ('$nis', '$nama_siswa', '$alamat', 'id_jurusan','$tempat_lahir', 'tgl_lahir')";
	$data = mysqli_query($koneksi, $sql);

	if ($data) {
		echo "berhasil";
	}else {
		echo "gagal";
		echo mysqli_error($koneksi);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<label>Nis</label>
		<input type="text" name="nis"><br>
		<label>Nama siswa</label>
		<input type="text" name="nama_siswa"><br>
		<label>Alamat</label>
		<input type="text" name="alamat"><br>
		<label>Jurusan</label>
		<select name="id_jurusan">
			<option value="1">RPL</option>
			<option value="2">TKJ</option>
		</select><br>
		<label>Tempat lahir</label>
		<input type="text" name="tempat_lahir"><br>
		<label>Tanggal lahir</label>
		<input type="date" name="tgl_lahir"><br>
		<input type="submit" name="submit" value="Kirim">
	</form>
</body>
</html>