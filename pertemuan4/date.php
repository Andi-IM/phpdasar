<?php
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
?>