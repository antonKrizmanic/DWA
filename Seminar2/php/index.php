<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	  <h3>Najam vozila</h3>
	  <!-- Nav tabs -->
	  <ul class="nav nav-tabs" id="tabs" >
	    <li class="active" id="_vrijeme_mjesto"><a href="#vrijeme_mjesto"  data-toggle="tab" >Vrijeme i mjesto</a></li>
	    <li id="_vozilo"><a href="#vozilo"  data-toggle="tab" >Odabir vozila</a></li>
	    <li id="_dodatne_opcije"><a href="#dodatne_opcije"  data-toggle="tab" >Dodatne opcije</a></li>
	    <li id="_osobni_podaci"><a href="#osobni_podaci"  data-toggle="tab" >Osobni podaci</a></li>
	    <li id="_potvrda"><a href="#potvrda"  data-toggle="tab" >Potvrda</a></li>
	  </ul>
	  

	  <!-- Tab panes -->
	  	<form action="">
	  		<div class="tab-content">    
		    <!--Tab za odabir mjesta,datuma i vremena-->
			    <div role="tabpanel" class="tab-pane active" id="vrijeme_mjesto">
			    	<!--Mjesto preuzimanja i vracanja-->
			      <div class="row">        
			        <div class="form-group col-lg-4 col-sm-6">
			          <label for="preuzimanje">Mjesto preuzimanja</label><br>
			          <select name="preuzimanje" id="preuzimanje" class="form-control" onchange="updatePodaci();">
			            <option value="zagreb">Zagreb</option>
			            <option value="rijeka">Rijeka</option>
			            <option value="split">Split</option>
			          </select>          
			          <div class="checkbox">
			            <label><input type="checkbox" value="" name="drugoMjesto" id="drugoMjesto" onclick="povratDrugoMjesto(this);" >Vrati na drugo mjesto</label>
			          </div>
			        </div>
			        <div id="mjestoPovratka">
			          <div class="form-group col-lg-4 col-sm-6">
			            <label for="povrat">Mjesto vracanja</label><br>
			            <select name="povrat" id="povrat" class="form-control" onchange="updatePodaci();">
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
			          <label for="datum_preuzimanja">Datum preuzimanja</label><br>
			          <div class="col-md-8 no-padding">
			            <input type="date" name="datum_preuzimanja" class="form-control" id="datum_preuzimanja" onchange="updatePodaci();">
			          </div>
			        </div>
			        <div class="form-group ccol-lg-4 col-sm-6">
			          <label for="datum_povrata">Datum povrata</label><br>
			          <div class="col-md-8 no-padding">
			            <input type="date" name="datum_povrata" class="form-control" id="datum_povrata" onchange="updatePodaci();">
			          </div>
			        </div>  
			      </div>
			      <!--Vrijeme preuzimanja i vracanja-->
			      <div class="row"> 
			        <div class="form-group col-lg-4 col-sm-6">
			          <label for="vrijeme_preuzimanja">Vrijeme preuzimanja</label><br>
			          <div class="col-md-4 no-padding">
			            <input type="time" name="vrijeme_preuzimanja" class="form-control" id="vrijeme_preuzimanja" onchange="updatePodaci();" value="15:00">
			          </div>
			        </div>
			        <div class="form-group col-lg-4 col-sm-6">
			          <label for="vrijeme_povrata">Vrijeme povrata</label><br>
			          <div class="col-md-4 no-padding">
			            <input type="time" name="vrijeme_povrata" class="form-control" id="vrijeme_povrata" onchange="updatePodaci();" value="15:00">
			          </div>
			        </div>
			      </div>      
			      <!--Pomicanje na sljedeci korak-->
			      <div class="row"> 
			        <div class="col-lg-4 col-sm-6">
			          <a href="#vozilo" aria-controls="vozilo" data-toggle="tab" onclick="dateValidation(this);"  class="btn btn-default">Idi na sljedeci korak</a>
			        </div>
			      </div>
			  	</div>

			    <!--Tab za odabir vrste auta-->
			  	<div role="tabpanel" class="tab-pane" id="vozilo">
			  	 <!--2 dropdown izbornika-->
			     
			      <!--podijela stranice na dva dijela-->
			      <div class="col-md-6 well">
			      <!--Odabir vrste auta-->
			        <div class="col-md-5 no-padding">
			          <div class="form-group">
			            <label for="vrsta_vozila">Vrsta automobila</label>
			            <select name="vrsta_vozila" id="vrsta_vozila" class="form-control">
			              <option value="osobni">Osobni</option>
			              <option value="limuzina">Limuzina</option>
			            </select>
			          </div>
			        </div>
			        <!--odabir mjenjaca-->
			        <div class="col-md-5 col-md-offset-1 no-padding">
			          <div class="form-group">
			            <label for="vrsta_mjenjaca">Tip mjenjača</label>
			            <select name="vrsta_mjenjaca" id="vrsta_mjenjaca" class="form-control">
			              <option value="automatski">Automatski</option>
			              <option value="rucni">Ručni</option>
			            </select>
			          </div>
			        </div>
			        <div class="row">
			          <div class="col-md-12">
			           <div class="table-responsive">
			             <table class="table table-hover" id="auti">
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
			                  <td><input type="radio" name="auto" value="1"></td>
			                  <td class="auto-ime">WW Up!</td>
			                  <td class="cijena-auto">250</td>
			                  <td>30</td>
			                 </tr>
			                 <tr>
			                  <td><input type="radio" name="auto" value="2"></td>
			                  <td class="auto-ime">WW Up!</td>
			                  <td class="cijena-auto">350</td>
			                  <td>30</td>
			                 </tr>
			                 <tr>
			                  <td><input type="radio" name="auto" value="3"></td>
			                  <td class="auto-ime">WW Up!</td>
			                  <td class="cijena-auto">450</td>
			                  <td>30</td>
			                 </tr>
			                 <tr>
			                  <td><input type="radio" name="auto" value="4"></td>
			                  <td class="auto-ime">WW Up!</td>
			                  <td class="cijena-auto">550</td>
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
			              <p class="podaci_preuzimanje"></p>
			            </div>
			          </div>
			          <div class="col-sm-6 no-padding-responsive">
			            <div class="well">
			              <h3>Kraj:</h3>
			              <p class="podaci_povrat"></p>
			            </div>
			          </div>
			        </div>
			        <div class="row">
			          <div class="col-sm-6 no-padding-responsive">
			            <div class="well">
			              <h3>Ukupna cijena:</h3> 
			              <p class="cijena-ukupno"></p>
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
			          <a href="#dodatne_opcije" aria-controls="dodatne_opcije" data-toggle="tab" onclick="nextTab(this);" class="btn btn-default">Idi na sljedeci korak</a>
			        </div>
			      </div>
			    </div><!--/panel-->
			  	
			    <!--dodatne opcije-->
			  	<div role="tabpanel" class="tab-pane" id="dodatne_opcije">
					<!--podijela stranice na dva dijela-->
			      <div class="col-md-6 well">        
			        <div class="row">
			          <div class="col-md-12">
			           <div class="table-responsive">
			             <table class="table table-hover" id="opcije">
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
			                  <td><input type="checkbox" name="auto" value="1"></td>
			                  <td>WW Up!</td>
			                  <td class="cijena-opacija">250</td>
			                  <td>30</td>
			                  <td><a href="#" class="test" data-toggle="tooltip" data-placement="top" title="Osiguranje kojim se ograničava odgovornost najmoprimca za štetu nastalu na vozilu/krađu vozila na iznos franšize (ovaj iznos ovisi od kategorije vozila)!">?</a></td>                
			                 </tr>
			                 <tr>
			                  <td><input type="checkbox" name="auto" value="2"></td>
			                  <td>WW Up!</td>
			                  <td class="cijena-opacija">350</td>
			                  <td>30</td>
			                  <td><a href="#" class="test" data-toggle="tooltip" data-placement="top" title="Osiguranje kojim se ograničava odgovornost najmoprimca za štetu nastalu na vozilu/krađu vozila na iznos franšize (ovaj iznos ovisi od kategorije vozila)!">?</a></td>                
			                 </tr>
			                 <tr>
			                  <td><input type="checkbox" name="auto" value="3"></td>
			                  <td>WW Up!</td>
			                  <td class="cijena-opacija">280</td>
			                  <td>30</td>
			                  <td><a href="#" class="test" data-toggle="tooltip" data-placement="top" title="Osiguranje kojim se ograničava odgovornost najmoprimca za štetu nastalu na vozilu/krađu vozila na iznos franšize (ovaj iznos ovisi od kategorije vozila)!">?</a></td>                
			                 </tr>
			                 <tr>
			                  <td><input type="checkbox" name="auto" value="4"></td>
			                  <td>WW Up!</td>
			                  <td class="cijena-opacija">450</td>
			                  <td>30</td>
			                  <td><a href="#" class="test" data-toggle="tooltip" data-placement="top" title="Osiguranje kojim se ograničava odgovornost najmoprimca za štetu nastalu na vozilu/krađu vozila na iznos franšize (ovaj iznos ovisi od kategorije vozila)!">?</a></td>                
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
			              <p class="podaci_preuzimanje"></p>
			            </div>
			          </div>
			          <div class="col-sm-6 no-padding-responsive">
			            <div class="well">
			              <h3>Kraj:</h3>
			              <p class="podaci_povrat"></p>
			            </div>
			          </div>
			        </div>
			        <div class="row">
			          <div class="col-sm-6 no-padding-responsive">
			            <div class="well">
			              <h3>Ukupna cijena:</h3> 
			              <p class="cijena-ukupno"></p>
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
			          <a href="#osobni_podaci" aria-controls="osobni_podaci" data-toggle="tab" onclick="nextTab(this);" class="btn btn-default">Idi na sljedeci korak</a>
			        </div>
			      </div>
			    </div>
			  	
			    <!--Osobni podaci-->
			  	<div role="tabpanel" class="tab-pane" id="osobni_podaci">
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
			        <div class="col-lg-4 col-sm-6">
			          <dl class="dl-horizontal well">
			            <dt>Ime i prezime: </dt>
			            <dd>Marko Markovic</dd>
			            <dt>Adresa:</dt>
			            <dd>Vrbik VII</dd>
			            <dt>Mjesto preuzimanja: </dt>
			            <dd class="mjesto-preuzimanja">Rijeka</dd>
			            <dt>Datum i vrijeme preuzimanja: </dt>
			            <dd class="datum-vrijeme-preuzimanja">25.4.2016 16:00</dd>            
			            <dt>Mjesto vracanja: </dt>
			            <dd class="mjesto-povrata">Zagreb</dd>
			            <dt>Datum i vrijeme vracanja: </dt>
			            <dd class="datum-vrijeme-povrata">25.4.2016 16:00</dd>
			            <dt>Automobil: </dt>
			            <dd class="automobil">Opel Corsa</dd>
			            <dt>Cijena:</dt>
			            <dd class="cijena-ukupno"></dd>
			          </dl>
			        </div>
			      </div>
			      <div class="row"> 
			        <div class="col-md-4">
			          <a href="#potvrda" aria-controls="potvrda" data-toggle="tab"  class="btn btn-primary">Potvrdi</a>
			        </div>
			      </div>
			      <!--Ovo je vidljivo nakon klika na Potvrdi-->
			      <div class="row"> 
			        <div class="col-md-4">
			          <p>Uspjesno ste rezervirali automobil. Hvala!</p>
			        </div>
			      </div>
			    </div>
			  	
			    <!--prazan tab za sada-->
			    <div role="tabpanel" class="tab-pane" id="potvrda">

			    </div>		    
		  	</div>
		</form>
		<div class="row">
			<div class="col-md-6">
				<h3>Galerija automobila</h3>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				    <!-- Indicators -->
				    <ol class="carousel-indicators">
				      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel" data-slide-to="1"></li>
				      <li data-target="#myCarousel" data-slide-to="2"></li>
				      <li data-target="#myCarousel" data-slide-to="3"></li>
				    </ol>

				    <!-- Wrapper for slides -->
				    <div class="carousel-inner" role="listbox">
				      <div class="item active">
				        <img src="http://placehold.it/550x250" class="img-responsive" >
				      </div>

				      <div class="item">
				        <img src="http://placehold.it/550x250" class="img-responsive" >
				      </div>
				    
				      <div class="item">
				        <img src="http://placehold.it/550x250" class="img-responsive" >
				      </div>

				      <div class="item">
				        <img src="http://placehold.it/550x250" class="img-responsive" >
				      </div>
				    </div>				    
				</div>
			</div>
			<div class="col-md-6">
				<h3>Zasto bas mi?</h3>
			</div>
		</div>
	</div>
<?php
	include("footer.php");
?>










</body>
</html>


<script>
  	var cijenaAuto=0;
  	var cijenaOpcije=0;
  	var brDana=0;
  	  	
  	$(document).ready(function() {	    
	    $('[data-toggle="tooltip"]').tooltip();   
	    $('#tabs li').not('.active').addClass('disabled');	
	    $('#tabs li').not('.active').find('a').removeAttr("data-toggle");	
	});
	function povratDrugoMjesto(checkbox)
	{
		if (checkbox.checked)
		{        
		    $("#mjestoPovratka").show();        
		}
		else{     
		  	$("#mjestoPovratka").hide();      	
		}
		updatePodaci();
	}
	function dateValidation(ele){
		var now=new Date();
		
		var datePreuzimanje=new Date($("#datum_preuzimanja").val());  	
		var datePovrat=new Date($("#datum_povrata").val());
		
		if(now>datePreuzimanje || datePovrat<datePreuzimanje || isNaN( datePreuzimanje.valueOf()) || isNaN(datePovrat.valueOf()) ){
			$(ele).attr("href","#");
			alert("Odabrali ste krive datume");
		}
		else{
			$(ele).attr("href","#vozilo")
			var diff = new Date(datePovrat - datePreuzimanje);			
			brDana = diff/1000/60/60/24;
			if(brDana==0){
				brDana=1;
			}
			updateCijena();						
			nextTab(ele);
		}
	}
  
	function nextTab(ele){    
		var trenutna=$('#tabs li.active');
		var sljedeca=trenutna.next('li');
		trenutna.removeClass('active');
		sljedeca.removeClass('disabled').addClass('active');    
		sljedeca.find('a').attr("data-toggle","tab");   
	}
  
	function updatePodaci(){

		var preu=$("#preuzimanje option:selected").text();
		var povr=$("#povrat option:selected").text();
		var datePreuz=$("#datum_preuzimanja").val();
		var datePovr=$("#datum_povrata").val();
		var timePreuz=$("#vrijeme_preuzimanja").val();
		var timepovr=$("#vrijeme_povrata").val();
		var checkbox=$("#drugoMjesto").prop('checked');
		if(checkbox==true){
			$(".podaci_preuzimanje").html(preu +" "+ datePreuz+ " "+timePreuz);
			$(".podaci_povrat").html(povr +" "+ datePovr+ " "+timepovr);

			$(".mjesto-preuzimanja").html(preu);
			$(".mjesto-povrata").html(povr);	
		}
		else{
			$(".podaci_preuzimanje").html(preu +" "+ datePreuz+ " "+timePreuz);
			$(".podaci_povrat").html(preu +" "+ datePovr+ " "+timepovr);

			$(".mjesto-preuzimanja").html(preu);
			$(".mjesto-povrata").html(preu);	
		}
		$(".datum-vrijeme-preuzimanja").html(datePreuz+ " "+timePreuz);
		$(".datum-vrijeme-povrata").html(datePovr+ " "+timepovr);

	}
	function updateCijena(){
		
		var cijena=parseInt(cijenaAuto*brDana)+parseInt(cijenaOpcije);
		var cijenaUkupno=Number(cijena);
		$('.cijena-ukupno').html(cijena+" kn");
	}
	$('#auti tr').click(function() {
		$('#auti').find('tr').css('background-color','#f5f5f5');
		$(this).css('background-color','#aaa');
    	$(this).find('td input:radio').prop('checked', true);
    	var auto=$(this).find('.auto-ime').html()
    	$('.automobil').html(auto);
    	cijenaAuto=parseInt($(this).find('.cijena-auto').html());
    	updateCijena();
	})
	$('#opcije tr').click(function(){
		$('#opcije').find('tr').css('background-color','#f5f5f5');
		$(this).css('background-color','#aaa');
    	var oznaceno=$(this).find('td input:checkbox');
    	if(oznaceno.prop('checked')==true){
    		oznaceno.prop('checked', false);
    		cijenaOpcije-=parseInt($(this).find('.cijena-opacija').html());
    	}
    	else{
    		oznaceno.prop('checked', true);
    		cijenaOpcije+=parseInt($(this).find('.cijena-opacija').html());
    	}
    	
    	updateCijena();
	})
	
  
</script>