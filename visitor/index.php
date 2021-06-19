<?php

    session_start();
    if(isset($_SESSION['username'])) {
        echo "Selamat Datang";
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
</head>
<body>
    Visitor
    <form action="../logout.php" method="post">
    <button class="btn btn-warning">Logout</button>
    </form>
</body>
</html>