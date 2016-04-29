<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
			<div class="col-xs-12 col-md-4">
				<form id="edit-location-form">		
					        <div class="form-group">
					          <label for="">Grad:</label>
					          <input id="grad" class="form-control" type="text" required>  
					        </div>
					        <div class="form-group">
					          <label for=""> Adresa:</label>
					          <input id="adresa" class="form-control" type="text" required>            
					        </div>            
					        <div class="row">
					        	<div class="form-group col-xs-6">
					        	  <label for="">Broj telefona:</label>              
					        	  <input id="br_tel" class="form-control" type="text" required>              
					        	</div>
					        	<div class="form-group col-xs-6  ">
					        	  <label for="">Email:</label>              
					        	  <input type="text" id="email" class="form-control">
					        	</div>
					        </div>
					        <div class="form-group">
					          <label for="">Radno vrijeme:</label>
					          <input id="radno_vrijeme" class="form-control" type="text"required>            
					        </div>
				
				            <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
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