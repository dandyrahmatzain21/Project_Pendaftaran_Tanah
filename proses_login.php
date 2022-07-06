<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];

if($username=='admin' && $password=='123'){
	$_SESSION['session_cek']=TRUE;
	$_SESSION['username']=$username;
	echo'<meta http-equiv="refresh" content="0.1;url=index.php">';
}else{
	echo'<meta http-equiv="refresh" content="0.1;url=login2.php">';
}
?>