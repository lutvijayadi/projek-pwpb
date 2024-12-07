 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cofee clasic</title>
	<link rel="stylesheet" href="adminn.css">
 </head>
 <body>
     <form>
	<table border="1">
	<h1>selamat datang di cafe saya</h1>
	<br>
	<a href="tambah.php">tambahkan</a>
	<br>
	<br>
		<tr>   
			<th>ID</th>
			<th>NAMA</th>
			<th>HARGA</th>
			<th>KETERANGAN</th>
			<th>OPSI</th>			
		</tr>
		<?php 
		include 'koneksi.php';

		$data = mysqli_query($koneksi,"SELECT * FROM menu");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td><?php echo $d['keterangan']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?> 
		</from>
 </body>
 </html>