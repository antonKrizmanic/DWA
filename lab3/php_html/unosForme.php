<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fantastic beasts</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/stil.css">
	<?php 
		include("connect.php");
		session_start();
		if(isset($_SESSION['userName'])){
			
		}
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
				<li><a href="#">Unos proizvoda</a></li>
				<li><a href="#">Opcija 4</a></li>
			</ul>
		</nav>
		
		<section class="col-sm-10 content">
			<form action="#" method="get" class="form col-sm-4">
				<div class="form-group">
					<label for="naziv">Ime proizvoda:</label>
					<input type="text" name="naziv" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="vrsta">Vrsta proizvoda</label>
					<select name="vrsta" id="" class="form-control">
					<?php
						$qurey1="SELECT vrstaProizvoda FROM proizvod";
						if($result=mysqli_query($link,$qurey1))
					
						while($row=mysqli_fetch_row($result)){
							echo"<option value='".$row[0]."'> ".$row[0]."</option>";
						}
					?>
					</select>
				</div>
				<div class="form-group">
					<label for="zivotinja">Vrsta zivotinje</label>
					<select name="zivotinja" id="" class="form-control">
					<?php
						$qurey1="SELECT nazivZivotinje FROM zivotinje";
						if($result=mysqli_query($link,$qurey1))
					
						while($row=mysqli_fetch_row($result)){
							echo"<option value='".$row[0]."'> ".$row[0]."</option>";
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
				<input type="submit" value="Pošalji" name="posalji" class="btn ">				
			</form>
		</section>

	<?php
		if(isset($_GET['posalji'])){
			$naziv=$_GET['naziv'];
			$vrsta=$_GET['vrsta'];
			$zivotinja=$_GET['zivotinja'];
			$opis=$_GET['opis'];
			$cijena=$_GET['cijena'];	
			

			$proizvodQuery="SELECT id FROM proizvod WHERE vrstaProizvoda='$vrsta'";		
			if($result=mysqli_query($link,$proizvodQuery))

			$idVrsta=mysqli_fetch_row($result);
			echo " ispis $idVrsta[0] $vrsta";

			$zivotinjaQuery="SELECT id FROM zivotinje WHERE nazivZivotinje='$zivotinja'";		
			if($result=mysqli_query($link,$zivotinjaQuery))

			$idZivotinja=mysqli_fetch_row($result);
			echo " ispis $idZivotinja[0] $zivotinja";
			
			$query="INSERT INTO proizvodi (naziv,tipZivotinje,tipProizvoda,opisProizvoda,cijena) VALUES('$naziv',$idZivotinja[0],$idVrsta[0],'$opis',$cijena)";
			if (mysqli_query($link, $query)) {
	 		   echo "New record created successfully";
			} else {
	    		echo "Error: " . $query . "<br>" . mysqli_error($link);
			}
		}
	?>
</body>
</html>