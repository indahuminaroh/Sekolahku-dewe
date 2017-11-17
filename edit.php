<?php

include "koneksi.php";

$id_barang = $_GET['nis'];

if(isset($_POST['submit'])) {

	$nama = $_POST['nis'];
	$nama_siswa = $_POST['nama_siswa'];
	$alamat = $_POST['alamat'];
	$id_jurusan = $_POST['id_jurusan'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];

	$sql = "UPDATE siswa SET nis='$nis', nama_siswa='$nama_siswa', alamat='$alamat', id_jurusan='$id_jurusan', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir' ";

	$siswa = mysqli_query($koneksi, $sql);

	if ($id_barang) {
		echo "sudah berhasi";
	}else{
		echo "gagal di simpan";
	}

}

$sql ="SELECT nis,nama_siswa,alamat,id_jurusan,tempat_lahir,tgl_lahir FROM siswa WHERE = '$nis'";

$data = mysql_query($koneksi, $sql)

$siswa = mysql_fetch_assoc($data)

?>