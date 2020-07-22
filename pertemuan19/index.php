<?php
session_start();

if (!$_SESSION["login"]) {
    header("Location: login.php");    
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");

// tombol cari ditekan
if ( isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
       
    </style>
</head>
<body>
    <a href="logout.php">logout</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>
    <form action="" method="post">
         <input type="text" name="keyword" id="keyword" size="40" autofocus 
         placeholder="Masukkan keyword pecarian.." autocomplete="off">
         <button type="submit" name="cari" id="tombol-cari">Cari!</button>
    </form>
    <br>

    <div class="container" id="container">
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i=1; ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $mhs["id"]; ?>" onclick="
            return confirm('yakin diubah?');">ubah</a> | 
            <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="
            return confirm('yakin mau dihapus?');">hapus</a>
        </td>
        <td><img src="img/<?= $mhs["gambar"]; ?>" width="50px" alt=""></td>
        <td><?= $mhs["nim"]; ?></td>
        <td><?= $mhs["nama"]; ?></td>
        <td><?= $mhs["email"]; ?></td>
        <td><?= $mhs["jurusan"]; ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>    
    </table>

    </div>
<script src="js/script.js"></script>
</body>
</html>




