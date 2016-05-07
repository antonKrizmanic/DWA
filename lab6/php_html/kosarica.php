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
											
						<a href="login.html" class="odjava">Odjava</a>
					</div>
				</div>
			</header>			
				<nav class="col-sm-2">
					<ul class="nav">
						<li><a href="login.php">Zivotopis</a></li>
						<li><a href="popisProizvoda.php">Popis proizvoda</a></li>
						<li><a href="popisProizvodaIdiorm.php">Popis proizvoda Idiorm</a></li>
						<li><a href="unosForme.php">Unos proizvoda</a></li>
						<li><a href="#">Kosarica</a></li>
					</ul>
				</nav>
				<section class="col-sm-10 content">

					<?php

						if(!isset($_COOKIE["shop"])) {
    						echo "Cookie named is not set!";
						} else {						    
						    echo "Value is: " . $_COOKIE['shop'];
						    $token=substr($_COOKIE["shop"],1);
						}
					?>
					<a href="kosaricaPdf.php" class="btn btn-default">Napravi PDF</a>
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
							where_raw("proizvodi.id in($token)")->
							order_by_asc('id')->
							find_many();
							
							foreach($results2 as $result):
								echo"<tr>
										<td>$result->Naziv</td>
										<td>$result->Vrsta</td>
										<td>$result->Zivotinja</td>
										<td style='width:200px'>$result->Opis</td>
										<td>$result->Cijena</td>																			
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
			
		</script>
</body>
</html>