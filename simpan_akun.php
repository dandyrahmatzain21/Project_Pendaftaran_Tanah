<?php
include('koneksi.php');

$username=$_POST['username'];
$password=$_POST['password'];

$sql_cek_akun=mysqli_query($koneksi,"SELECT * FROM akun WHERE username='$username'")or die(mysqli_error($koneksi));
if(mysqli_num_rows($sql_cek_akun)==1){
	echo'<script>alert(\'User Sudah Terdaftar\')</script>';
	echo'<META HTTP-EQUIV="refresh" CONTENT="0.01;register.php">';
}else{
	mysqli_query($koneksi,"INSERT INTO akun(username,password)VALUES('$username',MD5('$password'))")or die(mysqli_error($koneksi));
	echo'<META HTTP-EQUIV="refresh" CONTENT="0.01;login.php">';
}
?>