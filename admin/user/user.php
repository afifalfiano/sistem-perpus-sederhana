<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Pengaturan User Perpustakaan</h1>
   <a href="tambah-user.php">Tambah User</a>
   <a href="../index.php">Kembali</a>
   <table border="1">
    <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Otoritas</th>
        <th>Aksi</th>
    </tr>
    <?php
        include "../../config/connection.php";
        $result = mysqli_query($connect, "SELECT * FROM tb_user");
        $rowNumber = 1;
        while($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
            <td><?php echo $rowNumber++ ?></td>
            <td><?php echo $row['nama_lengkap'] ?></td>
            <td><?php echo $row['alamat'] ?></td>
            <td><?php echo $row['telepon'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['otoritas'] ?></td>
            <td>
                <a href="edit-user.php?id=<?php echo $row['id']; ?>">EDIT</a>
                <a href="hapus-user.php?id=<?php echo $row['id']; ?>">HAPUS</a>
            </td>
            </tr>
            <?php
        }
        ?>
   </table>
</body>
</html>