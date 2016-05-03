<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dodavanje auta</title>
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
		<h3>Dodavanje/izmjena vozila</h3>
		<form action="#">
			<div class="row">
				<div class="form-group col-lg-4">
					<label for="insert-car-name" class="control-label">Ime auta:</label>
					<input type="text" name="insert-car-name" id="insert-car-name" placeholder="Ime automobila" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-lg-4">
					<label for="insert-car-type" class="control-label">Vrsta vozila:</label>
					<select name="insert-car-type" id="insert-car-type" class="form-control">
						<option value="1">Mini</option>
						<option value="2">Obiteljski</option>
						<option value="3">Luksuzni</option>
						<option value="4">Teretni</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-lg-4">
					<label for="insert-car-gear" class="control-label">Vrsta mjenjaca:</label>
					<select name="insert-car-gear" id="insert-car-gear" class="form-control">
						<option value="1">Rucni</option>
						<option value="2">Automatski</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-lg-4">
					<label for="insert-car-door" class="control-label">Broj vrata:</label>
					<input type="number" name="insert-car-door" id="insert-car-door" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-lg-4">
					<label for="insert-car-image" class="control-label">Slika:</label>
					<input type="file" name="insert-car-image" id="insert-car-image" class="form-control">
				</div>
			</div>
			<a href="cars.php" class="btn btn-info" >Odustani</a>
			<!--ako se izmjenjuje auto neka pise spremi promjene ili samo spremi-->
			<input type="submit" class="btn btn-primary" value="Dodaj">


		</form>
	</div>
	<?php
		include("footer.php");
	?>
</body>
</html>
