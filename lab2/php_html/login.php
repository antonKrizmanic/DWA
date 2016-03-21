<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fantastic beasts</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/stil.css">
</head>
<body>	
		<div class="container">
			<header class="page-header">
				<div class="row">
					<div class="col-sm-6">						
						<img src="../img/fantBeastsLogo.png" alt="Fantastic beasts logo" class="img-responsive">
					</div>
					<div class="col-sm-2 col-sm-offset-4">
						<?php	
							echo "Korisnik:".$_GET["username"]."";
						?>						
						<a href="login.html" class="odjava">Odjava</a>
					</div>
				</div>
			</header>			
				<nav class="col-sm-2">
					<ul class="nav">
						<li><a href="#">Opcija 1</a></li>
						<li><a href="#">Opcija 2</a></li>
						<li><a href="#">Opcija 3</a></li>
						<li><a href="#">Opcija 4</a></li>
					</ul>
				</nav>
				<section class="col-sm-10 content">
					<article class="col-sm-6">						
						<h2>Osobni podaci:</h2>
						<p>Ime i prezime: Anton Krizmanić</p>
						<p>Datum rođenja:08.10.1994</p>
						<p>Mjesto rođenja:Rijeka</p>
					</article>
					<article class="col-sm-6">						
						<h2>Podaci o školovanju:</h2>
						<p>Osnovna škole: Osnovna škola Marije i Line Umag, Umag</p>
						<p>Srednja škola: Gospodarska škola Buje, Buje</p>
						<p>Fakultet: Tehničko veleučilište Zagreb, Zagreb</p>
					</article>
					<article class="col-sm-6">						
						<h2>Podaci o radnom iskustvu</h2>
						<p>Prometna jedinica mladeži, Umag 2010 godine</p>
						<p>Vozač eko vozila u Istraturistu 3 sezone</p>

					</article>
					<article class="col-sm-6">						
						<h2>Znanja i vještine</h2>
						<p>C,C++,C#,HTML,CSS,Javascript,PHP,ASP.NET</p>
					</article>
				</section>
			
		</div>
		
		<div class="footer-wrapper">		
				<footer class="container" >		
						<p>Copyright Fantastic beasts, 2016</p>		
				</footer>		
		</div>	
</body>
</html>