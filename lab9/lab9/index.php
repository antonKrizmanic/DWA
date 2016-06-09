<?php
/*
 * više primjera i informacija, te dodatnih providera potražite na
 * http://silex.sensiolabs.org/
 * http://maran-emil.de/nodes/80-github-open-source-projects-based-on-silex-php-framework
 *
 * Dodatni service providers
 * https://github.com/silexphp/Silex/wiki/Third-Party-ServiceProviders
 *
 * Kako napiati svoj provider:
 * http://srcmvn.com/blog/2013/02/22/writing-silex-service-providers/
 *
 *
 */



require_once 'vendor/autoload.php';
use Symfony\Component\HttpFoundation\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;



try {
    // stvorimo novu Silex aplikaciju
    $app = new Silex\Application();
	
	$app['debug'] = true;
	
    // registriramo dodatne komponente
    // Silex je u osnovi framework na koji se dodaju komponente, a router je najvažniji dio.
    // registriramo podršku za TWIG
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/views',
    ));
    // registriramo podršku za IDIORM kroz PARIS
    $app->register(new FranMoreno\Silex\Provider\ParisServiceProvider());
	
	// podrška za sesije u Silexu! 
    $app->register(new Silex\Provider\SessionServiceProvider());


	// Funkcija koja provjerava u sesiji radi li se o ulogiranom korisniku.
	// Ova funkcija se poziva kao "before" funkcija prije glavne funkcije rute
	// te se izvršava prije glavne funkcije rute. Ako netko nije ulogiran, 
	// preusmjerit će se na login stranicu.
	$authorize = function (Request $request,  Silex\Application $app){ 
		 $request->getSession()->start();
		 
		 // provjera podataka o ulogiranosti kroz sesiju
		 if ($request->hasPreviousSession() && $request->getSession()->has('user')){
			 return;
        }
        return $app->redirect('login');
      
};
	
	
	
	// postavi GET rutu za upit na osnovnu stranicu ( npr. http://localhost:8001/lab8/)
    $app->get('/' , function() use ($app) {
		 return $app->redirect('login');
	});
    //GET ruta za zivotopis
    $app->get('/zivotopis', function() use ($app){
    	return $app['twig']->render('zivotopis.twig', array('title'=>'Zivotopis'));
    })->before($authorize);
	
	// GET ruta za popis proizvoda	
	$app->get('/popisProizvoda',  function () use ($app) {
		
		include_once('logic/idiormUse.php');

		// podaci iz baze se dodaju preko AJAXA		
		/*$products=ORM::for_table('proizvodi')->select_many(array('Naziv'=>'proizvodi.naziv','Vrsta'=>'proizvod.vrstaProizvoda','Zivotinja'=>'zivotinje.nazivZivotinje',
								'Opis'=>'proizvodi.opisProizvoda','Cijena','id'=>'proizvodi.id'))->
							join('proizvod',array('proizvodi.tipProizvoda','=','proizvod.id'))->							
							join('zivotinje',array('proizvodi.tipZivotinje','=','zivotinje.id'))->
							order_by_asc('id')->
							find_many();		
	*/
		// prikaži odgovarajući template
		return $app['twig']->render('popisProizvodaIdiorm.twig', array("products"=>$products,'title' => "Popis proizvoda",'basicDir'=>''));
	})->before($authorize);  // before funkcija koja se izvršava prije glavne funkcije rute.
	// Get ruta za popis proizvoda preko smartphonea
	$app->get('/popisMobile', function() use ($app){
		include_once('logic/idiormUse.php');	
		// podaci iz baze se dodaju preko AJAXA
		// prikaži odgovarajući template
		return $app['twig']->render('popisMobile.twig', array("products"=>$products,'title' => "Popis proizvoda",'basicDir'=>''));
	})->before($authorize);
	 // GET ruta za kosaricu
	 // prikazi sadrzaj kosarice
	$app->get('/kosarica', function() use ($app){
		
		include_once('logic/idiormUse.php');
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
		return $app['twig']->render('kosarica.twig',array("products"=>$products,'title'=>'Kosarica','basicDir'=>''));
	})->before($authorize);
	
	 // GET ruta za unos
	 // prikazi ekran za unos proizvoda
	$app->get('/unos', function() use ($app){
		include_once('logic/idiormUse.php');
		$proizvodi=ORM::for_table('proizvod')->find_many();
		$zivotinje=ORM::for_table('zivotinje')->find_many();
		return $app['twig']->render('unos.twig',array("proizvodi"=>$proizvodi,"zivotinje"=>$zivotinje,"title"=>"Unos proizvoda"));
	})->before($authorize);
	
	// POST ruta za unos
	// obrada unesenih podataka
	$app->post('/unos', function(Request $request) use ($app){
		include_once('logic/idiormUse.php');
		$parameters=$request->request->all();

		$naziv=false;
		$vrstaProizvoda=false;
		$zivotinja=false;
		$opis=false;
		$cijena=false;
		
			$naziv=$parameters['naziv'];
			$vrstaProizvoda=$parameters['vrsta'];
			$zivotinja=$parameters['zivotinja'];				
			$opis=$parameters['opis'];		
			$cijena=$parameters['cijena'];			
			$unos=ORM::for_table('proizvodi')->create();
			$unos->naziv=$naziv;
			$unos->tipZivotinje=$zivotinja;
			$unos->tipProizvoda=$vrstaProizvoda;
			$unos->opisProizvoda=$opis;
			$unos->cijena=$cijena;
			$unos->save();
		
			return $app->redirect('popisProizvoda');
	})->before($authorize);

	 // GET ruta za login
	 // prikazi login ekran
	 $app->get('/login',  function () use ($app) {
		return $app['twig']->render('login.twig');
		
	});	
	// POST ruta za login
	// obradi login podatke i postavi sesiju
	 $app->post('/login', function (Request $request) use ($app) {
	    $parameters = $request->request->all();
    
		// provjera za ulogiranost - postavi sesiju i redirektaj na osnovnu stranicu
		if ($parameters['username']=='korisnik' and $parameters['password']=='korisnik') {
			 $app['session']->set('user', array('username' => $inputUsername));
			
			return $app->redirect('popisProizvoda');
		}
		else return $app->redirect('login');
    });
	
	// GET ruta za logout
	 // izlogira (brise podatke iz sesije) i vraća na login ekran
	 $app->get('/logout',  function () use ($app) {
		 $app['session']->remove('user'); 
		return $app->redirect('login');
	});


    $app->run();
}
catch (Exception $ex) {
    echo $ex->getMessage();
}
