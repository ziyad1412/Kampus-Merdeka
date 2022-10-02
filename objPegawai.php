<?php
require 'Pegawai.php';
//ciptakan object
$neur = new Pegawai('001','Neur','Manager','Kristen Katholik','Belum Menikah');
$salah = new Pegawai('011','Mohammed Salah','Asisten Manager','Islam','Menikah');
$abdur = new Pegawai('022','Abdurrahman','Manager','Islam','Menikah');
$ziyad = new Pegawai('033','Ziyad','Kabag','Islam','Menikah');
$salma = new Pegawai('044','Salma','Staff','Islam','Belum Menikah');
//dst ...
//cetak struktur gaji

echo '<h3 align="center">'.Pegawai::PT.'</h3>';
$neur->mencetak();
$salah->mencetak();
$abdur->mencetak();
$ziyad->mencetak();
$salma->mencetak();
//dst ...
echo 'Jumlah Pegawai: '.Pegawai::$jml;