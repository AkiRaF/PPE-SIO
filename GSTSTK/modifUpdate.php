<?php
include('connecBDD.php');

  
  $sql = 'UPDATE produits SET prd_nom = :prd_nom, prd_cat = :prd_cat, stk_dispo = :stk_dispo WHERE id_prd = :id_prd';
  $req = $bdd->prepare($sql);
  $req->execute(array(
  ':id_prd' => $_POST['idprd'],
  ':prd_nom' => $_POST['nomprd'],
  ':prd_cat' => $_POST['cate'],
  ':stk_dispo' => $_POST['stkdispo'],
  ));

   echo '<script language="Javascript">
                    alert ("Ce produit a été modifier !" )
                    window.location ="modif.php";
                    </script>';

  
//$re->closeCursor();

?>