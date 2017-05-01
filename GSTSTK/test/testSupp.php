<?php

include('connecBDD.php');

$rep = $bdd->query('SELECT * FROM produits');

while($donnees = $rep->fetch()){
	echo "<a href='supp.php?id=" . $donnees['id_prd']."'>Suprimer</a><p>";
	echo "<b> Nom : </b>".$donnees['prd_nom']."<br/>";
	echo "<b> categorie : </b>".$donnees['prd_cat']."<br/>";
	echo "</p></div><hr/>";
}
?>
	

