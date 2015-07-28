<?php

error_reporting(0); 
include "baglan.php";

$kullaniciadi = $_POST["kullaniciadi"];
$soyadi = $_POST["soyadi"];
$sifre = $_POST["sifre"];
$sifre2 = $_POST["sifre2"];
$mail = $_POST["mail"];
$parola = md5($sifre);


if($kullaniciadi === "" || $soyadi === "" || $sifre === "" || $sifre2 === "" || $mail === "")
{
	echo "Bos Alan Birakmayiniz Lutfen!";
	header('Refresh:3; url=index.php');
}
else
{
	if ($sifre != $sifre2) {

		echo "Sifeler Uyusmadi! Tekrar deneyin";
		header('Refresh:3; url=index.php');
	}else{

		if (!filter_var($mail,FILTER_VALIDATE_EMAIL)) {

			echo "Gecersiz mail Formati";
			header('Refresh:3; url=index.php');
			# code...
		}else{
				$kayit = mysql_query("insert into uyeler(kullanici_adi, soyadi, sifre, mail) values ('".$kullaniciadi."','".$soyadi."','".$parola."','".$mail."')");
				if($kayit) {

					echo "Kayit Basariyla Tamamlandi";
					header('Refresh:3; url=giris.php');
					
				}else{
					echo "Bir sorun olustu";

				}
				mysql_close($baglanti);
			

		}
	}
}


?>