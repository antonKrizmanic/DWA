<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kontakt</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="../css/icons/css/fontello.css"><!--ikone-->
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<?php
  		include("header-navigation.php");
  		include("login-registration.php");
	?>
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h3>Kontakt</h3>				
			</div>
		</div>
		<div class="row">
			<!--Generiranje kroz php-->
			<div class="col-md-6 col-sm-12 margin">				
				<div class="col-sm-6 no-padding">					
		            <h3>Poslovnica Zagreb</h3>
		            <p><strong>Adresa:</strong><span>Vrbik VII</span></p>		            
		            <p><strong>Tel:</strong><span>01-165-0211</span></p>		            
		            <p><strong>Email:</strong><span>poslovnicazagreb@nasatrvtka.com</span></p>
		            <p><strong>Radno vrijeme:</strong><span>08:00-16:00</span></p>           
				</div>
				<div class="col-sm-6 no-padding">
					<img src="http://placehold.it/350x250" alt="" class="img-responsive">
				</div>
			</div>

			<div class="col-md-6 col-sm-12 margin">				
				<div class="col-sm-6 no-padding">					
		            <h3>Poslovnica Split</h3>
		            <p><strong>Adresa:</strong><span>Vrbik VII</span></p>		            
		            <p><strong>Tel:</strong><span>01-165-0211</span></p>		            
		            <p><strong>Email:</strong><span>poslovnicazagreb@nasatrvtka.com</span></p>
		            <p><strong>Radno vrijeme:</strong><span>08:00-16:00</span></p>           
				</div>
				<div class="col-sm-6 no-padding">
					<img src="http://placehold.it/350x250" alt="" class="img-responsive">
				</div>
			</div>

			<div class="col-md-6 col-sm-12 margin">				
				<div class="col-sm-6 no-padding">					
		            <h3>Poslovnica Rijeka</h3>
		            <p><strong>Adresa:</strong><span>Vrbik VII</span></p>		            
		            <p><strong>Tel:</strong><span>01-165-0211</span></p>		            
		            <p><strong>Email:</strong><span>poslovnicazagreb@nasatrvtka.com</span></p>
		            <p><strong>Radno vrijeme:</strong><span>08:00-16:00</span></p>           
				</div>
				<div class="col-sm-6 no-padding">
					<img src="http://placehold.it/350x250" alt="" class="img-responsive">
				</div>
			</div>
		</div>
		<div class="row forma">
			<div class="col-lg-3">
				<h3>Pošaljite nam upit!</h3>
				<p>Ukoliko imate pitanje slobodno nam posaljite upit.</p>
				<form action="#">
					<div class="form-group">
						<label for="ime" class="control-label col-lg-2 no-padding">Ime:</label>						
						<input type="text" name="ime" id="ime" placeholder="Vase ime" class="form-control">						
					</div>
					<div class="form-group">
						<label for="mail" class="control-label col-lg-2 no-padding">Email:</label>						
						<input type="mail" name="mail" id="mail" placeholder="Vas mail" class="form-control">
						
					</div>
					<div class="form-group">
						<label for="tel" class="control-label col-lg-2 no-padding">Telefon:</label>						
						<input type="number" name="tel" id="tel" placeholder="Vas broj telefona" class="form-control">
						
					</div>
					<div class="form-group">
						<label for="poruka" class="control-label col-lg-2 no-padding">Poruka:</label>						
						<textarea name="poruka" id="poruka" class="form-control"></textarea> 
						
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-default">Posalji poruku</button>	    				
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php
		include("footer.php");
	?>
</body>
</html>