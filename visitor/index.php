<?php

    session_start();
    if(isset($_SESSION['username'])) {
        echo "Selamat Datang ";
        echo $_COOKIE['username'];
    } else {
        header('location:../auth/login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <script src="../scripts/bootstrap.min.js"></script>
    <script src="../scripts/jquery.min.js"></script>
</head>
<body> 
    <ul>
    <li><a href="buku-visitor/buku-visitor.php">Lihat Koleksi Buku</a></li>
    </ul>
    <form action="../auth/logout.php" method="post">
    <button class="btn btn-warning">Logout</button>
    </form>
</body>
</html>