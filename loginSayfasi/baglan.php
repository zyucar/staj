<?php

$host = "localhost";
$kullaniciadi = "root";
$sifre = "";
$vt = "egitim";

$baglanti = mysql_connect("localhost","root","") or die("baglanti basarisiz");
mysql_select_db("egitim");

mysql_query("set character set 'utf-8'");
mysql_query("set names 'utf-8'");




?>