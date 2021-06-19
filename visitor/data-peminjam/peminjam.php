<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../../styles/styles.css">
    <script src="../../scripts/bootstrap.min.js"></script>
    <script src="../../scripts/jquery.min.js"></script>
</head>
<body>
    <div class="container-fluid bg-primary text-white p-3 text-center d-flex  justify-content-center fixed-top main-book">
            <div class="title"><h1>Riwayat Peminjaman Buku</h1></div>
        </div>
        <div class="container main-book">
            <ul class="nav nav-pills mt-4">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../pinjam/pinjam.php">Pinjam Buku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../data-peminjam/peminjam.php">Riwayat Pinjaman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../buku-visitor/buku-visitor.php">Kembali</a>
            </li>
            <li class="nav-item">
                <form action="../../auth/logout.php" method="post">
                <button class="btn btn-outline-warning">Logout</button>
                </form>
            </li>
            </ul>
            <hr>
        </div>
    <div class="container table-responsive">
   <table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Nama Peminjam</th>
        <th>Buku</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Status</th>
    </tr>
    <?php
        include "../../config/connection.php";
        $result = mysqli_query($connect, "SELECT tb_user.username, tb_pinjam.id, tb_user.nama_lengkap, tb_buku.judul, tgl_pinjam, tgl_kembali, tb_status.status FROM (((tb_pinjam INNER JOIN tb_user ON tb_pinjam.id_user = tb_user.id) INNER JOIN tb_buku ON tb_pinjam.id_buku = tb_buku.id ) INNER JOIN tb_status ON tb_pinjam.id_status = tb_status.id)");
        $rowNumber = 1;
        while($row = mysqli_fetch_array($result)) {
            if($_COOKIE['username'] == $row['username']) {
            ?>
            <tr>
            <td><?php echo $rowNumber++ ?></td>
            <td><?php echo $row['nama_lengkap'] ?></td>
            <td><?php echo $row['judul'] ?></td>
            <td><?php echo $row['tgl_pinjam'] ?></td>
            <td><?php echo $row['tgl_kembali'] ?></td>
            <td><?php echo $row['status'] ?></td>
            </tr>
            <?php
            }
        }
        ?>
   </table>
   </div>
</body>
</html>