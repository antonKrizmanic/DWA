<!DOCTYPE html>
<html lang="tal">
<head>
	<meta charset="UTF-8">
	<title>Ensamble</title>
	<link rel="shortcut icon" href="../../img/favicon.png"/>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'><!--font-->
	<link rel="stylesheet" href="../../css/bootstrap.css"><!--bootstrap-->
	<link rel="stylesheet" href="../../css/stil.css"><!--moj css-->
	<link rel="stylesheet" href="../../css/icons/css/fontello.css"><!--ikone-->
	<?php include("../connect.php");?>
</head>
<body>
	<?php include("navigation.php"); ?>
	
	<div class="container">
	<section class="content actors">
			<h2>Ensamble del teatro</h2>
			<?php
				$query="SELECT ime_i_prezime as Ime,Slika FROM glumci";
				if($result=mysqli_query($link,$query))

				
				while($obj=mysqli_fetch_object($result)){
				echo'<div class="col-sm-6">
					<figure>
						<img src="'.$obj->Slika.'" class="img-responsive" alt="'.$obj->Ime.'"/>
						<figcaption class="text-center">'.$obj->Ime.'</figcaption>
					</figure>		
				</div>';
				}				
			?>						
		</section>
	</div>
	<?php 
		include("../footer.php");
		mysqli_close($link);
	?>
	
</body>
</html>