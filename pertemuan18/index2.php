<?php
// koneksi ke database
$connect = mysqli_connect("localhost","root",null,"phpdasar");

// mengambil data dari tabel mahasiswa / queri data mahasiswa
$result = mysqli_query($connect,"SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object $result
// 1 mysqli_fetch_row();
// 2 mysqli_fetch_assoc();
// 3 mysqli_fetch_array();
// 4 mysqli_fetch_object();

// while ($mhs = mysqli_fetch_object($result)){
//     var_dump($mhs); 
// }

// if (!$result) {
//     echo mysqli_error($connect);
// }
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
    
    <h1>Daftar Mahasiswa</h1>
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
    <?php while( $row = mysqli_fetch_object($result)) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a> | 
            <a href="">hapus</a>
        </td>
        <td><img src="img/<?= $row->gambar; ?>" width="50px" alt=""></td>
        <td><?= $row->nim; ?></td>
        <td><?= $row->nama; ?></td>
        <td><?= $row->email; ?></td>
        <td><?= $row->jurusan; ?></td>
    </tr>
    <?php $i++ ?>
    <?php endwhile; ?>    
    </table>

</body>
</html>