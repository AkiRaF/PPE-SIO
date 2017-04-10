<?php
session_start(); // On démarre la session AVANT toute chose
?>

<?php include("../connecBDD.php"); ?>
<?php
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('UPDATE produits SET prd_nom=? ,stk_dispo=? WHERE id=?'  );
$req->execute();

// Redirection du visiteur vers la page du minichat
header('Location: ../stock-plantes?a=2 ');
?>
