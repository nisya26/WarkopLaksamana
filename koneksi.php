<?php
//buat koneksi 
$con=mysqli_connect("localhost", "root","","kafe");

if (mysqli_connect_errno($con))
{
//koneksi gagal
	echo "Koneksi dengan MySQL gagal: " . mysqli_connect_error();
}
else
{
//koneski berhasil
echo "Koneksi dengan MySQL behasil <br>";
}
?> 
 