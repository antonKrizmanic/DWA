<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Naslovnica</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/icons/css/fontello.css"><!--ikone-->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<link rel="stylesheet" href="/resources/demos/style.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:600,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/style.css">
  
</head>
<body>
<?php
  include("header-navigation.php");
  include("login-registration.php");
?>

	<div class="container">
	  <h3>Najam vozila</h3>
	  <!-- Nav tabs -->
	  <!--<ul class="nav nav-tabs" id="tabs" >
	    <li class="active"><a href="#time-place"  data-toggle="tab" >Vrijeme i mjesto</a></li>
		<li><a href="#car" data-toggle="tab" aria-controls="car" >Odabir vozila</a></li>
	    <li><a href="#extras"  data-toggle="tab" >Dodatne opcije</a></li>
	    <li><a href="#client-data"  data-toggle="tab" >Osobni podaci</a></li>	    
	  </ul>-->
		<div class='breadcrumbs' id="tabs">		  
		    <ul class='cf'>
		      <li class='active'>
		        <a href="#time-place" data-toggle="tab" >
		          <span>1</span>
		          <span>Vrijeme i mjesto</span>
		        </a>
		      </li>
		      <li>
		        <a href="#car" data-toggle="tab" >
		          <span>2</span>
		          <span>Odabir vozila</span>
		        </a>
		      </li>
		      <li>
		        <a href="#extras" data-toggle="tab" >
		          <span>3</span>
		          <span>Dodatne opcije</span>
		        </a>
		      </li>
		      <li>
		        <a href="#client-data" data-toggle="tab" >
		          <span>4</span>
		          <span>Osobni podaci</span>
		        </a>
		      </li>      
		    </ul>
		  
		</div>
	  <!-- Tab panes -->
	  	<form action="">
	  		<div class="tab-content">
		    <!--Tab za odabir mjesta,datuma i vremena-->
			    <div role="tabpanel" class="tab-pane active" id="time-place">
			    	<!--Mjesto preuzimanja i vracanja-->
			      <div class="row">
			        <div class="form-group col-lg-4 col-sm-6">
			          <label for="office-out">Mjesto preuzimanja</label><br>
			          <select name="office-out" id="office-out" class="form-control" onchange="updateData();">
			            <option value="zagreb">Zagreb</option>
			            <option value="rijeka">Rijeka</option>
			            <option value="split">Split</option>
			          </select>
			          <div class="checkbox">
			            <label><input type="checkbox" value="" name="office-in-diff" id="office-in-diff" onclick="diffOffice(this);" >Vrati na drugo mjesto</label>
			          </div>
			        </div>
			        <div id="office-in-div">
			          <div class="form-group col-lg-4 col-sm-6">
			            <label for="office-in">Mjesto vracanja</label><br>
			            <select name="office-in" id="office-in" class="form-control" onchange="updateData();">
			              <option value="zagreb">Zagreb</option>
			              <option value="rijeka">Rijeka</option>
			              <option value="split">Split</option>
			            </select>
			          </div>
			        </div>
			      </div>
			      <!--Datum preuzimanja i vracanja-->
			      <div class="row">
			        <div class="form-group col-lg-4 col-sm-6">
			          <label for="date-out">Datum preuzimanja</label><br>
			          <div class="col-md-8 no-padding">  							  
			            <input type="text" name="date-out" class="form-control" id="date-out" onchange="updateData();">
			          </div>
			        </div>
			        <div class="form-group ccol-lg-4 col-sm-6">
			          <label for="date-in">Datum povrata</label><br>
			          <div class="col-md-8 no-padding">
			            <input type="text" name="date-in" class="form-control" id="date-in" onchange="updateData();">
			          </div>
			        </div>
			      </div>
			      <!--Vrijeme preuzimanja i vracanja-->
			      <div class="row">
			        <div class="form-group col-lg-4 col-sm-6">
			          <label for="time-out">Vrijeme preuzimanja</label><br>
			          <div class="col-md-4 no-padding">
			            <input type="time" name="time-out" class="form-control" id="time-out" onchange="updateData();" value="15:00">
			          </div>
			        </div>
			        <div class="form-group col-lg-4 col-sm-6">
			          <label for="time-in">Vrijeme povrata</label><br>
			          <div class="col-md-4 no-padding">
			            <input type="time" name="time-in" class="form-control" id="time-in" onchange="updateData();" value="15:00">
			          </div>
			        </div>
			      </div>
			      <!--Pomicanje na sljedeci korak-->
			      <div class="row">
			        <div class="col-lg-4 col-sm-6">
			          <a href="#car" aria-controls="car" data-toggle="tab" onclick="dateValidation(this);" class="btn btn-default">Idi na sljedeci korak</a>
			        </div>
			      </div>
			  	</div>

			    <!--Tab za odabir vrste auta-->
			  	<div role="tabpanel" class="tab-pane" id="car">
			  	 <!--2 dropdown izbornika-->

			      <!--podijela stranice na dva dijela-->
			      <div class="col-md-6 well">
			      <!--Odabir vrste auta-->
			        <div class="col-md-5 no-padding">
			          <div class="form-group">
			            <label for="car-type">Vrsta automobila</label>
			            <select name="car-type" id="car-type" class="form-control">
			              <option value="osobni">Osobni</option>
			              <option value="limuzina">Limuzina</option>
			            </select>
			          </div>
			        </div>
			        <!--odabir mjenjaca-->
			        <div class="col-md-5 col-md-offset-1 no-padding">
			          <div class="form-group">
			            <label for="gear-type">Tip mjenjača</label>
			            <select name="gear-type" id="gear-type" class="form-control">
			              <option value="automatski">Automatski</option>
			              <option value="rucni">Ručni</option>
			            </select>
			          </div>
			        </div>
			        <div class="row">
			          <div class="col-md-12">
			           <div class="table-responsive">
			             <table class="table table-hover" id="cars">
			               <thead>
			                <tr>
			                  <th></th>
			                  <th>Ime vozila</th>
			                  <th>Cijena/dan(kn)</th>
			                  <th>Cijena/dan(euri)</th>
			                </tr>
			               </thead>
			               <tbody>
			                 <tr>
			                  <td><input type="hidden" name="car" value="1"></td>
			                  <td class="car-name">WW Up!</td>
			                  <td class="car-price">250</td>
			                  <td>30</td>
			                 </tr>
			                 <tr>
			                  <td><input type="hidden" name="car" value="2"></td>
			                  <td class="car-name">WW Up!</td>
			                  <td class="car-price">350</td>
			                  <td>30</td>
			                 </tr>
			                 <tr>
			                  <td><input type="hidden" name="car" value="3"></td>
			                  <td class="car-name">WW Up!</td>
			                  <td class="car-price">450</td>
			                  <td>30</td>
			                 </tr>
			                 <tr>
			                  <td><input type="hidden" name="car" value="4"></td>
			                  <td class="car-name">WW Up!</td>
			                  <td class="car-price">550</td>
			                  <td>30</td>
			                 </tr>
			               </tbody>
			             </table>
			           </div>
			          </div>
			        </div>
			      </div><!--podjela na dva dijela-->

			      <!--podjela na dva dijela (desni dio)-->
			      <div class="col-md-6">
			        <div class="row">
			          <div class="col-sm-6 no-padding-responsive">
			            <div class="well">
			              <h3>Pocetak:</h3>
			              <p class="data-out"></p>
			            </div>
			          </div>
			          <div class="col-sm-6 no-padding-responsive">
			            <div class="well">
			              <h3>Kraj:</h3>
			              <p class="data-in"></p>
			            </div>
			          </div>
			        </div>
			        <div class="row">
			          <div class="col-sm-6 no-padding-responsive">
			            <div class="well">
			              <h3>Ukupna cijena:</h3>
			              <p class="total-price"></p>
			            </div>
			          </div>
			        </div>
			        <div class="row">
			         <div class="col-md-12 no-padding-responsive">
			           <img src="http://placehold.it/550x250" alt="" class="img-responsive">
			         </div>
			        </div>
			      </div>

			    <!--Pomicanje na sljedeci korak-->
			      <div class="row">
			        <div class="col-md-4">
			          <a href="#extras" aria-controls="extras" data-toggle="tab" onclick="nextTab(this);" class="btn btn-default">Idi na sljedeci korak</a>
			        </div>
			      </div>
			    </div><!--/panel-->

			    <!--dodatne opcije-->
			  	<div role="tabpanel" class="tab-pane" id="extras">
					<!--podijela stranice na dva dijela-->
			      <div class="col-md-6 well">
			        <div class="row">
			          <div class="col-md-12">
			           <div class="table-responsive">
			             <table class="table table-hover" id="extra-option">
			               <thead>
			                <tr>
			                  <th></th>
			                  <th>Naziv opcije</th>
			                  <th>Cijena (kn)</th>
			                  <th>Cijena (euri)</th>
			                  <th>Opis</th>
			                </tr>
			               </thead>
			               <tbody>
			                 <tr>
			                  <td><input type="checkbox" name="extra" value="1"></td>
			                  <td>WW Up!</td>
			                  <td class="extras-price">250</td>
			                  <td>30</td>
			                  <td><a href="#" class="tooltip" data-toggle="tooltip" data-placement="top" title="Osiguranje kojim se ograničava odgovornost najmoprimca za štetu nastalu na vozilu/krađu vozila na iznos franšize (ovaj iznos ovisi od kategorije vozila)!">?</a></td>
			                 </tr>
			                 <tr>
			                  <td><input type="checkbox" name="extra" value="2"></td>
			                  <td>WW Up!</td>
			                  <td class="extras-price">350</td>
			                  <td>30</td>
			                  <td><a href="#" class="tooltip" data-toggle="tooltip" data-placement="top" title="Osiguranje kojim se ograničava odgovornost najmoprimca za štetu nastalu na vozilu/krađu vozila na iznos franšize (ovaj iznos ovisi od kategorije vozila)!">?</a></td>
			                 </tr>
			                 <tr>
			                  <td><input type="checkbox" name="extra" value="3"></td>
			                  <td>WW Up!</td>
			                  <td class="extras-price">280</td>
			                  <td>30</td>
			                  <td><a href="#" class="tooltip" data-toggle="tooltip" data-placement="top" title="Osiguranje kojim se ograničava odgovornost najmoprimca za štetu nastalu na vozilu/krađu vozila na iznos franšize (ovaj iznos ovisi od kategorije vozila)!">?</a></td>
			                 </tr>
			                 <tr>
			                  <td><input type="checkbox" name="extra" value="4"></td>
			                  <td>WW Up!</td>
			                  <td class="extras-price">450</td>
			                  <td>30</td>
			                  <td><a href="#" class="tooltip" data-toggle="tooltip" data-placement="top" title="Osiguranje kojim se ograničava odgovornost najmoprimca za štetu nastalu na vozilu/krađu vozila na iznos franšize (ovaj iznos ovisi od kategorije vozila)!">?</a></td>
			                 </tr>
			               </tbody>
			             </table>
			           </div>
			          </div>
			        </div>
			      </div><!--podjela na dva dijela-->

			      <!--podjela na dva dijela (desni dio)-->
			      <div class="col-md-6">
			        <div class="row">
			          <div class="col-sm-6 no-padding-responsive">
			            <div class="well">
			              <h3>Pocetak:</h3>
			              <p class="data-out"></p>
			            </div>
			          </div>
			          <div class="col-sm-6 no-padding-responsive">
			            <div class="well">
			              <h3>Kraj:</h3>
			              <p class="data-in"></p>
			            </div>
			          </div>
			        </div>
			        <div class="row">
			          <div class="col-sm-6 no-padding-responsive">
			            <div class="well">
			              <h3>Ukupna cijena:</h3>
			              <p class="total-price"></p>
			            </div>
			          </div>
			        </div>
			        <div class="row">
			         <div class="col-md-12 no-padding-responsive">
			           <img src="http://placehold.it/550x250" alt="" class="img-responsive">
			         </div>
			        </div>
			      </div>
			    <!--Pomicanje na sljedeci korak-->
			      <div class="row">
			        <div class="col-md-4">
			          <a href="#client-data" aria-controls="client-data" data-toggle="tab" onclick="nextTab(this);" class="btn btn-default">Idi na sljedeci korak</a>
			        </div>
			      </div>
			    </div>

			    <!--Osobni podaci-->
			  	<div role="tabpanel" class="tab-pane" id="client-data">
			    	<!--ispisuje se ako korisnik nije prijavljen-->
			      <div class="row">
			        <div class="col-lg-4 col-sm-6">
			          <div class="well">
			            <h4>Kako bi potvrdili vasu rezervaciju molimo da se ulogirate sa svojim korisnickim podacima, ako ih nemate molimo da se registrirate</h4>
			            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#login-modal">Prijava</a>
			            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#register-modal">Registracija</a>
			          </div>
			        </div>
			      </div><!--/row-->

			      <!--ispisuje se ako je korisnik prijavljen-->
			      <div class="row">
			        <div class="col-lg-5 col-sm-6">
			          <dl class="dl-horizontal well">
			            <dt>Ime i prezime: </dt>
			            <dd> Marko Markovic</dd>
			            <dt>Adresa: </dt>
			            <dd> Vrbik VII</dd>
			            <dt>Mjesto preuzimanja: </dt>
			            <dd class="office-out-class"></dd>
			            <dt>Datum i vrijeme preuzimanja: </dt>
			            <dd class="date-time-out"></dd>
			            <dt>Mjesto vracanja: </dt>
			            <dd class="office-in-class"></dd>
			            <dt>Datum i vrijeme vracanja: </dt>
			            <dd class="date-time-in">25.4.2016 16:00</dd>
			            <dt>Automobil: </dt>
			            <dd class="chosen-car"></dd>
			            <dt>Cijena: </dt>
			            <dd class="total-price"></dd>
			          </dl>
			        </div>
			      </div>
			      <div class="row">
			        <div class="col-md-4">
			          <a href="#confirmation" aria-controls="confirmation" data-toggle="tab"  class="btn btn-default">Potvrdi</a>
			        </div>
			      </div>
			      <!--Ovo je vidljivo nakon klika na Potvrdi-->
			      <div class="row">
			        <div class="col-md-4">
			          <p id="success">Uspjesno ste rezervirali automobil. Hvala!</p>
			        </div>
			      </div>
			    </div>			    
		  	</div>
		</form><!--End form-->

		<div class="row">
			<div class="col-md-6">
				<h3>Galerija automobila</h3>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
			    <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>			      
			    </ol>
			    <!-- Wrapper for slides -->
			    <div class="carousel-inner" role="listbox">
			      <div class="item active">
			        <img src="../img/vw-up.jpg" class="img-responsive" >
			      </div>

			      <div class="item">
			        <img src="../img/vw-polo.png" class="img-responsive" >
			      </div>

			      <div class="item">
			        <img src="../img/vw-golf.png" class="img-responsive" >
			      </div>			      
			    </div>
			    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				 </a>
				</div>
			</div>
			<div class="col-md-6">
				<h3>Zasto bas mi?</h3>
				<p>
					U svakom trenutnu na izbor ti nudimo široku ponudu vozila svih klasa, vrhunske kvalitete te visokih sigurnosnih i servisnih standarda po najpovoljnijim cijenama.
				</p>
			</div>
		</div>
	</div>
<?php
	include("footer.php");
?>
</body>
<script>
	var carPrice=0;
	var extrasPrice=0;
	var days=0;

	$(document).ready(function() {
	    $('[data-toggle="tooltip"]').tooltip();
	    $('#tabs li').not('.active').addClass('disabled');
	    $('#tabs li').not('.active').find('a').removeAttr("data-toggle");
    	$( "#date-out" ).datepicker();
		$( "#date-in" ).datepicker();
	});	 

	function nextTab(){
		var tmp=$('#tabs li.active');
		var next=tmp.next('li');
		tmp.removeClass('active');
		next.removeClass('disabled').addClass('active');
		next.find('a').attr("data-toggle","tab");
	}

	function diffOffice(checkbox)
	{
		if (checkbox.checked)
		{
		    $("#office-in-div").show();
		}
		else{
		  	$("#office-in-div").hide();
		}
		updateData();
	}

	function dateValidation(ele){
		if(checkDates()==false){
			$(ele).attr("href","#");
			alert("Odabrali ste krive datume");
		}
		else{
			$(ele).attr("href","#car")
			nextTab();
		}
	}

	function checkDates(){
		var now=new Date();
		var dateOut=new Date($("#date-out").val());
		var dateIn=new Date($("#date-in").val());
		if(now>dateOut || dateIn<dateOut || isNaN(dateOut.valueOf()) || isNaN(dateIn.valueOf()) ){
			days=0;
			return false;
		}
		else{
			var diff = new Date(dateIn - dateOut);
			days = diff/1000/60/60/24;
			if(days==0){
				days=1;
			}
			return true;
		}
	}

	function updateData(){
		var officeOut=$("#office-out option:selected").text();
		var officeIN=$("#office-in option:selected").text();
		var dateOut=$("#date-out").val();
		var dateIn=$("#date-in").val();
		var timeOut=$("#time-out").val();
		var timeIn=$("#time-in").val();
		var checkbox=$("#office-in-diff").prop('checked');
		if(checkbox==true){
			$(".data-out").html(officeOut +" "+ dateOut+ " "+timeOut);
			$(".data-in").html(officeIN +" "+ dateIn+ " "+timeIn);
			$(".office-out-class").html(" "+officeOut);
			$(".office-in-class").html(" "+officeIN);
		}
		else{
			$(".data-out").html(officeOut +" "+ dateOut+ " "+timeOut);
			$(".data-in").html(officeOut +" "+ dateIn+ " "+timeIn);
			$(".office-out-class").html(" "+officeOut);
			$(".office-in-class").html(" "+officeOut);
		}
		$(".date-time-out").html(" "+dateOut+ " "+timeOut);
		$(".date-time-in").html(" "+dateIn+ " "+timeIn);
		checkDates();
		updatePrice();
	}

	function updatePrice(){
		var price=parseInt(carPrice*days)+parseInt(extrasPrice);
		$('.total-price').html(price+" kn");
	}

	$('#cars tr').click(function() {
		$('#cars').find('tr').css('background-color','#F5F5F5');
		$(this).css('background-color','#e7e7e7');
    	$(this).find('td input:hidden').prop('checked', true);
    	var car=$(this).find('.car-name').html()
    	$('.chosen-car').html(car);
    	carPrice=parseInt($(this).find('.car-price').html());
    	updatePrice();
	})

	$('#extra-option tr').click(function(){
		$('#extra-option').find('tr').css('background-color','#F5F5F5');
		/*$(this).css('background-color','#e7e7e7');*/
    	var selected=$(this).find('td input:checkbox');
    	if(selected.prop('checked')==true){
    		selected.prop('checked', false);
    		$(this).css('background-color','#F5F5F5');
    		extrasPrice-=parseInt($(this).find('.extras-price').html());
    	}
    	else{
    		selected.prop('checked', true);
    		$(this).css('background-color','#e7e7e7');
    		extrasPrice+=parseInt($(this).find('.extras-price').html());
    	}
    	updatePrice();
	})
</script>
</html>
