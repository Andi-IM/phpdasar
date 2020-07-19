<?php
// Pertemuan 2 - PHP dasar
// Sintaks PHP

//Standar Output
// echo, print
// print_r --> debugging
// var_dump --> debugging

// penulisan sintaks dalam PHP
// 1. PHP di dalam HTML
// 2. HTML  di dalam PHP

// Variabel dan Tipe data
// Variabel
// Tidak boleh diawali oleh angka, tapi boleh mengandung angka
// $nama = "Andi Irham";
// echo "Halo, nama saya $nama";

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x+$y;

// penggabung string / concatenation / concat
// .
// $nama_depan = "Andi";
// $nama_belakang = "Irham";
// echo $nama_depan . " " . $nama_belakang

// Assignment
//  = += -= *= /= %= .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Andi";
// $nama .= " ";
// $nama .= "Irham";
// echo $nama;

// Perbandingan
//  < > <= >= == !=
// var_dump(1 == "1");

// Indetitas
// === !==
// var_dump(1 === "1");


// Logika
// && || !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
   
</body>
</html>