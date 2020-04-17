<?php
$koneksi = mysqli_connect("localhost","root","","pirsmarket");

if (mysqli_connect_errno()) {
    echo "Gagal melakukan koneksi ke Mysql :" .mysqli_connect_error();
}


?>