<?php

include('koneksi.php');
if(isset($_GET['kode'])){
	$kode = $_GET['kode'];
	$cek = mysqli_query($koneksi, "SELECT * FROM gudang WHERE kode='$kode'") or die(mysqli_error($koneksi));
	if(mysqli_num_rows($cek) > 0){
		$del = mysqli_query($koneksi, "DELETE FROM gudang WHERE kode='$kode'") or die(mysqli_error($koneksi));
		if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="barang.php";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="barang.php";</script>';
		}
	}else{
		echo '<script>alert("kode tidak ditemukan di database."); document.location="barang.php";</script>';
	}
}else{
	echo '<script>alert("kode tidak ditemukan di database."); document.location="barang.php";</script>';
}

?>