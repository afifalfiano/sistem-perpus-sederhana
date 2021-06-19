<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP DAN MYSQL</title>
</head>
<body>
    <h2>Tambah User </h2>
    <a href="user.php">Kembali</a>
    <br>
    <form action="proses-tambah.php" method="post">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama_lengkap"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="number" name="telepon"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Otoritas</td>
                <td>
                <select name="otoritas" id="">
                <option value="0">Pilih Otoritas</option>
                <option value="ADMIN"> >ADMIN</option>
                <option value="MEMBER"> MEMBER</option>
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