<?php
		session_start();
		$username=$_GET['username'];
		$password=$_GET['password'];
		if(isset($_GET['username']) && isset($_GET['password']) ){
			$_SESSION['username']=$_GET['username'];
			$_SESSION['password']=$_GET['password'];
		}
		if($_SESSION['username'] !="korisnik" || $_SESSION['password'] !="korisnik"){
			header('Location: login.html');
		}
		
?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fantastic beasts</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/stil.css">
	
</head>
<body>	
		<div class="reklama container">
			<p>Ovo je reklama</p>
			<p id="zat" onclick="zatvori()">Zatvori reklamu</p>
		</div>
		<div class="container">
			<header class="page-header">
				<a href="#osobni_podaci">Osobni podaci</a>
				<a href="#podaci_skolovanje">Podaci o skolovanju</a>
				<a href="#podaci_o_radu">Radno iskustvo</a>
				<a href="#vjestine">Vjestine</a>
				<div class="row">
					<div class="col-sm-6">						
						<img src="../img/fantBeastsLogo.png" alt="Fantastic beasts logo" class="img-responsive">
					</div>
					<div class="col-sm-2 col-sm-offset-4">
						<?php								
							echo "Korisnik:".$_GET["username"]."</br>";
							echo "Lozinka:".$_GET["password"]."";							
						?>						
						<a href="logout.php" class="odjava">Odjava</a>
					</div>
				</div>
			</header>			
				<nav class="col-sm-2">
					<ul class="nav">
						<li><a href="#">Zivotopis</a></li>
						<li><a href="popisProizvoda.php">Popis proizvoda</a></li>
						<li><a href="popisProizvodaIdiorm.php">Popis proizvoda Idiorm</a></li>
						<li><a href="unosForme.php">Unos proizvoda</a></li>
						<li><a href="#">Opcija 4</a></li>
					</ul>
				</nav>
				<section class="col-sm-10 content">
					
					<article class="col-sm-12">						
						<h2 id="osobni" onclick="sakrij(this.id)">Osobni podaci:</h2>
						<div id="osobniPodaci">
							<p>Ime i prezime: Anton Krizmanić</p>
							<p>Datum rođenja:08.10.1994</p>
							<p>Mjesto rođenja:Rijeka</p>
						</div>
					</article>
					<article class="col-sm-12">						
						<h2 id="skolovanje" onclick="sakrij(this.id)">Podaci o školovanju:</h2>
						<div id="skolovanjePodaci">
							<p>Osnovna škole: Osnovna škola Marije i Line Umag, Umag</p>
							<p>Srednja škola: Gospodarska škola Buje, Buje</p>
							<p>Fakultet: Tehničko veleučilište Zagreb, Zagreb</p>
						</div>

					</article>
					<article class="col-sm-12">						
						<h2 id="rad" onclick="sakrij(this.id)">Podaci o radnom iskustvu</h2>
						<div id="radPodaci">
							<p>Prometna jedinica mladeži, Umag 2010 godine</p>
							<p>Vozač eko vozila u Istraturistu 3 sezone</p>
						</div>

					</article>
					<article class="col-sm-12">						
						<h2 id="vjestine" onclick="sakrij(this.id)">Znanja i vještine</h2>
						<div id="vjestinePodaci">
							<p>C,C++,C#,HTML,CSS,Javascript,PHP,ASP.NET</p>
						</div>
					</article>			
				</section>
			
		</div>
		
		<div class="footer-wrapper">		
				<footer class="container" >		
						<p>Copyright Fantastic beasts, 2016</p>		
				</footer>		
		</div>
			<script type="text/javascript">
			function sakrij(element){
				var id=element+"Podaci";				
				var div=document.getElementById(id);
				if(div.style.display=="block"){
					div.style.display="none";
				}
				else {
					div.style.display="block";
				}
			}
			function zatvori(){
				var div=document.querySelector(".reklama");				
				div.style.visibility="hidden";
			}
		</script>
</body>
</html>