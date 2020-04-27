<?php

	/******   SERVEUR DE TESTS  ******/
	// $serveur_paypal = "https://www.sandbox.paypal.com/webscr&cmd=_express-checkout&token=";

	/******   SERVEUR DE PRODUCTION ******/
	$serveur_paypal = "https://www.paypal.com/webscr&cmd=_express-checkout&token=";


 function construit_url_paypal()
  {
	/******   DONNEES DE TESTS  ******/
	/*
	$api_paypal = 'https://api-3t.sandbox.paypal.com/nvp?';
	$user = 'vendeur_1236594550_biz_api1.siteduzero.com';
	$pass = 'SEFYITJFG8QRHN1S';
	$signature = 'ZWg4tSHZZ0GQIK8U6VKGWO1mxrtOAJzAGFNRnFpDWRKX-fv8q5Tuj64n';
	*/


	/******   DONNEES DE PRODUCTION ******/
	$api_paypal = 'https://api-3t.paypal.com/nvp?';
	$user = 'user_api1.siteduzero.com';
	$pass = 'KIRWQBHAQTUZO4ST';
	$signature = 'IUk3eOIUFAXKTUAPSITZHQOpoytQPYhQYOZNMkDlYPTYL-og6x7HnW98x';


	$version = 56.0; // Version de l'API

	$api_paypal = $api_paypal.'VERSION='.$version.'&USER='.$user.'&PWD='.$pass.'&SIGNATURE='.$signature; // Ajoute tous les paramètres

	return 	$api_paypal; // Renvoie la chaîne contenant tous nos paramètres.
  }
?>
