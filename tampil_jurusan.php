<?php 
include "koneksi.php";
	$sql = "SELECT id_jurusan, nama_jurusan FROM jurusan";
	$data = mysqli_query($koneksi, $sql);
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>SMK Karanya Bisa</title>
</head>
<body>
	<label>Data Jurusan</label><br>
	<table border="1px">
		<tr>
			<th>id jurusan</th>
			<th>nama jurusan</th>
		</tr>
	<?php
	 foreach ($data as $jurusan):
	?>
		<tr>
			<td>
				<?php echo $jurusan['id_jurusan'];?>
			</td>
			<td>
				<?php echo $jurusan['nama_jurusan'];?>
				</td>
				
			</td>
		</tr>

	<?php 
		endforeach; 
	?>

	</table>
</body>
</html>