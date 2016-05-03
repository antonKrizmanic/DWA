<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kontakt</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="../css/icons/css/fontello.css"><!--ikone-->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:600,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
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
			<div class="col-sm-6 margin">
				<div class="row">
					<div class="col-xs-6 col-sm-12 col-md-6">
							            <h3>Poslovnica Zagreb</h3>
							            <p><strong>Adresa:</strong><span>Vrbik VII</span></p>
							            <p><strong>Tel:</strong><span>01-165-0211</span></p>
							            <p><strong>Email:</strong><span>poslovnicazagreb@nasatrvtka.com</span></p>
							            <p><strong>Radno vrijeme:</strong><span>08:00-16:00</span></p>
					</div>
					<div class="col-xs-6 col-sm-12 col-md-6">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d983.5046279976758!2d15.966303256200064!3d45.795812002602155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d68c95a9b349%3A0xf3ee56b52d4070ed!2sVRBIK!5e0!3m2!1shr!2shr!4v1462129309188" frameborder="0" class="img-responsive" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>

			<div class="col-sm-6 margin">
				<div class="row">
					<div class="col-xs-6 col-sm-12 col-md-6">
							            <h3>Poslovnica Zagreb</h3>
							            <p><strong>Adresa:</strong><span>Vrbik VII</span></p>
							            <p><strong>Tel:</strong><span>01-165-0211</span></p>
							            <p><strong>Email:</strong><span>poslovnicazagreb@nasatrvtka.com</span></p>
							            <p><strong>Radno vrijeme:</strong><span>08:00-16:00</span></p>
					</div>
					<div class="col-xs-6 col-sm-12 col-md-6">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d983.5046279976758!2d15.966303256200064!3d45.795812002602155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d68c95a9b349%3A0xf3ee56b52d4070ed!2sVRBIK!5e0!3m2!1shr!2shr!4v1462129309188" frameborder="0" class="img-responsive" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>

			<div class="col-sm-6 margin">
				<div class="row">
					<div class="col-xs-6 col-sm-12 col-md-6">
							            <h3>Poslovnica Zagreb</h3>
							            <p><strong>Adresa:</strong><span>Vrbik VII</span></p>
							            <p><strong>Tel:</strong><span>01-165-0211</span></p>
							            <p><strong>Email:</strong><span>poslovnicazagreb@nasatrvtka.com</span></p>
							            <p><strong>Radno vrijeme:</strong><span>08:00-16:00</span></p>
					</div>
					<div class="col-xs-6 col-sm-12 col-md-6">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d983.5046279976758!2d15.966303256200064!3d45.795812002602155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d68c95a9b349%3A0xf3ee56b52d4070ed!2sVRBIK!5e0!3m2!1shr!2shr!4v1462129309188" frameborder="0" class="img-responsive" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
		<div class="row forma">
			<div class="col-lg-3">
				<h3>Pošaljite nam upit!</h3>
				<p>Ukoliko imate pitanje slobodno nam posaljite upit.</p>
				<form action="#">
					<div class="form-group">
						<label for="contact-name" class="control-label col-lg-2 no-padding">Ime:</label>
						<input type="text" name="contact-name" id="contact-name" placeholder="Vase ime" class="form-control">
					</div>
					<div class="form-group">
						<label for="contact-mail" class="control-label col-lg-2 no-padding">Email:</label>
						<input type="mail" name="contact-mail" id="contact-mail" placeholder="Vas mail" class="form-control">

					</div>
					<div class="form-group">
						<label for="contact-phone" class="control-label col-lg-2 no-padding">Telefon:</label>
						<input type="number" name="contact-phone" id="contact-phone" placeholder="Vas broj telefona" class="form-control">

					</div>
					<div class="form-group">
						<label for="contact-message" class="control-label col-lg-2 no-padding">Poruka:</label>
						<textarea name="contact-message" id="contact-message" class="form-control"></textarea>

					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Posalji poruku</button>
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
