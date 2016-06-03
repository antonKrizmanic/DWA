<?php
include('../vendor/autoload.php');
ORM::configure('mysql:host=localhost;dbname=fantastic_beasts');
ORM::configure('username', 'root');
ORM::configure('password', 'root');

// iduća linija je potrebna kako bi natjerali konekciju prema MySQL-u u utf8
ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$unos=$_GET['var'];
	// podaci iz baze
	$products=ORM::for_table('proizvodi')->select_many(array('Naziv'=>'proizvodi.naziv','Vrsta'=>'proizvod.vrstaProizvoda','Zivotinja'=>'zivotinje.nazivZivotinje',
								'Opis'=>'proizvodi.opisProizvoda','Cijena','id'=>'proizvodi.id'))->
							join('proizvod',array('proizvodi.tipProizvoda','=','proizvod.id'))->
							join('zivotinje',array('proizvodi.tipZivotinje','=','zivotinje.id'))->
							where_like('Naziv', "%$unos%")->							
							order_by_asc('id')->
							find_array();

/*where_like('Naziv', "%$unos%")->*/
echo json_encode($products);
?>
