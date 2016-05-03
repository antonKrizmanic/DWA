<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dodavanje poslovnice</title>
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
			<div class="col-xs-12 col-md-4">
				<form id="insert-location-form">
			        <div class="form-group">
			          <label for="location-city">Grad:</label>
			          <input type="text" id="location-city" name="location-city" class="form-control"  placeholder="Grad u kojem se poslovnica nalazi" required>
			        </div>
			        <div class="form-group">
			          <label for="location-adress"> Adresa:</label>
			          <input type="text" id="location-adress" name="location-adress" class="form-control"  placeholder="Adresa poslovnice" required>
			        </div>
			        <div class="row">
			        	<div class="form-group col-xs-6">
			        	  <label for="location-phone">Broj telefona:</label>
			        	  <input type="text" id="location-phone" name="location-phone"class="form-control"  placeholder="Broj telefona" required>
			        	</div>
			        	<div class="form-group col-xs-6  ">
			        	  <label for="location-mail">Email:</label>
			        	  <input type="text" id="location-mail" name="location-mail"  class="form-control" placeholder="Email poslovnice" required>
			        	</div>
			        </div>
			        <div class="form-group">
			          <label for="location-working-time">Radno vrijeme:</label>
			          <input type="text" id="location-working-time" name="location-working-time" class="form-control"  placeholder="Radno vrijeme"required>
			        </div>

		            <a href="locations.php" class="btn btn-info" >Odustani</a>
		            <button type="submit" class="btn btn-primary ">Spremi</button>
				</form>
			</div>
		</div>
	</div>
	<?php
	include("footer.php");
	?>
</body>
</html>
