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
    <script src="js/jquery/dist/jquery.min.js"></script>
    <style>
       .loader{
           width: 100px;
           position: absolute;
           top: 115px;
           left: 295px;
           z-index: -1;
           display: none;
       }

       @media print{
            .logout, .tambah, .form-cari, .aksi{
                display: none;
            }
       }
    </style>
</head>
<body>
    <a href="logout.php" class="logout">logout</a> | <a href="cetak.php" target="_blank">Cetak</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php" class="tambah">Tambah data mahasiswa</a>
    <br><br>
    <form action="" method="post" class="form-cari">
         <input type="text" name="keyword" id="keyword" size="40" autofocus 
         placeholder="Masukkan keyword pecarian.." autocomplete="off">
         <button type="submit" name="cari" id="tombol-cari">Cari!</button>
         <img src="img/loader.gif" alt="" class="loader">
    </form>
    <br>

    <div class="container" id="container">
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th class="aksi">Aksi</th>
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
        <td class="aksi">
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




