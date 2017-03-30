<!DOCTYPE html>
<html>
<head>
<meta charste="UTF-8" >
<link rel="stylesheet" type="text/css" href="index.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<title>GBS-Liste à commander</title>
	
</head>

<body style="position: relative; margin-left: auto;margin-right: auto;text-align: left; width: 70%; background-image: url('img/wallpaper-1.jpg');
  background-repeat: no-repeat;
  background-attachment:fixed;">

  	<a href="produits.php"><span class="glyphicon glyphicon-arrow-left" style="margin-left: -65px; font-size: 20px; color: green;"> Retour</span></a>
   

	<?php include("entete.php"); ?>
	<div class="containe" style="margin-left: 30px ;">

	<h1 style="color: #659148; font-weight: bold;font-family: serif;font-size: 400%;"><u>Liste de Produits à commander</u></h1></br></br>
	<table id="tabStk" style="border-style: solid; border-width: 2px; border-color: black; font-family: serif;">
			<thead >
				<tr style="background-color: #64A5AC; color: white;font-size: 30px;">
					<th style='border-style: solid; border-width: 2px; border-color: black;text-align: center;width: 3%'>Id</th>
					<th style='border-style: solid; border-width: 2px; border-color: black;text-align: center;width: 30%;'>Nom de Produit</th>
					<th style='border-style: solid; border-width: 2px; border-color: black;text-align: center;padding-left: 3px;padding-right: 3px;'> Catagorie*</th>
					<th style='border-style: solid; border-width: 2px; border-color: black;text-align: center; font-size: 20px; padding-left: 2%;padding-right: 2%;'>Stock dispo</th>
					<th style='border-style: solid; border-width: 2px; border-color: black;text-align: center; font-size: 20px; padding-left: 2%;padding-right: 2%;width: 10%'>Quantité</th>
				</tr>
			</thead >
			<tbody style="border-style: solid; border-width: 2px; border-color: black; text-align: justify-all;">

	<?php
  include ('connecBDD.php');
  $req= 'SELECT * FROM produits';
  $reponse = $bdd->prepare($req);
  $reponse->execute(array(1));
  $donnees = $reponse;
  while($req = $donnees ->fetch()){
    $tab[]=$req;
    
  }
  foreach ($tab as $key => $value) {
    if($value['stk_dispo'] <= $value['stk_min']){
    //echo ("tab : ".$value['art_nom']."</br>");
    	?><tr>
					<td  style="border-style: solid; border-width: 2px; border-color: black; text-align: center;background-color: #64A5AC; font-weight: bold;padding-left: 7px;padding-right: 7px;color: white;padding-top: 5px;padding-bottom: 5px; font-size: 20px;">
					<?php echo $value['id_prd'];?>
					</td>
					<td style="border-style: solid; border-width: 2px; border-color: black;padding-left: 4px;text-align: justify-all;font-weight: bold;background-color: #DAEACD;">
					<?php echo $value['prd_nom'];?>
					</td>
					<td style="border-style: solid; border-width: 2px; border-color: black; text-align: center;margin-right: 3px;background-color: #DAEACD;">
					<?php echo $value['prd_cat'];?>
					</td>
					<td style="border-style: solid; border-width: 2px; border-color: black; text-align: center;margin-right: 3px;background-color: #DAEACD; font-size: 20px;">
					<?php echo $value['stk_dispo'];?>
					</td>
					<td style="border-style: solid; border-width: 2px; border-color: black; text-align: center;margin-right: 3px;background-color: #DAEACD; font-size: 20px; width: 2%">
					<input type="number" name="qnt" style="width: 85%">
					</td>
					
				</tr>

			<?php	
			}		
   
  }
      

$reponse->closeCursor();

 
 ?>

</tbody>
		</table>
		</br></br></br></br>
		
		<input type="submit" name="envoye" value="Envoyer" style="width: 20%">
	</div>
	</br></br>
		
</body>	

</html>
