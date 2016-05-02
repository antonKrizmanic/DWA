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
						<li><a href="#">Popis proizvoda</a></li>
						<li><a href="popisProizvodaIdiorm.php">Popis proizvoda Idiorm</a></li>
						<li><a href="unosForme.php">Unos proizvoda</a></li>
						<li><a href="kosarica.php">Kosarica</a></li>
					</ul>
				</nav>
				<section class="col-sm-10 content">

					<div class="form-inline">
						<div class="form-group">
							<label for="search">Trazeni pojam:</label>
							<input type="text" id="search" name="search" placeholder="Upisi trazeni pojam" class="form-control ">							
						</div>						
						<input type="button" id="submit" onclick="trazi()" class="btn btn-default" value="Pretraži stranicu">
						<input type="button" value="Obrisi kolacice" onclick = "setCookie('shop','',1)"></input>
						
					</div>
					
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
									<td><input type="submit" value="spremi" onclick = "setCookie(\'shop\',getCookie(\'shop\')+\',\'+'. $row[5] . ', 1)"></input></td>
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
			function trazi(){
				var unos=document.getElementById("search").value;
				var trs = document.getElementsByTagName("tr");
				
				for(var i=1;i<trs.length;i++){
					var c=trs[i].innerHTML.search(unos);
					if(c==-1){
						trs[i].style.display="none";	
					}
				}
			}
			function setCookie(cname, cvalue, exdays) {
    			var d = new Date();
    			d.setTime(d.getTime() + (exdays*24*60*60*1000));
    			var expires = "expires="+d.toUTCString();
    			document.cookie = cname + "=" + cvalue + "; " + expires;
			} 
			function getCookie(cname) {
  			  	var name = cname + "=";
    			var ca = document.cookie.split(';');
			    for(var i=0; i<ca.length; i++) {
        			var c = ca[i];
        			while (c.charAt(0)==' ') c = c.substring(1);
        			if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    			}
    			return "";
			} 
		</script>
</body>
</html>