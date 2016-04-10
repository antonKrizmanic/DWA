<!DOCTYPE html>
<html lang="hr">
<head>
	<meta charset="UTF-8">
	<title>Predstava1</title>
	<link rel="shortcut icon" href="../../img/favicon.png"/>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../../css/bootstrap.css"><!--bootstrap-->
	<link rel="stylesheet" href="../../css/stil.css"><!--moj css-->
	<link rel="stylesheet" href="../../css/icons/css/fontello.css"><!--ikone-->
	<?php include("../connect.php");?>
</head>
<body>
	<?php include("navigation.php");?>
	<?php
		$query="SELECT naziv_predstave as Naziv,Slika,Redatelj,Tekst,Kostimi,FLOOR(TIME_TO_SEC(trajanje)/60)as Trajanje,opis_predstave as Opis FROM predstava
				JOIN predstava_prijevod ON predstava.id=predstava_prijevod.id_predstava
				JOIN jezik ON jezik.id=predstava_prijevod.id_jezik
				WHERE jezik.jezik='Cro' AND predstava.id=".$_GET['id']."";
		if($result=mysqli_query($link,$query))
			
		$obj=mysqli_fetch_object($result);		
		echo '<div class="container predstava">
			<ul class="breadcrumb ">
				<li><a href="index.php">Naslovnica</a></li>
				<li><a href="predstave.php">Predstave</a></li>
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
				echo'<p><span>Redatelj:</span> '.$obj->Redatelj.'</p>
					<p><span>Tekst:</span> '.$obj->Tekst.'</p>				
					<p><span>Kostimografija:</span> '.$obj->Kostimi.'</p>				
					<p><span>Trajanje predstave:</span> '.$obj->Trajanje.' min</p>';
					
				mysqli_free_result ($result);
				$query="SELECT ime_i_prezime as Glumac, ime_uloge as Uloga FROM glumci
						JOIN uloge ON glumci.id=uloge.id_glumca
						WHERE id_predstave=".$_GET['id']."";
				if($result=mysqli_query($link,$query))
				
				echo '<p><span>Igraju:</span>  ';
				while($obj=mysqli_fetch_object($result)){
					echo" $obj->Glumac - $obj->Uloga </br>";
				}
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