<?php 
include('koneksi.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
 
</head>


<body>
    <h1 style="text-align:center; ">Daftar Barang Di Gudang Pirsmarket</h1>
	<a href="form_input.php" style="text-align:center; "><h2 style="text-align:center;">Tambah Data</h2></a>
    <table style :"center" border="2" cellpadding="8" cellspacing="0">
        <th>No</th>
        <th>Kode</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Supplier</th>
        <th>Tanggal Kadaluarsa</th>
        <th>Satuan</th>
        <th>Kategori</th>
		<th>Stock</th>
        <th>Gambar</th>
		<th>Action</th>
    <?php
				
				$sql = mysqli_query($koneksi, "SELECT * FROM gudang") or die(mysqli_error($koneksi));
				
				if(mysqli_num_rows($sql) > 0){
				
					$no = 1;
				
					while($data = mysqli_fetch_assoc($sql)){
					
						echo "<tr>";
						echo "<td>".$no."</td>";
						echo "<td>".$data['kode']."</td>";
    					echo "<td>".$data['nama_barang']."</td>";
    					echo "<td>".$data['harga']."</td>";
    					echo "<td>".$data['supplier']."</td>";
    					echo "<td>".$data['tanggal_kadaluarsa']."</td>";
						echo "<td>".$data['satuan']."</td>";
						echo "<td>".$data['kategori']."</td>";
						echo "<td>".$data['stock']."</td>";
						echo "<td><img src='".$data['gambar']."' width='100' height='100'></td>";
						echo "<td><a href='form_edit.php?kode=".$data['kode']."style='text-decoration: none;''>Edit</a>
											<a href='proses_delete.php?kode=".$data['kode']."style='text-decoration: none;'''>Delete</a>
								</td>";
    					echo "</tr>";

						$no++;
					}
				
				}else{
					echo '
					<tr>
						<td colspan="11">Tidak ada data.</td>
					</tr>
					';
				}
				?>
    </table>
</body>
</html>