<?php
require 'pegawai.php';
//ciptakan object
$novri = new Pegawai('08545454','Novri Rizqullah','Manager','Islam','Menikah');
$aqil = new Pegawai('0882221456','Aqil Nafallruddin','Asisten','Islam','Menikah');
$arif = new Pegawai('84551226','Arif Rahman Hakim','Kabag','Islam','Menikah');
$cecep = new Pegawai('08545454','Cecep','Staff','Kristen','Belum Menikah');
$udin = new Pegawai('08545454','Udin','Staff','Budha','Belum Menikah');


$novri->gaji_pokok('Manager'); 
$aqil->gaji_pokok('Asisten'); 
$arif->gaji_pokok('Kabag');
$cecep->gaji_pokok('Staff');
$udin->gaji_pokok('Asisten');

$novri->tunjangan_jabatan();
$novri->tunjangan_keluarga();
$novri->gaji_kotor();
$novri->zakatprofesi();
$novri->gaji_bersih();



$aqil->tunjangan_jabatan();
$aqil->tunjangan_keluarga();
$aqil->gaji_kotor();
$aqil->zakatprofesi();
$aqil->gaji_bersih();


$arif->tunjangan_jabatan();
$arif->tunjangan_keluarga();
$arif->gaji_kotor();
$arif->zakatprofesi();
$arif->gaji_bersih();


$cecep->tunjangan_jabatan();
$cecep->tunjangan_keluarga();
$cecep->gaji_kotor();
$cecep->zakatprofesi();
$cecep->gaji_bersih();


$udin->tunjangan_jabatan();
$udin->tunjangan_keluarga();
$udin->gaji_kotor();
$udin->zakatprofesi();
$udin->gaji_bersih();


echo '<h3 align="center">'.Pegawai::PEGAWAI.'</h3>';
$novri->mencetak();
$aqil->mencetak();
$arif->mencetak();
$cecep->mencetak();
$udin->mencetak();
echo 'Jumlah Pegawai: '.Pegawai::$jml;