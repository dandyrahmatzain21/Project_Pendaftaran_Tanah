<?php

define('proteksi',1);
defined('proteksi') or die ('tidak boleh mengakses langsung');

$no_panitia=$_GET['no_panitia'];
$sql_hapus_no_panitia=mysqli_query($koneksi,"DELETE FROM table_panitia where no_panitia='$no_panitia'");

echo '<meta http-equiv="refresh" content="0.1;url=index.php?file=panitia">';
?>