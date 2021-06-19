<?php 
            include "../../config/connection.php";

            $buku = mysqli_query($connect, "SELECT * FROM tb_buku");
            $options = '';
            while($list = mysqli_fetch_assoc($buku)) {
                $options .= '<option value = "'.$list['id'].'">'.$list['judul'].'</option>';   
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
    <h2>Tambah Pinjaman </h2>
    <a href="../buku-visitor/buku-visitor.php">Kembali</a>
    <br>
    <form action="proses-pinjam.php" method="post">
        <table>
            <tr>
                <td>Judul Buku</td>
                <td>
                <select name="judul" id="">
                <?php echo $options; ?>
                </select></td>
                </td>
            </tr>
            <tr>
                <td>Tanggal Pinjam</td>
                <td><input type="date" name="tgl_pinjam"></td>
            </tr>
            <tr>
                <td>Tanggal Kembali</td>
                <td><input type="date" name="tgl_kembali"></td>
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