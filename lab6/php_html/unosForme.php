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
				<li><a href="#">Unos proizvoda</a></li>
				<li><a href="#">Opcija 4</a></li>
			</ul>
		</nav>
		
		<section class="col-sm-10 content">
			<form action="#" method="post" class="form col-sm-4">
				<div class="form-group">
					<label for="naziv">Ime proizvoda:</label>
					<input type="text" name="naziv" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="vrsta">Vrsta proizvoda</label>
					<select name="vrsta" id="" class="form-control">
						
					<?php
						$results=ORM::for_table('proizvod')->find_many();
						
						echo"<option value='0'></option>";
						foreach($results as $result){
							echo"<option value='".$result->id."'> ".$result->vrstaProizvoda."</option>";
						}						
					?>
					</select>
				</div>
				<div class="form-group">
					<label for="zivotinja">Vrsta zivotinje</label>
					<select name="zivotinja" id="" class="form-control">
					<?php						
						$results=ORM::for_table('zivotinje')->find_many();

						echo"<option value='0'></option>";
						foreach($results as $result){
							echo"<option value='".$result->id."'> ".$result->nazivZivotinje."</option>";	
						}						
					?>
					</select>
				</div>				
				<div class="form-group">
					<label for="opis">Opis proizvoda</label>
					<input type="text" name="opis" class="form-control">
				</div>
				<div class="form-group">
					<label for="cijena">Cijena proizvoda</label>
					<input type="text" name="cijena" class="form-control">
				</div>				
				<input type="submit" value="Pošalji" name="posalji" class="btn btn-default">				
			</form>
		</section>

	<?php
		$naziv=false;
		$vrstaProizvoda=false;
		$zivotinja=false;
		$opis=false;
		$cijena=false;
		if(isset($_POST['posalji'])){
			$naziv=htmlspecialchars ($_POST['naziv']);
			if($naziv!=$_POST['naziv']){
				echo"Vise srece drugi put :)<br> Unesena vrijednost ce biti: $naziv";
			}
			/*tip proizvoda-hrana...*/
			if(!isset($_POST['vrsta']) || $_POST['vrsta']=='0'){				
				echo"<p>Molim odaberite vrstu proizvoda</p>";
			}
			else{
				$vrstaProizvoda=htmlspecialchars ($_POST['vrsta']);
			}
			if(!isset($_POST['zivotinja']) || $_POST['zivotinja']=='0'){
				echo"<p>Molim odaberite zivotinju</p>";
			}
			else{				
				$zivotinja=htmlspecialchars ($_POST['zivotinja']);	
			}
			$opis=htmlspecialchars ($_POST['opis']);			
			$cijena=htmlspecialchars ($_POST['cijena']);
			
			$unos=ORM::for_table('proizvodi')->create();
			$unos->naziv=$naziv;
			$unos->tipZivotinje=$zivotinja;
			$unos->tipProizvoda=$vrstaProizvoda;
			$unos->opisProizvoda=$opis;
			$unos->cijena=$cijena;
			$unos->save();						

		}
	?>
</body>
</html>