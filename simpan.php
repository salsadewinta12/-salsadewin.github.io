<?php
	include "koneksi.php";
	$nama			=$_POST['nama'];
	$email			=$_POST['email'];
	$tlp			=$_POST['tlp'];
    $pesan			=$_POST['pesan'];
		
		$query=mysqli_query($kon, "INSERT INTO tb_tambah VALUES ('$nama','$email','$tlp','$pesan')");
        //$query = mysqli_query($sql);
?>