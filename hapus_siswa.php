<?php
include 'koneksi.php';

$nis = $_GET['id'];

$sql = "DELETE FROM siswa WHERE nis='$nis'";

$barang = mysqli_query($koneksi, $sql);

if ($barang) {
		echo "berhasil dihapus";
	}else {
		echo "gagal";
		echo mysqli_error($koneksi);
	}

?>
