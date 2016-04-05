<!DOCTYPE html>
<html lang="hr">
<head>
	<meta charset="UTF-8">
	<title>Predstave</title>
	<link rel="shortcut icon" href="../../img/favicon.png"/>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../../css/bootstrap.css"><!--bootstrap-->
	<link rel="stylesheet" href="../../css/stil.css"><!--moj css-->
	<link rel="stylesheet" href="../../css/icons/css/fontello.css"><!--ikone-->
	<?php include("../connect.php");?>
</head>
<body>
	<?php include("navigation.php");?>
	<div class="container">
		<section class="content theater-play">
			<h2>Popis svih predstava u sezoni</h2>
			<diw class="row">
			<?php
				$query="SELECT predstava.id,slika,naziv_predstave FROM predstava
						JOIN predstava_prijevod ON predstava.id=predstava_prijevod.id_predstava
						JOIN jezik ON jezik.id=predstava_prijevod.id_jezik
						WHERE jezik.jezik='Cro'";
				if($result=mysqli_query($link,$query))

				
				while($row=mysqli_fetch_row($result)){
				echo'<div class="col-sm-6">
					<figure>
						<a href="predstava.php?id='.$row[0].'">
							<img src="'.$row[1].'">
							<figcaption>'.$row[2].'</figcaption>
						</a>
					</figure>		
				</div>';
				}				
			?>
			</diw>
		</section>
	</div>
	<?php include("../footer.php");?>
</body>
</html>