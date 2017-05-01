<html>
  <head>
    <title>modification de données en PHP :: partie 1</title>
  </head>
<body>
  <?php
    //connection au serveur:
    $cnx = mysql_connect( "localhost", "root", "" ) ;
 
    //sélection de la base de données:
    $db = mysql_select_db( "gestion-stock" ) ;
 
    //requête SQL:
    $sql = "SELECT *
        FROM personnes
        ORDER BY prd_nom" ;
 
    //exécution de la requête:
    $requete = mysql_query( $sql, $cnx ) ;
 
    //affichage des données:
    while( $result = mysql_fetch_object( $requete ) )
    {
       echo(
           "<div align=\"center\">"
           .$result->prd_nom." ".$result->prd_cat." ".$result->stk_dispo
           ." <a href=\"modification2.php?idPersonne=".$result->id."\">modifier</a></div>\n"
       ) ;
    }
  ?>
</body>
</html>