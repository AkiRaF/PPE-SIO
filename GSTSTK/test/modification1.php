<html>
  <head>
    <title>modification de données en PHP :: partie 1</title>
  </head>
<body>
  <?php
   include('../connecBDD.php');
 
    //requête SQL:
    $req = 'SELECT *
        FROM produits
        ORDER BY prd_nom' ;
 
    //exécution de la requête:
    $requete=$bdd->prepare($req);
    //$requete->execute(array(1));
 
    //affichage des données:
    while($result = $requete ->fetch() )
    {
       echo(
           "<div align=\"center\">"
           .$result->id_prd." ".$result->prd_nom." ".$result->prd_cat." ".$result->prd_cat
           ." <a href=\"test/modification2.php?idPersonne=".$result->id_prd."\">modifier</a></div>\n"
       ) ;

       echo("<p>".$result['id_prd']."</p>");
    }
  ?>
</body>
</html>