<?php 
include('koneksi.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Barang</title>
</head>
<style>
    div{
        border: 2px solid black;
        width: 30%;
        height: 450px;
        margin-left: 36%;
    }
</style>
<body>
<?php
        $kode = $_GET['kode'];
        $select = mysqli_query($koneksi, "SELECT * FROM gudang WHERE kode='$kode'") or die(mysqli_error($koneksi));
        
        $data = mysqli_fetch_assoc($select);
        
		
		if(isset($_GET['kode'])){
			
			$kode = $_GET['kode'];
			
			
			$select = mysqli_query($koneksi, "SELECT * FROM gudang WHERE kode='$kode'") or die(mysqli_error($koneksi));
			
			
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">kode tidak ada dalam database.</div>';
				exit();
		
			}else{
				
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>

<div> 
<table  cellpadding="7" cellspacing="7">
<form action="proses_update.php" method="POST">
        <tr>
            <td colspan="15">Form Input Barang</td>
        </tr>

        <tr>
        <td>Kode : </td>
        <td></td>
        <td><input type="text" name="kode" value="<?php echo $data['kode']; ?>"></td>
        </tr>


        <tr>
        <td>Nama Barang : </td>
        <td></td>
        <td><input type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>"></td>
        </tr>

        <tr>
        <td>Harga Barang : </td>
        <td></td>
        <td><input type="text" name="harga" value="<?php echo $data['harga']; ?>"></td>
        </tr>

        <tr>
        <td>supplier : </td>
        <td></td>
        <td><input type="text" name="supplier" value="<?php echo $data['supplier']; ?>"></td>
        </tr>

        <tr>
        <td>Tanggal Kadaluarsa : </td>
        <td></td>
        <td><input type="date" name="tanggal_kadaluarsa" value="<?php echo $data['tanggal_kadaluarsa']; ?>"></td>
        </tr>

        <tr>
        <td>Satuan : </td>
        <td></td>
        <td><select name="satuan" id="">
                <?php 
                    if ($data['satuan']=='Pack' ) {
                        echo "<option value='Pack'  selected>Pack</option>";
                    }
                    else echo "<option value='Pack'>Pack</option>";
                    
                    if ($data['satuan']=='Pcs' ) {
                        echo "<option value='Pcs'  selected>Pcs</option>";
                    }
                    else echo "<option value='Pcs'>Pcs</option>";

            
                ?>
                </select>
                </td>
        </tr>

        <tr>
        <td>Kategori : </td>
        <td></td>
        <td><select name="kategori" id="">
        <?php 
                    if ($data['kategori']=='Makanan' ) {
                        echo "<option value='Makanan'  selected>Makanan</option>";
                    }
                    else echo "<option value='Makanan'>Makanan</option>";
                    
                    if ($data['kategori']=='Minuman' ) {
                        echo "<option value='Minuman'  selected>Minuman</option>";
                    }
                    else echo "<option value='Minuman'>Minuman</option>";

            
                ?>
                </select>
                </td>
        </tr>


        <tr>
        <td>Stock : </td>
        <td></td>
        <td><input type="text" name="stock" value="<?php echo $data['stock']; ?>"></td>
        </tr>

        <tr>
        <td>Gambar : </td>
        <td></td>
        <td><input type="text" name="gambar" value="<?php echo $data['gambar']; ?>"></td>
        </tr>

        <tr>
        <td><input type="submit" value="Simpan" name="simpan"></td>
        </tr>


        </form>
</table>
</div>
</body>
</html>