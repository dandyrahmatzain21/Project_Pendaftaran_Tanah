<?php
include('koneksi.php');

define('proteksi',1);
defined('proteksi') or die ('tidak boleh mengakses langsung');

$kode_desa=$_POST['kode_desa'];
$desa=$_POST['desa'];
$kecamatan=$_POST['kecamatan'];
$nama_kepala_desa=$_POST['nama_kepala_desa'];
$nip_kepala_desa=$_POST['nip_kepala_desa'];
$nama_saksi_1=$_POST['nama_saksi_1'];
$tempat_lahir_saksi_1=$_POST['tempat_lahir_saksi_1'];
$tanggal_lahir_saksi_1=$_POST['tanggal_lahir_saksi_1'];
$umur_saksi_1=$_POST['umur_saksi_1'];
$agama_saksi_1=$_POST['agama_saksi_1'];
$no_ktp_saksi_1=$_POST['no_ktp_saksi_1'];
$pekerjaan_saksi_1=$_POST['pekerjaan_saksi_1'];
$alamat_saksi_1=$_POST['alamat_saksi_1'];
$nama_saksi_2=$_POST['nama_saksi_2'];
$tempat_lahir_saksi_2=$_POST['tempat_lahir_saksi_2'];
$tanggal_lahir_saksi_2=$_POST['tanggal_lahir_saksi_2'];
$umur_saksi_2=$_POST['umur_saksi_2'];
$agama_saksi_2=$_POST['agama_saksi_2'];
$no_ktp_saksi_2=$_POST['no_ktp_saksi_2'];
$pekerjaan_saksi_2=$_POST['pekerjaan_saksi_2'];
$alamat_saksi_2=$_POST['alamat_saksi_2'];
$alamat_kantor_desa=$_POST['alamat_kantor_desa'];
$nama_ppat=$_POST['nama_ppat'];
$nama_satgas_1=$_POST['nama_satgas_1'];
$nip_satgas_1=$_POST['nip_satgas_1'];
$nama_satgas_2=$_POST['nama_satgas_2'];
$hari=$_POST['hari'];
$bulan_tanggal_tahun=$_POST['bulan_tanggal_tahun'];


$sql_simpan_desa=mysqli_query($koneksi,"INSERT INTO table_desa (
	kode_desa,
	desa,
	kecamatan,
	nama_kepala_desa,
	nip_kepala_desa,
	nama_saksi_1,
	tempat_lahir_saksi_1,
	tanggal_lahir_saksi_1,
	umur_saksi_1,
	agama_saksi_1,
	no_ktp_saksi_1,
	pekerjaan_saksi_1,
	alamat_saksi_1,
	nama_saksi_2,
	tempat_lahir_saksi_2,
	tanggal_lahir_saksi_2,
	umur_saksi_2,
	agama_saksi_2,
	no_ktp_saksi_2,
	pekerjaan_saksi_2,
	alamat_saksi_2,
	alamat_kantor_desa,
	nama_ppat,
	nama_satgas_1,
	nip_satgas_1,
	nama_satgas_2,
	hari,
	bulan_tanggal_tahun

	) VALUES (
	'kode_desa',
	'$desa',
	'$kecamatan',
	'$nama_kepala_desa',
	'$nip_kepala_desa',
	'$nama_saksi_1',
	'$tempat_lahir_saksi_1',
	'$tanggal_lahir_saksi_1',
	'$umur_saksi_1',
	'$agama_saksi_1',
	'$no_ktp_saksi_1',
	'$pekerjaan_saksi_1',
	'$alamat_saksi_1',
	'$nama_saksi_2',
	'$tempat_lahir_saksi_2',
	'$tanggal_lahir_saksi_2',
	'$umur_saksi_2',
	'$agama_saksi_2',
	'$no_ktp_saksi_2',
	'$pekerjaan_saksi_2',
	'$alamat_saksi_2',
	'$alamat_kantor_desa',
	'$nama_ppat',
	'$nama_satgas_1',
	'$nip_satgas_1',
	'$nama_satgas_2',
	'$hari',
	'$bulan_tanggal_tahun'
	)") or die (mysqli_error($koneksi));


echo '<meta http-equiv="refresh" content="0.1;url=index.php?file=desa">';

?>