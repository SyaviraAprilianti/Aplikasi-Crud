<?php
            include "koneksi.php";
            $kode = $_POST['kode'];
            $nama = $_POST['nama_barang'];
            $harga = $_POST['harga'];
            $supplier = $_POST['supplier'];
            $tanggal_kadaluarsa = $_POST['tanggal_kadaluarsa'];
            $satuan = $_POST['satuan'];
            $kategori = $_POST['kategori'];
            $stock = $_POST['stock'];
            $gambar = $_POST['gambar'];
			
			$sql = mysqli_query($koneksi, "UPDATE `gudang` SET `nama_barang` = '$nama', `harga` = '$harga', `supplier` = '$supplier', `tanggal_kadaluarsa` = '$tanggal_kadaluarsa', 
            `satuan` = '$satuan', `kategori` = '$kategori' ,`stock` = '$stock', `gambar` = '$gambar'   WHERE `gudang`.`kode` = $kode") or die(mysqli_error($koneksi));
			
			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="barang.php";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
        
        
        ?>