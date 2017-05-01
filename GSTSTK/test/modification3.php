<?php
   include('../connecBDD.php')
 
  //récupération des valeurs des champs:
  //nom:
  $id     = $_POST["id_prd"] ;
  //prenom:
  $prenom = $_POST["prd_nom"] ;
  //adresse:
  $adresse = $_POST["prd_cat"] ;
  //code postal:
  $cp        = $_POST["stk_dispo"] ;
  
  
  //création de la requête SQL:
  $sql = 'UPDATE produits
            SET id_prd         = "$id", 
            prd_nom    = "$prenom",
      prd_cat   = "$adresse",
      stk_dispo           = "$cp",
           WHERE id_prd = "$id" '; 
  //exécution de la requête SQL:
  $requete=$bdd->prepare($sql);
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
    echo("La modification à été correctement effectuée") ;
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>