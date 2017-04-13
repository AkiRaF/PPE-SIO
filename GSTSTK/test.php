
<html>
  <head>
    <title>modification de données en PHP :: partie2</title>
  </head>
<body>
  <?php
  //connection au serveur:
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db = mysql_select_db( "gestio-stock" ) ;
 
  //récupération de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement modifier
  $id  = $_GET["id_prd"] ;
 
  //requête SQL:
  $sql = "SELECT *
            FROM personnes
      WHERE id_prd = ".$id ;
 
  //exécution de la requête:
  $requete = mysql_query( $sql, $cnx ) ;
 
  //affichage des données:
  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
<form name="insertion" action="insertion2.php" method="POST">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
    <tr align="center">
      <td>id</td>
      <td><input type="text" name="id" value="<?php echo($result->id) ;?>"></td>
    </tr>
    <tr align="center">
      <td>prdnom</td>
      <td><input type="text" name="prdnom" value="<?php echo($result->prdnom) ;?>"></td>
    </tr>
    <tr align="center">
      <td>catprd</td>
      <td><input type="text" name="catprd" value="<?php echo($result->catprd) ;?>"></td>
    </tr>
    <tr align="center">
      <td>stkdispo</td>
      <td><input type="text" name="stkdispo" value="<?php echo($result->stkdispo) ;?>"></td>
    </tr>
 
    <tr align="center">
      <td colspan="2"><input type="submit" value="modifier"></td>
    </tr>
  </table>
</form>

  <?php
  }//fin if 
  ?>
</body>
</html>