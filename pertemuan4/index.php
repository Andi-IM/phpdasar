<?php
//function
// potongan program yang dibuat untuk 
// mempermudah 
// . Built-in Function
// . User-Defined Function

// Built-In Function
// Fungsi yang dibuat oleh PHP
// .Date/Time -> berhubungan dengan waktu
//  - time()
//  - date()
//  - mktime()
//  - strtotime()

// DATE FUNCTIONS
// --------------
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d M Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("l, d M Y", time()+60*60*24*100);

// mktime
// membuat detik sendiri
// mktime(0,0,0,0,0,0);
// jam,menit,detik,bulan,tanggal,tahun
// echo date("l, d M Y",mktime(0,0,0,3,22,2001));

// strtotime
// kebalikan dari mktime
// echo strtotime("22 Mar 2001");
// echo date("l, d M Y", strtotime("22 Mar 2001"));

// STRING FUNCTIONS
// ----------------
// strlen()
// untuk menghitung length string

// strcmp()
// string compare untuk gabung string 

// explode()
// memecah string jadi array

// htmlspecialchars()
// func untuk mencegah akses dari luar

// ULTILITY FUNCTIONS
// ------------------
// var_dump()
// debugging, mecetak isi dari variable array obj

// isset() --> boolean
// cek apakah variabel pernah dibikin
// jika pernah -> false

// empty() --> boolean
// cek apakah variabel ada isi atau tidak

// die()
// stopping program

// sleep()
// memberhentikan program sementara


echo "Pertemuan 4";
?>