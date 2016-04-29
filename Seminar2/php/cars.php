<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Flota</title>
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
			<div class="col-lg-4 col-xs-8">
				<h3>Flota</h3>
				<!--link samo ako je admin-->
				<a href="insert-car.php" class="btn btn-info margin">Dodaj auto</a>
				<p>U ponudi nudimo sve vrste vozyila, od malih gradskih, luksuznih do vozila s teretnim prostorom.</p>
				<div class="col-xs-6 no-padding">
					<select name="auti_sort" id="auti_sort" class="form-control">
						<option value="1">Mini</option>
						<option value="2">Obiteljski</option>
						<option value="3">Luksuzni</option>
						<option value="4">Teretni</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<!--Generiranje kroz php-->
			<div class="col-sm-6  margin">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<img src="http://placehold.it/350x250" alt="" class="img-responsive">
					</div>
					<div class="col-sm-12 col-md-6">					
							            <p><strong>Ime auta:</strong> <span>WW Up!</span></p>		            
							            <p><strong>Tip auta:</strong><span>Mini</span></p>		            
							            <p><strong>Tip mjenjaca:</strong> <span>Rucni</span></p>		            
							            <p><strong>Broj vrata:</strong> <span>3</span></p>		            
							            <p><strong>Broj putnika:</strong> <span>4</span></p>
							            <!--link samo ako je admin-->
							            <a href="insert-car.php" class="btn btn-danger">Izmjeni auto</a>		            
					</div>
				</div>
			</div>

			<div class="col-sm-6 margin">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<img src="http://placehold.it/350x250" alt="" class="img-responsive">
					</div>
					<div class="col-sm-12 col-md-6">					
							            <p><strong>Ime auta:</strong> <span>WW Up!</span></p>		            
							            <p><strong>Tip auta:</strong><span>Mini</span></p>		            
							            <p><strong>Tip mjenjaca:</strong> <span>Rucni</span></p>		            
							            <p><strong>Broj vrata:</strong> <span>3</span></p>		            
							            <p><strong>Broj putnika:</strong> <span>4</span></p>
							            <!--link samo ako je admin-->
							            <a href="insert-car.php" class="btn btn-danger">Izmjeni auto</a>		            
					</div>
				</div>
			</div>

			<div class="col-sm-6  margin">
				<div class="row">
					<div class="col-sm-12 col-md-6 ">
						<img src="http://placehold.it/350x250" alt="" class="img-responsive">
					</div>
					<div class="col-sm-12 col-md-6">					
							            <p><strong>Ime auta:</strong> <span>WW Up!</span></p>		            
							            <p><strong>Tip auta:</strong><span>Mini</span></p>		            
							            <p><strong>Tip mjenjaca:</strong> <span>Rucni</span></p>		            
							            <p><strong>Broj vrata:</strong> <span>3</span></p>		            
							            <p><strong>Broj putnika:</strong> <span>4</span></p>
							            <!--link samo ako je admin-->
							            <a href="insert-car.php" class="btn btn-danger">Izmjeni auto</a>		            
					</div>
				</div>
			</div>

		</div>
	</div>
	<?php
		include("footer.php");
	?>
</body>
</html>