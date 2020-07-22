<?php 
require '../functions.php';

$keyword = $_GET["keyword"];
$mahasiswa = cari($keyword);
?>

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