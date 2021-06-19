<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kategori Buku</h1>
    <a href="tambah-kategori-buku.php">Tambah Kategori Buku</a>
    <a href="../index.php">Kembali</a>
    <table border="1">
    <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Aksi</th>
    </tr>
    <?php
    include '../../config/connection.php';
    $no = 1;
    $data = mysqli_query($connect, "SELECT * from tb_kategori_buku");
    while($row = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $row['nama_kategori'] ?></td>
            <td>
                <a href="edit-kategori-buku.php?id=<?php echo $row['id']; ?>">EDIT</a>
                <a href="hapus-kategori-buku.php?id=<?php echo $row['id']; ?>">HAPUS</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
</body>
</html>