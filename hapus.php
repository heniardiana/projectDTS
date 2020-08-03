<?php
	// koneksi database
	include 'koneksi.php';

	//menangkap data id yang dikirim dari url
	$id= $_GET['id'];
	$query = "delete from tb_komen where id='$id'";

	//menghapus data dari database
	mysqli_query($koneksi, $query);

	header('location:Admin/pages/examples/komentar.php');

?>