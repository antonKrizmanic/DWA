<?php
    $pageName = basename($_SERVER['PHP_SELF'],".php");    
?>
<header class="container">
  <p class="text-right no-margin">
    <!--ako korisnik nije prijavljen-->
    <a href="#" data-toggle="modal" data-target="#login-modal">prijava</a>
    <a href="#" data-toggle="modal" data-target="#register-modal">registracija</a>
    <!--ako je korisnik prijavljen-->
    <span>korisnicko ime</span>
    <a href="#">odjava</a>
  </p>
</header>
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if ($pageName=="index") echo 'class="active"'; ?>><a href="index.php">Početna</a></li>        
        <li <?php if ($pageName=="cars") echo 'class="active"'; ?>><a href="cars.php">Flota</a></li>        
        <li <?php if ($pageName=="contact") echo 'class="active"'; ?>><a href="contact.php">Kontakt</a></li>
        <!--link je vidljiv samo adminu-->
        <li <?php if ($pageName=="rezervations") echo 'class="active"'; ?>><a href="rezervations.php">Rezervacije</a></li>
        <li <?php if ($pageName=="locations") echo 'class="active"'; ?>><a href="locations.php">Lokacije</a></li>
      </ul>      
      <ul class="nav navbar-nav navbar-right">        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jezik <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Hrvatski</a></li>
            <li><a href="#">Engleski</a></li>            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

