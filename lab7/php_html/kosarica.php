<?php		
		
	session_start();
	if($_SESSION['username'] !="korisnik" || $_SESSION['password'] !="korisnik"){
		header('Location: login.html');
	}
	include("../vendor/autoload.php");
	require_once 'idiorm.php';
	ORM::configure('mysql:host=localhost;dbname=fantastic_beasts');
	ORM::configure('username','root');
	ORM::configure('password','root');		
	ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));	
	
	$token=substr($_COOKIE["shop"],1);	
	if($token !=""){
		$products=ORM::for_table('proizvodi')->select_many(array('Naziv'=>'proizvodi.naziv','Vrsta'=>'proizvod.vrstaProizvoda','Zivotinja'=>'zivotinje.nazivZivotinje',
		'Opis'=>'proizvodi.opisProizvoda','Cijena','id'=>'proizvodi.id'))->
		join('proizvod',array('proizvodi.tipProizvoda','=','proizvod.id'))->							
		join('zivotinje',array('proizvodi.tipZivotinje','=','zivotinje.id'))->
		where_raw("proizvodi.id in($token)")->
		order_by_asc('id')->
		find_many();	
	}
	$loader = new Twig_Loader_Filesystem('./');
	$twig = new Twig_Environment($loader, array(
    	'cache' => false,
	));
	echo $twig->render('kosarica.html', array('products' => $products));
	

?>