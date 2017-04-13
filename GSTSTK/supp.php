<!--testModif-->
<?php
include('connecBDD.php');

if(isset($_GET['id']) && !empty($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE FROM produits WHERE id_prd = :id";
	$req = array('id' =>$id);
	$res = $bdd->prepare($sql);
	$res -> execute($req);


	 echo '<script language="Javascript">
                    alert ("Ce produit a été supprimer !" )
                    window.location ="produits.php";
                    </script>';
}
	
$res->closeCursor();

?>


