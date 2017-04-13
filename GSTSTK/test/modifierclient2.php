<?php
session_start(); // On démarre la session AVANT toute chose
?>

<?php include("../connecBDD.php"); ?>

<?php

try{
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('UPDATE produits SET id_prd = ?, prd_nom=? , stk_dispo=? WHERE id_prd=?');
$req->execute(array($_POST['id_prd'], $_POST['prd_nom'],$_GET['stk_dispo']));

// Redirection du visiteur vers la page du minichat
header('Location: ../stock-plantes?a=2 ');
}catch(Exception $e){
	die('Erreur : '.$e->getMessage("Erreur de modifier!"));
	}
?>
