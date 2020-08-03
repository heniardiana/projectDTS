<?php
$host="localhost";
$username="root";
$pass="";
$dbname="db_user";

$koneksi = mysqli_connect($host,$username,$pass,$dbname);

//Check Connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal :".
		mysqli_connect_errno();
}else
{echo"Koneksi Berhasil";
}

?>