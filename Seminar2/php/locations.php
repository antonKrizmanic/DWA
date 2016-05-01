<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="../css/icons/css/fontello.css"><!--ikone-->
	<link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<?php
		include("header-navigation.php");
		include("login-registration.php");
	?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Popis svih lokacija:</h3>
				<a href="insert-location.php" class="btn btn-info margin">Dodaj lokaciju</a>
				<div class="table-responsive">
					<table class="table table-hover" id="table-locations">
						<thead>
							<tr>
								<th>Grad</th>
								<th>Adresa</th>
								<th>Broj telefona</th>
								<th>Obrisi</th>
								<th>Uredi</th>
							</tr>
						</thead>
						<tbody>
							<!--generiranje php-om-->
							<tr>
								<td>Zagreb</td>
								<td>Vrbik VIII</td>
								<td>0981684561</td>
								<td><a href="#">Obrisi</a></td>
								<td><a href="insert-location.php">Uredi</a></td>
							</tr>
							<tr>
								<td>Split</td>
								<td>Konavoska 2</td>
								<td>0981684561</td>
								<td><a href="#">Obrisi</a></td>
								<td><a href="insert-location.php">Uredi</a></td>
							</tr>
							<tr>
								<td>Rijeka</td>
								<td>Žabica</td>
								<td>0981684561</td>
								<td><a href="#">Obrisi</a></td>
								<td><a href="insert-location.php">Uredi</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php
	include("footer.php");
	?>
	<script type="text/javascript">
		$(document).ready( function () {
	    	$('#table-locations').DataTable({
	    		paging:false,
	    		searching:false
	    	});
		} );
	</script>
</body>
</html>
