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
					<table class="table table-hover" id="table-reservation">
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
								<td><a href="#" data-toggle="modal" data-target="#edit-modal">Uredi</a></td>
							</tr>
							<tr>
								<td>Toni Markovic</td>
								<td>Rijeka, 26.4.2016 20:00</td>
								<td>Zagreb, 28.4.2016 08:00</td>
								<td>759.59kn</td>
								<td><a href="#">Obrisi</a></td>
								<td><a href="#" data-toggle="modal" data-target="#edit-modal">Uredi</a></td>
							</tr>
							<tr>
								<td>Marko Markovic</td>
								<td>Split, 26.4.2016 20:00</td>
								<td>Zagreb, 28.4.2016 08:00</td>
								<td>59.59kn</td>
								<td><a href="#">Obrisi</a></td>
								<td><a href="#" data-toggle="modal" data-target="#edit-modal">Uredi</a></td>
							</tr>
						</tbody>	
					</table>
				</div>
			</div>
		</div>
	</div>




<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </button>
        <h4>Izmjena rezervacije</h4>
      </div>             
      
      <div id="div-forms">      
        <!--Start Login Form -->
        <form id="edit-form">
          <div class="modal-body">            
            <div class="form-group">
              <label for="">Ime i prezime klijenta:</label>
              <input id="ime" class="form-control" type="text" placeholder="Ime klijenta" required>  
            </div>
            <div class="form-group">
              <label for=""> Mjesto preuzimanja:</label>
              <input id="preuzimanje" class="form-control" type="text" placeholder="Preuzimanje" value="Zagreb" required>            
            </div>            
            <div class="row">
            	<div class="form-group col-xs-6">
            	  <label for="">Datum preuzimanja:</label>              
            	  <input id="preuzimanje-date" class="form-control" type="date" required>              
            	</div>
            	<div class="form-group col-xs-6  ">
            	  <label for="">Vrijeme preuzimanja:</label>              
            	  <input type="time" id="preuzimanje-time" class="form-control">
            	</div>
            </div>
            <div class="form-group">
              <label for="">Mjesto povrata:</label>
              <input id="povrat" class="form-control" type="text" placeholder="Povrat" value="Zagreb" required>            
            </div>
            <div class="row">
            	<div class="form-group col-xs-6">
            	  <label for="">Datum povrata:</label>              
            	  <input id="povrat-date" class="form-control" type="date" required>              
            	</div>
            	<div class="form-group col-xs-6">
            	  <label for="">Vrijeme povrata:</label>              
            	  <input type="time" id="povrat-time" class="form-control">
            	</div>
            </div>
            <div class="form-group">
              	<label for="">Odabrano vozilo:</label>
              	<select name="auti_vrsta" id="auti_vrsta" class="form-control">
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
              			<td><input type="checkbox" name="opcije" value="1"></td>
              		</tr>
              		<tr>
              			<td>Osiguranje</td>
              			<td>80kn</td>
              			<td><input type="checkbox" name="opcije" value="2"></td>
              		</tr>
              	</tbody>
              </table>              
            </div>
            <div class="form-group">
              <label for="">Cijena:</label>
              <input id="cijena" class="form-control" type="text" placeholder="Cijena" value="459.56" required>            
            </div>

          </div>
          <div class="modal-footer">
            
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary ">Spremi</button>
                        
          </div>
        </form>
        <!-- End  Login Form -->                    
      </div>      
    </div>
  </div>
</div>
<?php
	include("footer.php");
?>
<!-- End Login Modal -->
<script type="text/javascript">
	$(document).ready( function () {
    	$('#table-reservation').DataTable({
    		paging:false,
    		searching:false
    	});
	} );
</script>
</body>
</html>