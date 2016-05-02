<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fantastic beasts</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/stil.css">
	<?php
		session_start();
		if($_SESSION['username'] !="korisnik" || $_SESSION['password'] !="korisnik"){
			header('Location: login.html');
		}
		require_once 'idiorm.php';
		ORM::configure('mysql:host=localhost;dbname=fantastic_beasts');
		ORM::configure('username','root');
		ORM::configure('password','root');		
		ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
		
	?>
</head>
<body>	
		
		<div class="container">
			<header class="page-header">				
				<div class="row">
					<div class="col-sm-6">						
						<img src="../img/fantBeastsLogo.png" alt="Fantastic beasts logo" class="img-responsive">
					</div>
					<div class="col-sm-2 col-sm-offset-4">
											
						<a href="logout.php" class="odjava">Odjava</a>
					</div>
				</div>
			</header>			
				<nav class="col-sm-2">
					<ul class="nav">
						<li><a href="login.php">Zivotopis</a></li>
						<li><a href="popisProizvoda.php">Popis proizvoda</a></li>
						<li><a href="#">Popis proizvoda Idiorm</a></li>
						<li><a href="unosForme.php">Unos proizvoda</a></li>
						<li><a href="kosarica.php">Kosarica</a></li>
					</ul>
				</nav>
				<section class="col-sm-10 content">

					<div class="form-inline">
						<div class="form-group">
							<label for="search">Trazeni pojam:</label>
							<input type="text" id="search" name="search" placeholder="Upisi trazeni pojam" onkeyup="trazi()" class="form-control ">							
						</div>						
						<input type="submit" id="submit"  class="btn btn-default" value="Pretraži stranicu">
						<a href="javascript:void()" onclick="deleteCookie();" class="btn btn-primary">Isprazni </a>
					</div>
					
					<table class="table table-striped" id="tablica">
						<thead>
							<tr>
								<th>Naziv proizvoda</th>
								<th>Vrsta proizvoda</th>
								<th>Zivotinja</th>
								<th>Opis</th>
								<th>Cijena</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$results2=ORM::for_table('proizvodi')->select_many(array('Naziv'=>'proizvodi.naziv','Vrsta'=>'proizvod.vrstaProizvoda','Zivotinja'=>'zivotinje.nazivZivotinje',
								'Opis'=>'proizvodi.opisProizvoda','Cijena','id'=>'proizvodi.id'))->
							join('proizvod',array('proizvodi.tipProizvoda','=','proizvod.id'))->							
							join('zivotinje',array('proizvodi.tipZivotinje','=','zivotinje.id'))->
							order_by_asc('id')->
							find_many();

							foreach($results2 as $result):
								echo"<tr>
										<td>$result->Naziv</td>
										<td>$result->Vrsta</td>
										<td>$result->Zivotinja</td>
										<td style='width:200px'>$result->Opis</td>
										<td>$result->Cijena</td>									
										<td><input type=\"submit\" value=\"spremi\" onclick = \"setCookie('shop',getCookie('shop')+','+'$result->id', 1)\" class=\"btn btn-info\"></input></td>
									</tr>";
							endforeach;
						?>
						</tbody>
					</table>					
				</section>
			
		</div>
		
		<div class="footer-wrapper">		
				<footer class="container" >		
						<p>Copyright Fantastic beasts, 2016</p>		
				</footer>		
		</div>	
		<script type="text/javascript">
			function trazi(){
				var unos=document.getElementById("search").value;
				var trs = document.getElementsByTagName("tr");
				
				for(var i=1;i<trs.length;i++){
					var c=trs[i].innerHTML.search(unos);
					if(c==-1){
						trs[i].style.display="none";	
					}
				}
			}
			function setCookie(cname, cvalue, exdays) {
    			var d = new Date();
    			d.setTime(d.getTime() + (exdays*24*60*60*1000));
    			var expires = "expires="+d.toUTCString();
    			document.cookie = cname + "=" + cvalue + "; " + expires;
			} 
			function getCookie(cname) {
  			  	var name = cname + "=";
    			var ca = document.cookie.split(';');
			    for(var i=0; i<ca.length; i++) {
        			var c = ca[i];
        			while (c.charAt(0)==' ') c = c.substring(1);
        			if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    			}
    			return "";
			}
			function deleteCookie(){
				document.cookie = "shop=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
			} 
		</script>
</body>
</html>