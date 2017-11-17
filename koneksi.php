<?php  
	$host = "localhost";
	$user = "root";
	$pass = "20010210";
	$db = "db_sekolah";

	$koneksi = mysqli_connect($host, $user, $pass, $db);

	// untuk mengecek koneksi apakah sudah terhubung dengan database atau belum
	/* if($koneksi){
		echo "Koneksi berhasil";
	}else{
	 	echo "Koneksi gagal";
	} */
?>