<?php 
            include "../../config/connection.php";

            $data = mysqli_query($connect, "SELECT * FROM tb_kategori_buku");
            $options = '';
            while($list = mysqli_fetch_assoc($data)) {
                $options .= '<option value = "'.$list['id'].'">'.$list['nama_kategori'].'</option>';   
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP DAN MYSQL</title>
</head>
<body>
    <h2>Edit Buku </h2>
    <a href="buku.php">Kembali</a>
    <br>
    <?php
    include '../../config/connection.php';

    $ID = $_GET['id'];
    $data = mysqli_query($connect, "SELECT * FROM tb_buku WHERE id='$ID'");
    while($row = mysqli_fetch_array($data)) {
    ?>
    <form action="proses-edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <table>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul" value="<?php echo $row['judul']; ?>"></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td><input type="text" name="pengarang" value="<?php echo $row['pengarang']; ?>"></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="number" name="tahun_terbit" value="<?php echo $row['tahun_terbit']; ?>"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" value="<?php echo $row['penerbit']; ?>"></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><input type="text" name="kategori" value="<?php echo $row['kategori']; ?>"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                <select name="status">
                    <option value="0">Pilih Status</option>
                    <option value="1" <?php if($row['status'] == "1") echo 'selected="selected"'; ?>>Tersedia</option>
                    <option value="2" <?php if($row['status'] == "2") echo 'selected="selected"'; ?>>Tidak Tersedia</option>
                    <option value="3" <?php if($row['status'] == "3") echo 'selected="selected"'; ?>>Dipinjam</option>
                    <option value="4" <?php if($row['status'] == "4") echo 'selected="selected"'; ?>>Selesai</option>
                </select>
                </td>
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