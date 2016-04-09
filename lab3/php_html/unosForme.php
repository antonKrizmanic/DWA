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
			<form action="#" method="post" class="form col-sm-4">
				<div class="form-group">
					<label for="naziv">Ime proizvoda:</label>
					<input type="text" name="naziv" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="vrsta">Vrsta proizvoda</label>
					<select name="vrsta" id="" class="form-control">
						<
					<?php
						$qurey1="SELECT vrstaProizvoda FROM proizvod";
						if($result=mysqli_query($link,$qurey1))

						
						echo"<option value='0'></option>";
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
					
						
						echo"<option value='0'></option>";
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
				<input type="submit" value="Pošalji" name="posalji" class="btn btn-default">				
			</form>
		</section>

	<?php
		if(isset($_POST['posalji'])){
			$naziv=$_POST['naziv'];
			
			
			if(isset($_POST['vrsta']) && $_POST['vrsta']=='0'){				
				echo"Molim odaberite vrstu proizvoda";
			}
			else{
				$vrsta=$_POST['vrsta'];	
			}
			if(isset($_POST['zivotinja']) && $_POST['zivotinja']=='0'){
				echo"Molim odaberite zivotinju";
			}
			else{				
				$zivotinja=$_POST['zivotinja'];	
			}
			$opis=$_POST['opis'];
			$cijena=$_POST['cijena'];

			/* create a prepared statement */
			$stmt = mysqli_stmt_init($link);
			$proizvodQuery='SELECT id FROM proizvod WHERE vrstaProizvoda=?';
			if (mysqli_stmt_prepare($stmt,$proizvodQuery)) {
			    /* bind parameters for markers */
			    mysqli_stmt_bind_param($stmt, "s", $vrsta);
			    /* execute query */
			    mysqli_stmt_execute($stmt);			    
			    /* bind result variables */
			    mysqli_stmt_bind_result($stmt, $idVrsta);
			    /* fetch value */
			    mysqli_stmt_fetch($stmt);
			    /* close statement */
			    mysqli_stmt_close($stmt);
			}			
			/* create a prepared statement */
			$stmt = mysqli_stmt_init($link);
			$zivotinjaQuery='SELECT id FROM zivotinje WHERE nazivZivotinje=?';
			if (mysqli_stmt_prepare($stmt,$zivotinjaQuery)) {
			    /* bind parameters for markers */
			    mysqli_stmt_bind_param($stmt, "s", $zivotinja);
			    /* execute query */
			    mysqli_stmt_execute($stmt);
			    /* bind result variables */
			    mysqli_stmt_bind_result($stmt, $idZivotinja);
			    /* fetch value */
			    mysqli_stmt_fetch($stmt);
			    /* close statement */
			    mysqli_stmt_close($stmt);
			}
			
			/* create a prepared statement */
			$stmt = mysqli_stmt_init($link);
			$query='INSERT INTO proizvodi(naziv,tipZivotinje,tipProizvoda,opisProizvoda,cijena) VALUES (?,?,?,?,?)';
			if (mysqli_stmt_prepare($stmt,$query )) {

			    /* bind parameters for markers */
			    mysqli_stmt_bind_param($stmt, "siisd", $naziv,$idZivotinja,$idVrsta,$opis,$cijena);			    
			    
			    /* execute query */
			    if (!mysqli_stmt_execute($stmt)) {
     			   $error = mysqli_stmt_error($stmt);
     			   echo $error;
    			}		    
    			else{
    				echo"Proizvod je uspjesno dodan";
    			}
			    /* close statement */
			    mysqli_stmt_close($stmt);
			}

		}
	?>
</body>
</html>