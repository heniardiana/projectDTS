<?php 

include 'koneksi.php';

$nama 		=$_POST['nama'];
$email		=$_POST['email'];
$subject	=$_POST['subject'];
$pesan 		=$_POST['pesan'];
$tanggal	=$_POST['tanggal'];
// menginput data database
mysqli_query($koneksi, "insert into tb_komen values('','$nama','$email','$subject','$pesan','$tanggal')");
//mengalihkan ke halaman index.php
header("location:index.php");
?>