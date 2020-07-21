<?php
// Variabel Scope / lingkup variabel
// $x = 10;
// $x adalah variable lokal untuk program utama
// function tampilX(){
    // $x = 20;
    // $x adalah variable lokal untuk tampilX()
    // global $x;
    // global adalah mendapatkan variabel luar dari tampilX()
    // echo $x;
// }

// tampilX();
// echo "<br>";
// echo $x;

// Superglobals variable
// $_GET  -->data dikirim melalui URL
// $_POST -->data dikirim melalui Form
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV
// semuanya adalah array associative

//  print_r($_SERVER);
// echo $_SERVER["SERVER_NAME"];

// $_GET["nama"] = "Andi Irham";
// $_GET["nim"] = "1911082006";
// var_dump($_GET);

$mahasiswa = [
    [
    "Nama"=>"Andi Irfan", 
    "NIM"=>"1910092006",
    "Prodi"=>"Teknologi Rekayasa Instalasi Listrik", 
    "Email"=>"andi.irfanm@pnp.ac.id",
    "gambar"=>"ai.png"
    ],
    [
    "Nama"=>"Andi Irsyad", 
    "NIM"=>"1909082026",
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <style>
        img{
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $mhs ) :?>    
            <li>
                <a href="latihan2.php?
                nama=<?= $mhs["Nama"];?>&
                nim=<?= $mhs["NIM"];?> & 
                email=<?= $mhs["Email"];?> &
                prodi=<?= $mhs["Prodi"];?> &
                gambar=<?= $mhs["gambar"];?>"><?= $mhs["Nama"];?></a>
            </li>
    <?php endforeach;?>
    </ul>
</body>
</html>