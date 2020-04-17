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
<div> 
<table  cellpadding="7" cellspacing="7">
<form action="proses_input.php" method="POST">
        <tr>
            <td colspan="15">Form Input Barang</td>
        </tr>

        <tr>
        <td>Nama Barang : </td>
        <td></td>
        <td><input type="text" name="nama_barang"></td>
        </tr>

        <tr>
        <td>Harga : </td>
        <td></td>
        <td><input type="text" name="harga"></td>
        </tr>

        <tr>
        <td>Supplier: </td>
        <td></td>
        <td><input type="text" name="supplier"></td>
        </tr>

        <tr>
        <td>Tanggal Kadaluarsa : </td>
        <td></td>
        <td><input type="date" name="tanggal_kadaluarsa"></td>
        </tr>

        <tr>
        <td>Satuan : </td>
        <td></td>
        <td><select name="satuan" id="">
                <option value="Pack">Pack</option>
                <option value="Pcs">Pcs</option>
                </select>
                </td>
        </tr>

        <tr>
        <td>Kategori : </td>
        <td></td>
        <td><select name="kategori" id="">
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
             
                </select>
                </td>
        </tr>


        <tr>
        <td>Stock : </td>
        <td></td>
        <td><input type="text" name="stock"></td>
        </tr>

        <tr>
        <td>Gambar : </td>
        <td></td>
        <td><input type="text" name="gambar"></td>
        </tr>

        <tr>
        <td><input type="submit" value="Simpan" name="simpan"></td>
        </tr>


        </form>
</table>
</div>
</body>
</html>