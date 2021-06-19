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
    <h2>Tambah User </h2>
    <a href="buku.php">Kembali</a>
    <br>
    <form action="proses-tambah.php" method="post">
        <table>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td><input type="text" name="pengarang"></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="number" name="tahun_terbit"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit"></td>
            </tr>
            <tr>
            <td>Kategori</td>
            <td><select name="kategori" id="">
            <?php echo $options; ?>
            </select></td>
            </tr>            
            <tr>
                <td>Status</td>
                <td>
                <select name="status">
                    <option value="0">Pilih status</option>
                    <option value="1">Tersedia</option>
                    <option value="2">Tidak Tersedia</option>
                    <option value="3">Dipinjam</option>
                    <option value="4">Selesai</option>
                </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>