<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tambah.css">
    <title>Tambahkan menu</title>
</head>
<body>
    <a href="admin.php">Kembali</a>
    <br>
    <br>
    <form method="post" action="tambah_aksi.php">
        <table border="1" align="center" style="padding_top :200px" >
            <tr>    
                <td><label>id :</label></td>
                <td><input type="number" name ="id"></td>
            </tr>
            <tr>
                <td><label>nama :</label></td>
                <td><input type="text" name ="nama"></td>
            </tr>
            <tr>
                <td><label>harga :</label></td>
                <td><input type="text" name ="harga"></td>
            </tr>
            <tr>
                <td><label>keterangan :</label></td>
                <td><input type="text" name ="keterangan"></td>
            </tr>
            <tr>
            <td><input type="submit" value="simpan"></td>
        </tr>
        </table>
    </form>
</body>
</html>