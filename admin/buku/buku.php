<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buku</h1>
    <a href="tambah-buku.php">Tambah Buku</a>
    <a href="../index.php">Kembali</a>
    <hr>
   <table border="1">
    <tr>
        <th>No</th>
        <th>Judul Buku</th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
        <th>Kategori</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    <?php
        include "../../config/connection.php";
        $result = mysqli_query($connect, "SELECT tb_buku.id, tb_buku.judul, tb_buku.pengarang, tb_buku.tahun_terbit, tb_buku.penerbit, tb_kategori_buku.nama_kategori, tb_buku.status, tb_status.status FROM ((`tb_buku` INNER JOIN tb_kategori_buku ON tb_buku.kategori = tb_kategori_buku.id) INNER JOIN tb_status ON tb_buku.status = tb_status.id)");
        $rowNumber = 1;
        while($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
            <td><?php echo $rowNumber++ ?></td>
            <td><?php echo $row['judul'] ?></td>
            <td><?php echo $row['pengarang'] ?></td>
            <td><?php echo $row['tahun_terbit'] ?></td>
            <td><?php echo $row['nama_kategori'] ?></td>
            <td><?php echo $row['status'] ?></td>
            <td>
                <a href="edit-buku.php?id=<?php echo $row['id']; ?>">EDIT</a>
                <a href="hapus-buku.php?id=<?php echo $row['id']; ?>">HAPUS</a>
            </td>
            </tr>
            <?php
        }
        ?>
   </table>
</body>
</html>