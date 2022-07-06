<?php

define('proteksi',1);
defined('proteksi') or die ('tidak boleh mengakses langsung');

$nib=$_GET['nib'];
$sql_hapus_nib=mysqli_query($koneksi,"DELETE FROM table_permohonan where nib='$nib'");

echo '<meta http-equiv="refresh" content="0.1;url=index.php?file=pendaftaran_tanah_sistematis">';
?>