<?php
// Ayarlar


$action = isset($_POST["action"]) ? $_POST["action"] : "";
if (empty($action)) {

	$output = "<div style='display:none'>
	<div class='contact-top'></div>
	<div class='contact-content'>
		<h1 class='contact-title'>Giriş yapınız:</h1>
		<div class='contact-loading' style='display:none'></div>
		<div class='contact-message' style='display:none'></div>
		<form action='#' style='display:none'>
			<label for='contact-name'>*İsim:</label>
			<input type='text' id='contact-name' class='contact-input' name='name' tabindex='1001' />
			<label for='contact-email'>*Parola:</label>
			<input type='password' id='contact-email' class='contact-input' name='password' tabindex='1002' />";


	$output .= "
			<label>&nbsp;</label>
			<button type='submit' class='contact-send contact-button' tabindex='1006'>Gönder</button>
			<button type='submit' class='contact-cancel contact-button simplemodal-close' tabindex='1007'>Vazgeç</button>
			<br/>
			 
		</form>
	";
	



	echo $output;
}
else if ($action == "send") {

	$name = isset($_POST["name"]) ? $_POST["name"] : "";
	$email = isset($_POST["password"]) ? $_POST["password"] : "";



}
error_reporting(0); 
include "baglan.php";

session_start();
$name = $_POST["name"];
$password = $_POST["password"];
$parola = md5($password);

if($name === "" || $password ===""){

	echo "bos alan birakmayiniz";
	header("Refresh:3 ; url = giris.php");
}
else{

	if ($name && $password) {
		$_SESSION["name"] = $name;
		$sorgula = mysql_query("select * from uyeler where kullanici_adi= '$name' and sifre = '$parola'");
		
		$verisay = mysql_num_rows($sorgula);
		if ($verisay > 0 ) {
			$zaman = date('d.m.Y H:i:s');
			$kayit = mysql_query("insert into oturumacma(kullanici_adi, sifre, zaman) values ('$name','$parola','$zaman')");
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

	// Build header
	


	if (function_exists('mb_encode_mimeheader')) {
		$subject = mb_encode_mimeheader($subject, "UTF-8", "B", "\n");
	}
	else {

	}
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/plain; charset=utf-8\n";
	$headers .= "Content-Transfer-Encoding: quoted-printable\n";




exit;

?>