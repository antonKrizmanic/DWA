<!DOCTYPE html>
<html lang="tal">
<head>
	<meta charset="UTF-8">
	<title>Predstava1</title>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'><!--font-->
	<link rel="stylesheet" href="../../css/bootstrap.css"><!--bootstrap-->
	<link rel="stylesheet" href="../../css/stil.css"><!--moj css-->
	<link rel="stylesheet" href="../../css/icons/css/fontello.css"><!--ikone-->
	<?php include("../connect.php");?>
</head>
<body>
	<?php include("navigation.php"); ?>
	<?php
		$query="SELECT naziv_predstave as Naziv,Slika,Redatelj,Tekst,Kostimi,Glumci,FLOOR(TIME_TO_SEC(trajanje)/60)as Trajanje,opis_predstave as Opis FROM predstava
				JOIN predstava_prijevod ON predstava.id=predstava_prijevod.id_predstava
				JOIN jezik ON jezik.id=predstava_prijevod.id_jezik
				WHERE jezik.jezik='Tal' AND predstava.id=".$_GET['id']."";
		if($result=mysqli_query($link,$query))
		$obj=mysqli_fetch_object($result);		
	echo '<div class="container predstava">
		<ul class="breadcrumb ">
			<li><a href="index.php">Home</a></li>
			<li><a href="predstave.php">Spettacoli</a></li>
			<li>'.$obj->Naziv.'</li>
		</ul>
		<h2>'.$obj->Naziv.'</h2>
		<img src="'.$obj->Slika.'" alt="'.$obj->Naziv.'">';
		?>	
		<div class="row">
			<article class="col-sm-6">
				<?php
				echo'<p>'.$obj->Opis.'</p>';
				?>
			</article>
			<article class="col-sm-6">
				<?php
					echo'<p><span>Regista:</span> '.$obj->Redatelj.'</p>
					<p><span>Testo:</span> '.$obj->Tekst.'</p>				
					<p><span>Costumi:</span> '.$obj->Kostimi.'</p>
					<p><span>Attori:</span> '.$obj->Glumci.' </p>
					<p><span>Durata predstave:</span> '.$obj->Trajanje.' min</p>';
				?>				
			</article>
		</div>
	</div>
	<?php 
		include("../footer.php");
		mysqli_close($link);
	?>
</body>
</html>