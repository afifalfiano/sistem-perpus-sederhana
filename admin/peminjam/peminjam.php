<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Peminjam Buku</h1>
    <a href="../index.php">Kembali</a>
    <hr>
   <table border="1">
    <tr>
        <th>No</th>
        <th>Nama Peminam</th>
        <th>Buku</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    <?php
        include "../../config/connection.php";
        $result = mysqli_query($connect, "SELECT tb_pinjam.id, tb_user.nama_lengkap, tb_buku.judul, tgl_pinjam, tgl_kembali, tb_status.status FROM (((tb_pinjam INNER JOIN tb_user ON tb_pinjam.id_user = tb_user.id) INNER JOIN tb_buku ON tb_pinjam.id_buku = tb_buku.id ) INNER JOIN tb_status ON tb_pinjam.id_status = tb_status.id)");
        $rowNumber = 1;
        while($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
            <td><?php echo $rowNumber++ ?></td>
            <td><?php echo $row['nama_lengkap'] ?></td>
            <td><?php echo $row['judul'] ?></td>
            <td><?php echo $row['tgl_pinjam'] ?></td>
            <td><?php echo $row['tgl_kembali'] ?></td>
            <td><?php echo $row['status'] ?></td>
            <td>
                <a href="kembalikan-buku.php?id=<?php echo $row['id']; ?>">KEMBALIKAN</a>
            </td>
            </tr>
            <?php
        }
        ?>
   </table>
</body>
</html>