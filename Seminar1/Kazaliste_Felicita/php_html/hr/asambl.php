<!DOCTYPE html>
<html lang="hr">
<head>
	<meta charset="UTF-8">
	<title>Asambl</title>
	<link rel="shortcut icon" href="../../img/favicon.png"/>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../../css/bootstrap.css"><!--bootstrap-->	
	<link rel="stylesheet" href="../../css/icons/css/fontello.css"><!--ikone-->
	<link rel="stylesheet" href="../../css/stil.css"><!--moj css-->
	<?php include("../connect.php");?>
</head>
<body>
	<?php include("navigation.php");?>	
	<div class="container">
	<section class="content actors">
			<h2>Asambl kazalista</h2>
			<?php
				$query="SELECT ime_i_prezime,slika FROM glumci";
				if($result=mysqli_query($link,$query))

				
				while($row=mysqli_fetch_row($result)){
				echo'<div class="col-sm-6">
					<figure>
						<img src="'.$row[1].'" class="img-responsive" alt="Filip Anočić - Valentić"/>
						<figcaption class="text-center">'.$row[0].'</figcaption>
					</figure>		
				</div>';
				}				
			?>				
		</section>
	</div>
	<?php include("../footer.php");?>
	
</body>
</html>