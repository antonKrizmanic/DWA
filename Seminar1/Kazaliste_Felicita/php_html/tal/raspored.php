<!DOCTYPE html>
<html lang="tal">
<head>
	<meta charset="UTF-8">
	<title>Programma</title>
	<link rel="shortcut icon" href="../../img/favicon.png"/>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../../css/bootstrap.css"><!--bootstrap-->
	<link rel="stylesheet" href="../../css/stil.css"><!--moj css-->
	<link rel="stylesheet" href="../../css/icons/css/fontello.css"><!--ikone-->
	<?php include("../connect.php");?>
</head>
<body>
	<?php include("navigation.php"); ?>
	<div class="container">
		<div class="table-responsive">
			<h2>Programma degli spettacoli</h2>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>						
						<th>Titolo dello spettacolo</th>
						<th>Data</th>
						<th>Ora</th>
						<th>Prezzo</th>						
					</tr>
				</thead>
				<tbody>
					<?php
						$query="SELECT id_predstave,naziv_predstave,DATE_FORMAT(datum_i_vrijeme,'%e.%c.%Y') AS datum,TIME_FORMAT(datum_i_vrijeme,'%k:%i') AS vrijeme,cijena 
							FROM predstava
							JOIN termin ON termin.id_predstave=predstava.id
							JOIN predstava_prijevod ON predstava.id=predstava_prijevod.id_predstava
							JOIN jezik ON jezik.id=predstava_prijevod.id_jezik
							WHERE jezik.jezik='Tal'
							ORDER BY datum,vrijeme;";
						if($result=mysqli_query($link,$query))

						while($row=mysqli_fetch_row($result)){
							echo"<tr>
								<td><a href='predstava.php?id=$row[0]'>$row[1]</a></td>
								<td>$row[2]</td>
								<td>$row[3]</td>
								<td>$row[4] kn</td>
							</tr>";
						}

					?>	
					
				</tbody>
			</table>
		</div>
	</div>
	<?php include("../footer.php"); ?>
</body>
</html>