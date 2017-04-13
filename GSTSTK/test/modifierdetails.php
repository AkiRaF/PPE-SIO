
<!DOCTYPE html0.>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<?php include("../connecBDD.php"); ?>

<?php
/*echo "<form action='test/modifierdetails2.php?modi=$_GET[mod]&modi2=$_GET[mod2]'  method='POST'>
<fieldset>
<center><h2>Modifier Un Client</h2></center> <!-- Titre du fieldset -->";*/
?>
<?php
$requete = $bdd->prepare("SELECT * FROM produits where `prd_nom` Like '".$_GET['prd_nom']."' AND `stk_dispo` Like '".$_GET['mod2']."' ");
$requete->execute(array());
$arg= $requete->fetch();

echo " <div class='container'>
<label for='prd_nom'>Numero de Commande :</label>
<input type='text' name='prd_nom' class='form-control' id='prd_nom' value='$arg[prd_nom]' required /><br>
</div>";


echo " <div class='container'>
<label for='stk_dispo'>Reférence Produit :</label>
<input type='text' name='stk_dispo' class='form-control' id='stk_dispo' value='$arg[stk_dispo]' required /><br>
</div>";


    
echo "<center>
    		<button type='submit' class='btn btn-default' value='Modifier'>Modifier</button>
	</center>";
?> 
</fieldset>
</form>



</body>
</html>
