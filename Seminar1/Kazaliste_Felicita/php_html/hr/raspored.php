<!DOCTYPE html>
<html lang="hr">
<head>
	<meta charset="UTF-8">
	<title>Raspored</title>
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
		<div class="table-responsive">
			<h2>Raspored odrzavanja predstava</h2>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>						
						<th>Naziv predstave</th>
						<th>Datum</th>
						<th>Vrijeme</th>
						<th>Cijena</th>						
					</tr>
				</thead>
				<tbody>
					<?php
						$query="SELECT id_predstave as Id,naziv_predstave as Naziv,DATE_FORMAT(datum_i_vrijeme,'%e.%c.%Y') AS Datum,TIME_FORMAT(datum_i_vrijeme,'%k:%i') AS Vrijeme,Cijena 
							FROM predstava
							JOIN termin ON termin.id_predstave=predstava.id
							JOIN predstava_prijevod ON predstava.id=predstava_prijevod.id_predstava
							JOIN jezik ON jezik.id=predstava_prijevod.id_jezik
							WHERE jezik.jezik='Cro'
							ORDER BY datum,vrijeme;";
						if($result=mysqli_query($link,$query))

						while($obj=mysqli_fetch_object($result)){
							echo"<tr>
								<td><a href='predstava.php?id=$obj->Id'>$obj->Naziv</a></td>
								<td>$obj->Datum</td>
								<td>$obj->Vrijeme</td>
								<td>$obj->Cijena</td>
							</tr>";
						}

					?>						
				</tbody>
			</table>
			
		</div>
	</div>
	<?php 
		include("../footer.php");
		mysqli_close($link);
	?>
</body>
</html>