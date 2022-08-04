<?php
//array
//adalah variabel yang dapat memiliki banyak nilai
//elemen pada array boleh memiliki tipe data yang berbeda
//memiliki nilai index yang dimulai dari nol

//cara membuat array
//cara lama
$hari = array("senin", "selasa", "rabu", "kamis", "jum'at", "sabtu", "minggu");
//cara baru
$bulan = ["januari", "Februari", "maret"];
$arr1 = [123, "satu dua tiga", false];

//menampilkan array
//var_dump() / print_r
var_dump($hari);
echo "</br>";
print_r($bulan);
echo "</br>";
//menampilkan satu elemen pada array
echo $arr1[0];
echo "</br>";
echo $bulan[1];

//menambahkan satu elemen pada array
$bulan[] = "april";
$bulan[] = "mei";
$bulan[] = "juni";
var_dump($bulan);