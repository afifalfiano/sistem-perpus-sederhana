<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Perpustakaan</title>
</head>
<body>
    <h2>Edit User </h2>
    <a href="user.php">Kembali</a>
    <br>
    <?php
    include '../../config/connection.php';

    $ID = $_GET['id'];
    $data = mysqli_query($connect, "SELECT * FROM tb_user WHERE id='$ID'");
    while($row = mysqli_fetch_array($data)) {
    ?>
    <form action="proses-edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="number" name="telepon" value="<?php echo $row['telepon']; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $row['email']; ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" value="<?php echo $row['password']; ?>"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $row['username']; ?>"></td>
            </tr>
            <tr>
                <td>Otoritas</td>
                <td>
                <select name="otoritas">
                    <option value="0">Pilih Otoritas</option>
                    <option value="MEMBER" <?php if($row['otoritas'] == "MEMBER") echo 'selected="selected"'; ?>>MEMBER</option>
                    <option value="ADMIN" <?php if($row['otoritas'] == "ADMIN") echo 'selected="selected"'; ?>>ADMIN</option>
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