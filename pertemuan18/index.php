<?php
session_start();

if (!$_SESSION["login"]) {
    header("Location: login.php");    
}

require 'functions.php';

// pagination
// konfigurasi 
$jumlahDataPerHalman = 3;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalman);
$halamanAktif = (isset($_GET["p"])) ? $_GET["p"] : 1;

// halaman = 2, awalData = 2;
// halaman = 3, awalData = 4;
$awalData = ($jumlahDataPerHalman * $halamanAktif) - $jumlahDataPerHalman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalman");

// tombol cari ditekan
if ( isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
    $jumlahData = count($mahasiswa);
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalman);
    $halamanAktif = (isset($_GET["p"])) ? $_GET["p"] : 1;
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
         <input type="text" name="keyword" id="" size="40" autofocus 
         placeholder="Masukkan keyword pecarian.." autocomplete="off">
         <button type="submit" name="cari">Cari!</button>
    </form>
    <br><br>
    <!-- navigation -->
    <?php if($halamanAktif > 1): ?>
        <a href="?p=<?= $halamanAktif - 1; ?>">&laquo;</a>
    <?php endif; ?>
    
    <!-- pagination -->
    <?php for($i = 1;$i<=$jumlahHalaman;$i++): ?>
        <?php if($i == $halamanAktif): ?>
        <a href="?p=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else: ?>
            <a href="?p=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

     <!-- navigation  -->
     <?php if($halamanAktif < $jumlahHalaman): ?>
        <a href="?p=<?= $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>
    
    <br>
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

</body>
</html>




