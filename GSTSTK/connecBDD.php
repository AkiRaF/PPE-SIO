<?php


	try{
	$bdd = new PDO('mysql:host=localhost;dbname=gestion-stock;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

	//echo "La base de donnée est connecté !";
	}catch(Exception $e){
	die('Erreur : '.$e->getMessage("Erreur de connextion BDD !"));
	}


?>




