<?php 
		include 'koneksi.php';


			$id = $_POST['id'];
			$nama = $_POST['nama'];
			$harga =$_POST['harga'];
			$keterangan = $_POST['keterangan']; 


		mysqli_query($koneksi, "insert into menu values ('$id' ,'$nama', '$harga', '$keterangan')");


        header("location:admin.php");
?>