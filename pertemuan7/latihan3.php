<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <?php if (isset($_POST["submit"])) :?>
        <h1>Halo, Selamat Datang <?= $_POST["nama"];?></h1>
    <?php endif;?>    

    <!-- jika action kosong, maka data kan dikirim pada
    halaman yang sama -->
    <!-- default method => GET -->
    <form action="" method="post">
        Masukkan nama:
        <!-- name="nama" akan menjadi key dari array $_POST -->
        <input type="text" name="nama" id="">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>