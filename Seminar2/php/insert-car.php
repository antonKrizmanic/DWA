<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dodavanje auta</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<?php
		include("header-navigation.php");
		include("login-registration.php");
	?>
	<div class="container">
		<h3>Dodavanje/izmjena vozila</h3>
		<form action="#">
			<div class="row">
				<div class="form-group col-lg-4">
					<label for="ime" class="control-label">Ime auta:</label>				
					<input type="text" name="ime" id="ime" placeholder="Ime automobila" class="form-control">				
				</div>
			</div>
			<div class="row">
				<div class="form-group col-lg-4">
					<label for="ime" class="control-label">Vrsta vozila:</label>				
					<select name="auti_vrsta" id="auti_vrsta" class="form-control">
						<option value="1">Mini</option>
						<option value="2">Obiteljski</option>
						<option value="3">Luksuzni</option>
						<option value="4">Teretni</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-lg-4">
					<label for="mjenjac_vrsta" class="control-label">Vrsta mjenjaca:</label>				
					<select name="mjenjac_vrsta" id="mjenjac_vrsta" class="form-control">
						<option value="1">Rucni</option>
						<option value="2">Automatski</option>						
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-lg-4">
					<label for="br_vrata" class="control-label">Broj vrata:</label>				
					<input type="number" name="br_vrata" id="br_vrata" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-lg-4">
					<label for="slika" class="control-label">Slika:</label>				
					<input id="slika" type="file">
				</div>
			</div>		
			<input type="submit" class="btn btn-primary" value="Dodaj">
			
			
		</form>
	</div>
	<?php
		include("footer.php");
	?>
</body>
</html>