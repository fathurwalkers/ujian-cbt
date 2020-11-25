<?php
date_default_timezone_set('Asia/Makassar');//Menyesuaikan waktu dengan tempat kita tinggal

function hariIndo ($hariInggris) {
  switch ($hariInggris) {
    case 'Sunday':
      return 'Minggu';
    case 'Monday':
      return 'Senin';
    case 'Tuesday':
      return 'Selasa';
    case 'Wednesday':
      return 'Rabu';
    case 'Thursday':
      return 'Kamis';
    case 'Friday':
      return 'Jumat';
    case 'Saturday':
      return 'Sabtu';
    default:
      return 'hari tidak valid';
  }
}

function bulanIndo ($bulanInggris) {
  switch ($bulanInggris) {
    case 'January':
      return 'Januari';
    case 'February':
      return 'Februari';
    case 'March':
      return 'Maret';
    case 'April':
      return 'April';
    case 'May':
      return 'Mei';
    case 'June':
      return 'Juni';
    case 'July':
      return 'Juli';
    case 'August':
      return 'Agustus';
    case 'September':
      return 'September';
    case 'October':
      return 'Oktober';
    case 'November':
      return 'November';
    case 'December':
      return 'Desember';
    default:
      return 'hari tidak valid';
  }
}

$hariBahasaInggris = date('l');
$hariBahasaIndonesia = hariIndo($hariBahasaInggris);

$bulanBahasaInggris = date('l');
$bulanBahasaIndonesia = bulanIndo($bulanBahasaInggris);

$tanggal = date("d");
$Tahun = date("Y");

echo $tgl = $hariBahasaIndonesia, $tanggal $bulanBahasaIndonesia $Tahun;
?>