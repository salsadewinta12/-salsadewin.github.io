<?php
$host="sql312.freesite.vip";
$user="frsiv_29171010";
$password="salsa123";
$db="frsiv_29171010_caca";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon)
{
		die("Koneksi gagal:".mysqli_connect_error());
}
?>
