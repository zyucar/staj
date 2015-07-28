	<meta charset="utf-8">
<?php

session_start();
$cikis = date('d.m.Y H:i:s');
session_destroy();

			echo "çıkış yapma zamanı: $cikis <br>";
echo 'Basariyla cikis yaptiniz yonlendriliyorsunuz.';
header('Refresh:3; url=giris.php');