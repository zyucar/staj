
		
		<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    
    <link rel="stylesheet" type="text/css" href="css/giris.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">
		<script type="text/javascript" src="jquery-1.11.2.min.js"></script>
		
    <!-- Custom styles for this template -->
  

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">

      <form class="form-signin" action="girisyap.php" method="post">
        <h2 class="form-signin-heading"> Lütfen Giriş Yap</h2>
       <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">@</span>
  <input type="text" name="kullaniciadi" class="form-control" placeholder="Kullanıcı adı" aria-describedby="basic-addon1">
</div>
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">@</span>
  <input type="password" name="sifre" class="form-control" placeholder="Şifre" aria-describedby="basic-addon1">
</div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Beni hatırla
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Giriş yap</button>
        </form>
        <form  class="form-signin" action="sifre_talep.php" method="post">
        <button class="btn btn-lg btn-primary btn-block" type="submit" action="sifre_talep.php" method="post">Şifremi unuttum</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
  </body>
</html>
