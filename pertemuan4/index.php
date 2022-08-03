<?php
//function
//built-in function
//user-defined function

//built-in function
//date / time
//time()
//date()
//mktime()
//strtotime()

//untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

//time
//unix timestamp // EPOCH time
//detik yang sudah berlalu sejak 1 Januari 1970
// echo time();

// echo date("l - d M Y", time()-60*60*24*100);

//mktime()
//membuat sendiri detik
//mktime(0,0,0,0,0,0)
//jam, menit, detik, bulan, tanggal, tahun
// echo date("l - d M Y", mktime(0,0,0,8,14,1999));
echo date("h A");

//str to time
// echo date("l", strtotime("14 aug 1999"));

//==>String
//Strlen()
//Strcmp()
//explode()
//htmlspecialchars()

//==>utility
//var_dump()
//isset()
//empty()
//die()
//sleep()

//===> User-defined Function
