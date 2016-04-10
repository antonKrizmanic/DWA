<!DOCTYPE html>
<html lang="tal">
<head>
	<meta charset="UTF-8">
	<title>Teatro Felicita</title>
	<link rel="shortcut icon" href="../../img/favicon.png"/>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'><!--font-->
	<link rel="stylesheet" href="../../css/bootstrap.css"><!--bootstrap-->
	<link rel="stylesheet" href="../../css/stil.css"><!--moj css-->
	<link rel="stylesheet" href="../../css/icons/css/fontello.css"><!--ikone-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script><!--za slidere-->
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><!--za slidere-->
  	<?php include("../connect.php");?>
  
</head>
<body>

	<?php include("navigation.php"); ?>
	<!--slider-->
	<div class="container-fluid" style="margin:0px; padding:0px;" >  
	  	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  		<?php 
	  			$query="SELECT predstava.id AS Id, Slika, naziv_predstave AS Ime
				FROM predstava
				JOIN predstava_prijevod ON predstava.id=predstava_prijevod.id_predstava
				JOIN jezik ON jezik.id=predstava_prijevod.id_jezik
				WHERE jezik.jezik='Tal';";
				if($result=mysqli_query($link,$query))

				$row_cnt = mysqli_num_rows($result);
				echo '<ol class="carousel-indicators">';
				for($i=0;$i<$row_cnt;$i++){
					if($i==0){
						echo'<li data-target="#myCarousel" data-slide-to="'.$i.'" class="active"></li>';
					}
					else{
						echo'<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';
					}
				}    		
  				echo'</ol>';
		    	echo '<div class="carousel-inner" role="listbox">';
				$i=0;
				while($obj=mysqli_fetch_object($result)){
					if($i==0){
						echo'<div class="item active">
			        		<a href="predstava.php?id='.$obj->Id.'"><img src="'.$obj->Slika.'" al="'.$obj->Ime.'"></a>
			    			</div>';
		    		}
		    		else{
		    			echo'<div class="item">
			        		<a href="predstava.php?id='.$obj->Id.'"><img src="'.$obj->Slika.'" al="'.$obj->Ime.'"></a>
			    			</div>';	
		    		}
		    		$i++;
				}
		    ?>		 
		</div>
	</div>
	<footer class="index-footer">
		<a href="https://www.facebook.com/" target="blank"><i class="icon-facebook"></i></a>
		<a href="https://twitter.com/" target="blank"><i class="icon-twitter"></i></a>
		<a href="https://www.youtube.com/" target="blank"><i class="icon-youtube"></i></a>
	</footer>
</body>
</html>



