
<?php
include("baglanti.php");

    $hata="";
	$kaydet=isset($_POST["kaydet"])? $_POST["kaydet"]:"";
	if ($kaydet){		
		$email=addslashes($_POST["email"]);
		$password=addslashes($_POST["password"]);
		if ($email && $password) {
			$sql="INSERT INTO kullanici(email,password) VALUES('$email','$password')";
			$sonuc=@mysql_query($sql);
			$hata=$sonuc ? "kullanici kaydınız başarıyla eklendi. Giriş yapabilirsiniz.":"kullanici kaydını eklerken hata oluştu.";		
				if($sonuc==1){
					header("Location:index.php");
					die();
				}
	    }
	}
?>
<script>
 function kayit_kontrol(){
	f = document.forms['kayit_form'];
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
</h1>
<meta charset="UTF-8"/>


<div class="container padTop20"> <!-- SLİDER ÇUBUĞU -->
<div class="row" align="center">
<div class="panel-body" id="login" style="width:250px">      
	<form method="post" name="kayit_form" id="kayit_form" onsubmit="return kayit_kontrol();" action="uyeol.php"> 
      	  <h4 class="text-center">ÜYE OL</h4>
		  <div class="uyari_div" id="uyari_div"></div>      
		  <?php echo $hata;?>
          <p> <input type="text" name="email" value="" class="form-control" placeholder="E-posta"></p>		
	       <div class="form-group password-strength"> 
			<p><input type="password" name="password" class="form-control" value="" placeholder="password"></p>
			</div>
	   	    
		<p class="submit"><input type="reset" name="vazgec" value="Vazgeç" class="btn btn-danger"> 
		<input type="submit" name="kaydet" value="Kaydet" class="btn btn-success"> </p>
      </form>
</div>
</div>
</div>
<br>
</body>
</html>