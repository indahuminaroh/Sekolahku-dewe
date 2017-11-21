<?php
include 'koneksi.php';

$nis = $_GET['id'];

if (isset($_POST['submit'])) {

	$nis = $_POST['nis'];
	$nama_siswa = $_POST['nama_siswa'];
	$alamat = $_POST['alamat'];
	$id_jurusan = $_POST['id_jurusan'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];

//echo $nama . "," . $jumlah . "," . $jenis . "," . $keadaan;

	$sql = "UPDATE siswa SET nis='$nis', nama_siswa='$nama_siswa', alamat='$alamat', id_jurusan='$id_jurusan',tempat_lahir='$tempat_lahir' ,tgl_lahir='$tgl_lahir' WHERE nis='$nis'";
	$data = mysqli_query($koneksi, $sql);

	if ($data) {
		echo "berhasil";
	}else {
		echo "gagal";
		echo mysqli_error($koneksi);
	}
}

$sql = "SELECT nis, nama_siswa, alamat, id_jurusan,tempat_lahir, tgl_lahir FROM siswa WHERE nis='$nis'";
$data = mysqli_query($koneksi, $sql);

$nis = mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<label>Nis</label>
		<input type="text" name="nis" value="<?php echo $nis['nis']?>"><br>
		<label>Nama_siswa</label>
		<input type="text" name="nama_siswa" value="<?php echo $nama_siswa['nama_siswa']?>"><br>
		<label>Alamat</label>
		<input type="text" name="alamat" value="<?php echo $alamat['alamat']?>"><br>
		<select name="id_jurusan">
			<option value="<?php echo $id_jurusan['id_jurusan']?>">
				<?php echo $barang['id_jurusan']?>
		</option>
			<option value="1">RPL</option>
			<option value="2">TKJ</option>
		</select><br>
		<label>Tempat lahir</label>
		<input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir['tempat_lahir']?>"><br>
		<label>Tanggal Lahir</label>
		<input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir['tgl_lahir']?>"><br>
		<input type="submit" name="submit" value="Kirim">
	</form>
</body>
</html>
