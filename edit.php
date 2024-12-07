<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
    <title>edit</title>
</head>
<body>
    <h2>edit file</h2>
    <?php
    include 'koneksi.php';
     $id = $_GET ['id'];
     $data1 = mysqli_query($koneksi,"SELECT * FROM menu WHERE id='$id'");
     while($d = mysqli_fetch_array($data1)){
     ?>
     <form method="post" action="update_aksi.php">
        <table border="1" align="center" style="padding_top :200px" >
        <tr>
                <td><label>id :</label></td>
                <td><input type="number" name ="id" value="<?php echo $d['id'] ?>"></td>
            </tr>
            <tr>
                <td><label>nama :</label></td>
                <td><input type="text" name ="nama" value="<?php echo $d['nama'] ?>"></td>
            </tr>
            <tr>
                <td><label>harga :</label></td>
                <td><input type="text" name ="harga" value="<?php echo $d['harga'] ?>"></td>
            </tr>
            <tr>
                <td><label>keterangan</label></td>
                <td><input type="text" name ="keterangan" value="<?php echo $d['keterangan'] ?>"></td>
            </tr>
            <tr>
            <td><input type="submit" value="simpan"></td>
        </tr>
        </table>
    </form>
    <?php
     }
     ?>
</body>
</html>