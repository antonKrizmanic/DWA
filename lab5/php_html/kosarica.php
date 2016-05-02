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
							$query="SELECT proizvodi.naziv,proizvod.vrstaProizvoda,zivotinje.nazivZivotinje,opisProizvoda,cijena,proizvodi.id as id
									FROM proizvodi
									JOIN proizvod ON proizvodi.tipProizvoda=proizvod.id
									JOIN zivotinje ON proizvodi.tipZivotinje=zivotinje.id
									WHERE proizvodi.id IN($token)					
									ORDER BY id;";

							if($result=mysqli_query($link,$query))

							while($row=mysqli_fetch_row($result)){
								echo'
								<tr>
									<td>'.$row[0].'</td>
									<td>'.$row[1].'</td>
									<td>'.$row[2].'</td>
									<td  style="width:200px">'.$row[3].'</td>
									<td>'.$row[4].'</td>									
								</tr>
								';
							}	

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