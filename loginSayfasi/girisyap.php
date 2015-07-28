<meta charset="utf-8">
<?php
 error_reporting(0); 
session_start();
$zaman = date('d.m.Y H:i:s');
echo "oturum açama zamanı:  $zaman  <br>";

include "baglan.php";

$kullaniciadi = $_POST["kullaniciadi"];
$sifre = $_POST["sifre"];
$parola = md5($sifre);

if($kullaniciadi === "" || $sifre ===""){

	echo "bos alan birakmayiniz";
	header("Refresh:3 ; url = girisyap.php");

}else{

	if ($kullaniciadi && $sifre) {
		$_SESSION["kullaniciadi"] = $kullaniciadi;

		$sorgula = mysql_query("select * from uyeler where kullanici_adi = '$kullaniciadi' and sifre = '$parola'");
		$verisay = mysql_num_rows($sorgula);
		if ($verisay > 0) {

			echo '<b>Hosgeldin </b>'.$_SESSION["kullaniciadi"];
			echo '<br>';
			echo '<br>';
			echo '<a href= "cikis.php"> cikis yap </a>';


		}else{
			echo "kullanici adi veya sifre yanlis";
			header("Refresh:3 ; url = giris.php");
			 
			}
		}
		# code...
	}



?>