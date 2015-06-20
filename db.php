<?php

try
{
	$db = new PDO('mysql:host=localhost;dbname=rush00;charset=utf8', 'root', 'felindra');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

?>