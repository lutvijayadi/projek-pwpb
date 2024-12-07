<?php 
 
include 'koneksi.php';


$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];
 

mysqli_query($koneksi,"update menu set nama='$nama', harga='$harga', keterangan='$keterangan' where id='$id'");  
 


header("location:admin.php");
?>