<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP DAN MYSQL</title>
</head>
<body>
    <h2>Edit Buku </h2>
    <a href="kategori-buku.php">Kembali</a>
    <br>
    <?php
    include '../../config/connection.php';

    $ID = $_GET['id'];
    $data = mysqli_query($connect, "SELECT * FROM tb_kategori_buku WHERE id='$ID'");
    while($row = mysqli_fetch_array($data)) {
    ?>
    <form action="proses-edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <table>
            <tr>
                <td>Kategori</td>
                <td><input type="text" name="nama_kategori" value="<?php echo $row['nama_kategori']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>
</body>
</html>