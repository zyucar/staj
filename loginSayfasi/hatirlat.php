
<meta charset="utf-8">
<?php 
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(0);
$host_adi = "localhost";
$veritabani = "egitim";
$kullanici = "root";
$sifre_vt = "";
$hepsi_vt = mysql_pconnect($host_adi, $kullanici, $sifre_vt) or trigger_error(mysql_error(),E_USER_ERROR);  ?>
<?php
$kolonadi_hatirlat_sifre = "-1";
if (isset($_POST['mail'])) {
  $kolonadi_hatirlat_sifre = (get_magic_quotes_gpc()) ? $_POST['mail'] : addslashes($_POST['mail']);
}
mysql_select_db($veritabani, $hepsi_vt);
$sorgumuz = sprintf("SELECT * FROM uyeler WHERE mail = '%s'", $kolonadi_hatirlat_sifre);
$hatirlat_sifre = mysql_query($sorgumuz, $hepsi_vt) or die(mysql_error());
$satirlar = mysql_fetch_assoc($hatirlat_sifre);
$toplam_sonuc = mysql_num_rows($hatirlat_sifre);
 ?>
<?php if ($toplam_sonuc > 0) { ?>
          <?php 
$ad = "Semih VURAL"; 
$email = "sifre@webasistani.com";
$url = "http://";
$konu = "Şifre Hatırlatma";
$kullanici = $satirlar['kullanici_adi'];
$sifre = $satirlar['sifre'];
$giris = "<a href=".$url."localhost/loginSayfasi/sifre_talep.php>Sisteme Giriş Yapmak İçin Tıklayın. </a>";
$mailtanim = "MIME-Version: 1.0\r\n"; 
$mailtanim .= "Content-Type: text/html; charset=\"windows-1254\"\r\n"; 
$mailtanim .= "From: $ad <$email>\r\n"; 
$mailtanim .= "Reply-To: $ad <$email>\r\n"; 
$hepsi = "<strong>Gönderici :</strong> ".$ad."<br><strong>Sistem E-Postası :</strong> ".$email."<br><strong>Konu :</strong> ".$konu."<br><strong>Kullanıcı Adınız :</strong> ".$kullanici."<br><strong>Şifreniz :</strong> ".$sifre."<br><strong>Sistem Giriş Yolu :</strong> ".$giris."<br>"; 

mail($satirlar['email'], $konu ,stripslashes($hepsi), $mailtanim); 
?>
Sayın, <?php echo $_POST['mail']; ?> Şifreniz Mail Adresinize Gönderildi.
<?php } ?>
<?php if ($toplam_sonuc == 0) { ?> Böyle Bir Kullanıcı Sistemde Yok! 
<a href="javascript:history.go(-1)"><span class="style46">Tekrar Denemek İçin TIKLAYIN</a>
<?php } ?>
<?php
mysql_free_result($hatirlat_sifre);
?>