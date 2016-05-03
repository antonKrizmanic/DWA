<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rezervacije</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
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
			<div class="col-lg-12">
				<h3>Popis svih rezervacija:</h3>
				<div class="table-responsive">
					<table class="table table-hover" id="table-reservations">
						<thead>
							<tr>
								<th>Ime i prezime klijenta</th>
								<th>Mjesto i datum preuzimanja</th>
								<th>Mjesto i datum povrata</th>
								<th>Cijene</th>
								<th>Obrisi</th>
								<th>Uredi</th>
							</tr>
						</thead>
						<tbody>
							<!--generiranje php-om-->
							<tr>
								<td>Anton Markovic</td>
								<td>Umag, 26.4.2016 20:00</td>
								<td>Zagreb, 28.4.2016 08:00</td>
								<td>459.59kn</td>
								<td><a href="#">Obrisi</a></td>
								<td><a href="#" data-toggle="modal" data-target="#edit-rezervation-modal">Uredi</a></td>
							</tr>
							<tr>
								<td>Toni Markovic</td>
								<td>Rijeka, 26.4.2016 20:00</td>
								<td>Zagreb, 28.4.2016 08:00</td>
								<td>759.59kn</td>
								<td><a href="#">Obrisi</a></td>
								<td><a href="#" data-toggle="modal" data-target="#edit-rezervation-modal">Uredi</a></td>
							</tr>
							<tr>
								<td>Marko Markovic</td>
								<td>Split, 26.4.2016 20:00</td>
								<td>Zagreb, 28.4.2016 08:00</td>
								<td>59.59kn</td>
								<td><a href="#">Obrisi</a></td>
								<td><a href="#" data-toggle="modal" data-target="#edit-rezervation-modal">Uredi</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>




<div class="modal fade" id="edit-rezervation-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </button>
        <h4>Izmjena rezervacije</h4>
      </div>
        <!--Start Edit Form -->
      <form id="edit-form">
        <div class="modal-body">
          <div class="form-group">
            <label for="edit-client-name">Ime i prezime klijenta:</label>
            <input type="text" name="edit-client-name" id="edit-client-name" name=""class="form-control"  placeholder="Ime klijenta" required>
          </div>
          <div class="form-group">
            <label for="edit-start-location"> Mjesto preuzimanja:</label>
            <input type="text" name="edit-start-location" id="edit-start-location" class="form-control"  placeholder="Mjesto preuzimanja" value="Zagreb" required>
          </div>
          <div class="row">
          	<div class="form-group col-xs-6">
          	  <label for="edit-start-date">Datum preuzimanja:</label>
          	  <input type="date" name="edit-start-date" id="edit-start-date" class="form-control" placeholder="Datum preuzimanja" required>
          	</div>
          	<div class="form-group col-xs-6  ">
          	  <label for="edit-start-time">Vrijeme preuzimanja:</label>
          	  <input type="time" name="edit-start-time" id="edit-start-time" class="form-control" placeholder="Vrijeme preuzimanja" required>
          	</div>
          </div>
          <div class="form-group">
            <label for="edit-end-location">Mjesto povrata:</label>
            <input type="text" name="edit-end-location" id="edit-end-location" class="form-control"  placeholder="Mjesto povrata" required>
          </div>
          <div class="row">
          	<div class="form-group col-xs-6">
          	  <label for="edit-end-date">Datum povrata:</label>
          	  <input type="date" name="edit-end-date" id="edit-end-date" class="form-control" placeholder="Datum povrata" required>
          	</div>
          	<div class="form-group col-xs-6">
          	  <label for="edit-end-time">Vrijeme povrata:</label>
          	  <input type="time" name="edit-end-time" id="edit-end-time" class="form-control" placeholder="Vrijeme povrata" required>
          	</div>
          </div>
          <div class="form-group">
            	<label for="edit-car-type">Odabrano vozilo:</label>
            	<select name="edit-car-type" id="edit-car-type" class="form-control">
								<option></option>
								<option value="1">WW Up!</option>
								<option value="2">WW Golf</option>
								<option value="3">Renault Clio</option>
								<option value="4">Opel Astra</option>
							</select>
          </div>
          <div class="form-group">
            <label for="">Opcije:</label>
            <table class="table">
            	<thead>
            		<tr>
            			<th>Naziv</th>
            			<th>Cijena</th>
            			<th>Akcija</th>
            		</tr>
            	</thead>
            	<tbody>
            		<tr>
            			<td>Djecija sjedalica</td>
            			<td>40kn</td>
            			<td><input type="checkbox" name="options-edit" value="1"></td>
            		</tr>
            		<tr>
            			<td>Osiguranje</td>
            			<td>80kn</td>
            			<td><input type="checkbox" name="options-edit" value="2"></td>
            		</tr>
            	</tbody>
            </table>
          </div>
          <div class="form-group">
            <label for="edit-price">Cijena:</label>
            <input type="text" name="edit-price" id="edit-price" class="form-control"  placeholder="Cijena" required>
          </div>

        </div>
        <div class="modal-footer">
              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary ">Spremi</button>
        </div>
      </form><!-- End  Edit Form -->
    </div>
  </div>
</div>
<?php
	include("footer.php");
?>
<!-- End Login Modal -->
<script type="text/javascript">
	$(document).ready( function () {
    	$('#table-reservations').DataTable({
    		paging:false,
    		searching:false
    	});
	} );
</script>
</body>
</html>
