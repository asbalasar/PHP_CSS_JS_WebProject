<?php

include("baglanti.php");
?>

<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Bisiklet Gezgini - Ahmet Said Balasar</title>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- Google fonts -->
	<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<!-- modernizr -->
	<script src="js/modernizr.js"></script>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>


<body>
<?php


    $hata="";
	$giris=isset($_POST["giris"])? $_POST["giris"]:"";
	if ($giris){		
		$email=addslashes($_POST["email"]);
		$password=addslashes($_POST["password"]);
		if ($email && $password) {
			$sql="SELECT id,email FROM kullanici WHERE email='$eemail' and password='$password'";
			$kayit=mysql_query($sql);
			 if (mysql_num_rows($kayit)>0) {
				 $kullanici = mysql_fetch_array($kayit);
				 $_SESSION["login"]=$kullanici["email"];
				 header("Location:index.php?sayfa=admin");
				 die();
			 } 
			 else
			   $hata="E-posta veya parolanızda hata var.";
	    }
	}
?>
<script>
 function kayit_kontrol(){
	f = document.forms['giris_form'];
	uyari_div= document.getElementById('uyari_div'); 
	var uyari = '';
	var hatalar = '';
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (f.email.value.trim() == '' || reg.test(f.email.value) == false) hatalar = hatalar + '<font color="red" size="2"><bold>- E-posta adresinizi düzgün giriniz.<br></font>';
	if (f.password.value.trim() == '' || f.password.value.length<4) hatalar = hatalar + '<font color="red" size="2"><bold>- En az 4 karekterli password giriniz.<br></font>';
	if (hatalar!='') {
		uyari_div.visible=true;
		uyari_div.innerHTML=hatalar;		
		return false;
	} else {return true;}
 }
</script>
<div class="container padTop20"> <!-- SLİDER ÇUBUĞU -->
<div class="row" align="center">
<div class="panel-body" id="login" style="width:250px">      
	<form method="post" name="giris_form" id="giris_form" onsubmit="return kayit_kontrol();" action="index.php?sayfa=giris"> 
      	  <h4 class="text-center">GİRİŞ</h4>
		  <div class="uyari_div" id="uyari_div"></div>      
		  <? echo $hata;?>
	      <p> <input type="text" name="email" value="" class="form-control" placeholder="E-posta"></p>		   
	       <div class="form-group password-strength"> 
			<p><input type="password" name="password" class="form-control" value="" placeholder="password"></p>
			</div>
	   	    
		<p class="submit"><input type="reset" name="vazgec" value="Vazgeç" class="btn btn-danger"> 
		<input type="submit" name="giris"  value="Giriş" class="btn btn-success"> </p>
      </form>
</div>
</div>
</div>
<br>
</body>
</html>