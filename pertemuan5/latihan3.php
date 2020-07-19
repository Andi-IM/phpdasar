<?php
$mahasiswa = [["Andi Irfan", "1911082006",
"Teknologi Rekayasa Perangkat Lunak", 
"andi.irhamm@gmail.com"], ["Andi Irsyad", "1911082026",
"Teknologi Rekayasa Perangkat Lunak", 
"andi.irhamm@gmail.com"],
["Andi Irham", "1911082016",
"Teknologi Rekayasa Perangkat Lunak", 
"andi.irhamm@gmail.com"]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    
        <?php foreach($mahasiswa as $mhs): ?>
            <ul>
                <li>Nama : <?= $mhs[0];?></li>
                <li>NIM : <?= $mhs[1];?></li>
                <li>Prodi : <?= $mhs[2];?></li>
                <li>Email : <?= $mhs[3];?></li>
            </ul>
        <?php endforeach;?>    
    
</body>
</html>