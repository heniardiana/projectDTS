<?php 
session_start();

include 'koneksi.php';

// menangkap data yang dikirimkan dari form login
$username = $_POST['username'];
$password = $_POST['password'];

$queri = mysqli_query($koneksi,"select * from tb_user where username='$username' and password='$password'");

$cek = mysqli_num_rows($queri);

if($cek > 0){

	$data = mysqli_fetch_assoc($queri);

	if($data['level']== 10){

		$_SESSION['admin'] = $username;
		//$_SESSION['level'] == 10;
		echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="Admin/index.php";</script>';

	}
	else if ($data['level']==20){

		$_SESSION['guest'] = $username;
		//$_SESSION['level']==20;

		echo '<script language="javascript">alert("Anda berhasil Login Guest!"); document.location="User/index.php";</script>';

	}
	// else{

	// 	echo '<script language="javascript">alert("Anda tidak dikenali!"); document.location="loginuser.php";</script>';

	 }
	else{ echo '<script language="javascript">alert("Login gagal!"); document.location="login.php";</script>';} 
 ?>