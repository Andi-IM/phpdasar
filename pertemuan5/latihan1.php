<?php
// array
// array adalah variabel yang dapat 
// memiliki banyak nilai.
// elemen pada array boleh memiliki tipe data yang berbeda.
// pasangan antara key dan value 
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin",'Selasa',"Rabu");
// cara baru
$bulan = ["Januari","Februari","Maret"];
$arr1 = [123, "Tulisan", false];

// menampilkan Array
// var_dump() / print_r()

// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array;
echo $bulan[0];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] ="Kamis";
echo "<br>";
var_dump($hari);
$hari[] ="Jumat";
echo "<br>";
var_dump($hari);
?>