<?php

define('proteksi',1);
defined('proteksi') or die ('tidak boleh mengakses langsung');

$no_panitia=$_POST['no_panitia'];
$wilayah=$_POST['wilayah'];
$ketua=$_POST['ketua'];
$nip_ketua=$_POST['nip_ketua'];
$wk_ketua_1=$_POST['wk_ketua_1'];
$nip_wk_ketua_1=$_POST['nip_wk_ketua_1'];
$wk_ketua_2=$_POST['wk_ketua_2'];
$nip_wk_ketua_2=$_POST['nip_wk_ketua_2'];
$anggota=$_POST['anggota'];
$sekretaris=$_POST['sekretaris'];
$tanggal=$_POST['tanggal'];
$no=$_POST['no'];

$sql_update_panitia=mysqli_query($koneksi,"UPDATE table_panitia SET
 no_panitia='$no_panitia',
 wilayah='$wilayah',
 ketua='$ketua',
 nip_ketua='$nip_ketua',
 wk_ketua_1='$wk_ketua_1',
 nip_wk_ketua_1='$nip_wk_ketua_1',
 wk_ketua_2='$wk_ketua_2',
 nip_wk_ketua_2='$nip_wk_ketua_2',
 anggota='$anggota',
 sekretaris='$sekretaris',
 tanggal='$tanggal',
 no='$no'

  WHERE no_panitia='$no_panitia'") or die (mysqli_error($koneksi));

echo '<meta http-equiv="refresh" content="0.1;url=index.php?file=panitia">';
?>