<?php
$host = "localhost";
$user = "adminklinik";
$pass = "312010040";
$db = "klinik_312010040";
$con = mysqli_connect('localhost','adminklinik','312010040','klinik_312010040');

if ($con == false)
{

	echo "Koneksi ke server gagal.";
	die();

} else echo "";
?>