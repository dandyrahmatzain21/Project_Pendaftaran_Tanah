<?php

define('proteksi',1);
defined('proteksi') or die ('tidak boleh mengakses langsung');

$kode_desa=$_GET['kode_desa'];
$sql_hapus_kode_desa=mysqli_query($koneksi,"DELETE FROM table_desa where kode_desa='$kode_desa'");

echo '<meta http-equiv="refresh" content="0.1;url=index.php?file=desa">';
?>