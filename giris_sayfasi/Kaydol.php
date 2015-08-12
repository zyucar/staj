
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>	</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="css/kaydol.css">
    <script type="text/javascript">
  'use strict'
    $(document).ready(function  () {
      $('#buton').click(function){
        if (form.sifre.value == "" || form.kullaniciadi.value == "" || form.soyadi.value == "" || form.mail.value == "") {
          alert("Geçersiz şifre");
        }
      }
    })
</script>
</head>


<body>
<div id="navbar">
<h3 class= "kullanici">Kullanıcı kayıt Formu</h3>
<div class = "vizyon">
<a href="index.html"><img class="resim" src="css/vizyon.jpg"></a>
</div>
</div>
<div id="form">	

<form class="form-horizontal" >
<h2 class="giris"></h2><br>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Kullanıcı Adı</label>
    <div class="col-sm-10">
      <input name="kullaniciadi" class="form-control" id="inputEmail3" placeholder="Kullanıcı Adı">
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Soyadı</label>
    <div class="col-sm-10">
      <input name="soyadi" class="form-control" id="inputEmail3" placeholder="Soyadı">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Şifre</label>
    <div class="col-sm-10">
      <input type="password" name="sifre" class="form-control" id="inputEmail3" placeholder="Şifre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Tekrar Şifre</label>
    <div class="col-sm-10">
      <input type="password" name="sifre2" class="form-control" id="inputEmail3" placeholder="Tekrar Şifre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">E-mail</label>
    <div class="col-sm-10">
      <input name="mail" class="form-control" id="inputPassword3" placeholder="E-mail">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" id="buton">Kayıt ol</button>
    </div>
  </div>
</form>
</body>
</html>
