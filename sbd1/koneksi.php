<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "klinik_312010040";
$con = mysqli_connect('localhost','root','','klinik_312010040');

if ($con == false)
{

	echo "Koneksi ke server gagal.";
	die();

} else echo "";
?>