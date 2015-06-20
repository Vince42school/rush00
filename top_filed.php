<?php
	require_once("header.php");
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Child R'us</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">

		<!-- Bare menu deroulant -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Je cherche <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Aryen</a></li>
            <li><a href="#">Maltais</a></li>
            <li><a href="#">Australien</a></li>
            <li><a href="#">Kenyan</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Fille</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Garçon</a></li>
          </ul>
        </li>
		</ul>

		<!-- Barre texte -->
      	<form class="navbar-form navbar-left" role="search">
    		<div class="input-group">
				<input type="text" class="form-control" placeholder="Je cherche...">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button">Go!</button>
				</span>
		</div>
		</form>
       
		<!-- Trucs a droite -->
		<ul class="nav navbar-nav navbar-right">
      		<li>
      			<a href="#"><button type="submit" class="btn btn-default btn-sm">Se connecter</button></a>
      		</li>
      	<!--  Menu deroulant a afficher en fonction de si on est log, et a remplir en fonction des achats -->	
      	<li class="dropdown">
      		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Panier<span class="caret"></span></a>
      		 <!-- Liste du panier -->
      		 <ul class="dropdown-menu test">
      		 	<li><a href="#">Petit Singapourien<span class="badge badge_float">162,80$</span><span class="badge badge_float">14</span></a></li>
            	<li><a href="#">Marseillais<span class="badge badge_float">14,00$</span><span class="badge badge_float">1</span></a></li>
            	<li><a href="#">Jeune Athenien<span class="badge badge_float">14,00$</span><span class="badge badge_float">1</span></a></li>
            </ul>
      	</li>
      	<!-- Icone Login/Logout, a changer en fonction de l'etat de session -->
      	  	<li>
      	  		<a href="#">
      	  		<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a>
      	  	</li>
      	</ul>
    	</div>
	</div>
</nav>

