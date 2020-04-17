<?php

include "koneksi.php";

    $nama = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $supplier = $_POST['supplier'];
    $tanggal_kadaluarsa = $_POST['tanggal_kadaluarsa'];
    $satuan = $_POST['satuan'];
    $kategori = $_POST['kategori'];
    $stock = $_POST['stock'];
    $gambar= $_POST['gambar'];

        $sql = mysqli_query($koneksi, "INSERT INTO `gudang` (`nama_barang`, `harga`, `supplier`, `tanggal_kadaluarsa`, `satuan`, `kategori`, `stock`,`gambar`) 
        VALUES ('$nama', '$harga', '$supplier', '$tanggal_kadaluarsa', '$satuan', '$kategori', '$stock','$gambar')") or die(mysqli_error($koneksi));
        
        if($sql){
            echo '<script>alert("Berhasil menambahkan data."); document.location="barang.php";</script>';
        }else{
            echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
        }
?>
