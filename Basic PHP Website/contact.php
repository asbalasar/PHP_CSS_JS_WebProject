<?php
include("baglanti.php");

include "header.php";
?>


	<!-- about section -->
	<section class="contact text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2>İletişime Geçin</h2>
					<span>Bana istediğiniz soruyu sormaktan çekinmeyin. :)
					
					</span>
					<form action="?" class="form-horizontal">
						<input type="text" class="form-control" placeholder="İsim-Soyisim" required>
						<input type="email" class="form-control" placeholder="Email adresiniz" required>
						<input type="text" class="form-control" Placeholder="Telefon Numaranız">
						<textarea rows="5" class="form-control" placeholder="Mesajınızı buraya yazabilirsiniz..." required></textarea>
						<select class="form-control">
							<option>---İletişime geçme nedeni---</option>
							<option>Gezdiğim Yerler</option>
							<option>Gezi Rotam</option>
							<option>Bisikletim</option>
							<option>Özel Hayatım</option>
							<option>Diğer</option>
						
						</select>
						<input type="submit" class="form-control" value="GÖNDER!">
					</form>
				</div>
			</div>
		</div>
	</section>
 <?php

include "footer.php";
?>
