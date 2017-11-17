<?php
	include "koneksi.php";
	$sql = "SELECT nis, nama_siswa, alamat, id_jurusan, tempat_lahir, tgl_lahir FROM siswa";
	$data = mysqli_query($koneksi, $sql);

	function tampil_jurusan($id_jurusan, $koneksi){
		$sql = "SELECT nama_jurusan FROM jurusan WHERE id_jurusan='$id_jurusan'";
		$data = mysqli_query($koneksi, $sql);
		$jurusan = mysqli_fetch_assoc($data);
		return $jurusan['nama_jurusan'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>SMK Karanya Bisa</title>
</head>
<body>
	<label>Data Siswa</label><br>
	<a href="tambah_siswa.php">Tambah</a>
	<table border="1px">
		<tr>
			<th>NIS</th>
			<th>Nama Lengkap</th>
			<th>Alamat</th>
			<th>Jurusan</th>
			<th>Tempat</th>
			<th>Tanggal Lahir</th>
			<th>Opsi</th>
		</tr>
	<?php
		foreach ($data as $siswa):
	?>
		<tr>
			<td><?php echo $siswa['nis'];?></td>
			<td><?php echo $siswa['nama_siswa'];?></td>
			<td><?php echo $siswa['alamat'];?></td>
			<td><?php echo tampil_jurusan($siswa['id_jurusan'], $koneksi);?></td>
			<td><?php echo $siswa['tempat_lahir'];?></td>
			<td><?php echo $siswa['tgl_lahir'];?></td>
			<td>
				<a href="edit_siswa.php?id=<?php echo $siswa['nis']; ?>">Edit</a>
				<a href="hapus_siswa.php?id=<?php echo $siswa['nis']; ?>">Hapus</a>
			</td>
		</tr>
	<?php 
		endforeach; 
	?>

	</table>
</body>
</html>