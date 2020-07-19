<?php
// $mahasiswa = [
//     ["Andi Irfan", "1911082006",
//     "Teknologi Rekayasa Perangkat Lunak", 
//     "andi.irhamm@gmail.com"], 

    // ["Andi Irsyad", "1911082026",
    // "Teknologi Rekayasa Perangkat Lunak", 
    // "andi.irhamm@gmail.com"],

    // ["Andi Irham", "1911082016",
    // "Teknologi Rekayasa Perangkat Lunak", 
    // "andi.irhamm@gmail.com"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
    "Nama"=>"Andi Irfan", 
    "NIM"=>"1911082006",
    "Prodi"=>"Teknologi Rekayasa Instalasi Listrik", 
    "Email"=>"andi.irfanm@pnp.ac.id",
    "gambar"=>"ai.png"
    ],
    [
    "Nama"=>"Andi Irsyad", 
    "NIM"=>"1911082026",
    "Prodi"=>"Teknik Komputer", 
    "Email"=>"an-irydm@pnp.ac.id",
    "gambar"=>"bi.png"
    ],
    [
    "NIM"=>"1911082016",
    "Nama"=>"Andi Irham", 
    "Prodi"=>"Teknologi Rekayasa Perangkat Lunak", 
    "Email"=>"andi.irhamm@pnp.ac.id",
    "Tugas"=>[80,100,2],
    "gambar"=>"ci.png"
    ]
];
// echo $mahasiswa[2]["Tugas"][1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        img{
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    
        <?php foreach($mahasiswa as $mhs): ?>
            <ul>
                <li type="none">
                    <img src="img/<?= $mhs["gambar"];?>" alt="">
                </li>
                <li>Nama : <?= $mhs["Nama"];?></li>
                <li>NIM : <?= $mhs["NIM"];?></li>
                <li>Prodi : <?= $mhs["Prodi"];?></li>
                <li>Email : <?= $mhs["Email"];?></li>
            </ul>
        <?php endforeach;?>    
    
</body>
</html>