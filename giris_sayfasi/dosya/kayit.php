<?php
include "baglan.php";

$name = $_POST["name"];
$password = $_POST["password"];
$password = md5($sifre);

if($name === "" || $password ===""){

	echo "bos alan birakmayiniz";
	header("Refresh:3 ; url = giris.php");

}else{

	if ($name && $password) {
		$_SESSION["name"] = $name;

		$sorgula = mysql_query("select * from uyeler where kullanici_adi = '$name' and sifre = '$password'");
		$verisay = mysql_num_rows($sorgula);
		if ($verisay > 0) {
			$zaman = date('d.m.Y H:i:s');
			echo "oturum açma zamanı:  $zaman  <br>";
			echo '<b>Hosgeldin </b>'.$_SESSION["name"];
			echo '<br>';
			echo '<br>';
			echo '<a href= "cikis.php"> cikis yap </a>';


		}else{
			echo "kullanici adi veya sifre yanlis";
			header("Refresh:3 ; url = index.php");
			 
			}
		}
		# code...
	}

?>