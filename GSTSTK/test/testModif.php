<?php
include('../connecBDD.php');

/*if(isset($_GET['id']) && !empty($_GET['id'])){
  $id = $_GET['id'];
  $sql = 'UPDATE produits SET prd_nom = :prd_nom, prd_cat = :prd_cat, stk_dispo = :stk_dispo WHERE id_prd = :id';
  $req = $bdd->prepare($sql);
  $req->execute(array(
  'id' =>$id,
  ':prd_nom' => $_POST['nomprd'],
  ':prd_cat' => $_POST['cate'],
  ':stk_dispo' => $_POST['stkdispo']
  ));*/

  
  $sql = 'UPDATE produits SET prd_nom = :prd_nom, prd_cat = :prd_cat, stk_dispo = :stk_dispo WHERE id_prd = :id_prd';
  $req = $bdd->prepare($sql);
  $req->execute(array(
  ':id_prd' => $_POST['idprd'],
  ':prd_nom' => $_POST['nomprd'],
  ':prd_cat' => $_POST['cate'],
  ':stk_dispo' => $_POST['stkdispo'],
  ));

  // FAY : produits.php n'existe pas
   echo '<script language="Javascript">
                    alert ("Ce produit a été modifier !" )
                    window.location ="../modif.php";
                    </script>';

  
//$re->closeCursor();

?>