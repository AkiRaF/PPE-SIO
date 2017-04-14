
<html>
  <head>
    <title>modification de données en PHP :: partie2</title>
  </head>
<body>
  <?php

    include('../connecBDD.php');
     
      //récupération de la variable d'URL,
      //qui va nous permettre de savoir quel enregistrement modifier
    $id  = $_GET["id_prd"] ;
     
      //requête SQL:
    $sql = 'SELECT *
            FROM produits
            WHERE id_prd = '.$id ;
      
    
  //exécution de la requête:
  $requete=$bdd->prepare($sql);
  $requete->execute();

 
  //affichage des données:
  if($result = $sth->fetch())
  {
  ?>
<form name="insertion" action="test/modification3.php" method="POST">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
    <tr align="center">
      <td>id</td>
      <td><input type="text" name="id_prd" value="<?php echo($result->id_prd) ;?>"></td>
    </tr>
    <tr align="center">
      <td>prdnom</td>
      <td><input type="text" name="prd_nom" value="<?php echo($result->prd_nom) ;?>"></td>
    </tr>
    <tr align="center">
      <td>catprd</td>
      <td><input type="text" name="prd_cat" value="<?php echo($result->prd_cat) ;?>"></td>
    </tr>
    <tr align="center">
      <td>stkdispo</td>
      <td><input type="text" name="stk_dispo" value="<?php echo($result->stk_dispo) ;?>"></td>
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