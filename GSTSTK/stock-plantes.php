<!DOCTYPE html>
<html>
<head>
<meta charste="UTF-8" >
<link rel="stylesheet" type="text/css" href="index.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<title>GBS-Médicament à base de Plantes</title>
	
</head>
<body style="position: relative; margin-left: auto;margin-right: auto;text-align: left; width: 55%; background-image: url('img/plante1.jpg');
  background-repeat: no-repeat;
  background-attachment:fixed;">

	<a href="produits.php"><span class="glyphicon glyphicon-arrow-left" style="margin-left: -150px; font-size: 20px; color: green;"> Retour</span></a>
	</br>



	<div class="containe">

		<h1 style="color: #659148; font-weight: bold;margin-top: -20px;font-family: serif;font-size: 400%;"><u>Médicament à base de Plantes</u></h1></br>

		<table id="tabStk" style="border-style: solid; border-width: 2px; border-color: black; font-family: serif;">
			<thead >
				<tr style="background-color: #64A5AC; color: white;font-size: 30px;">
					<th style='border-style: solid; border-width: 2px; border-color: black;text-align: center;'>Id</th>
					<th style='border-style: solid; border-width: 2px; border-color: black;text-align: center;>'>Nom de Produit</th>
					<th style='border-style: solid; border-width: 2px; border-color: black;text-align: center;padding-left: 3px;padding-right: 3px;>'> Catagorie</th>
					<th style='border-style: solid; border-width: 2px; border-color: black;text-align: center; font-size: 20px; padding-left: 2%;padding-right: 2%;>'>Stock dispo</th>
				</tr>
			</thead >
			<tbody style="border-style: solid; border-width: 2px; border-color: black; text-align: justify-all;">
	
			<?php 

				include("entete.php");
				
				include("connecBDD.php"); 

			

			//

			/*$reponse = $bdd->prepare('SELECT produits.id_prd, produits.prd_nom, produits.prd_cat, categorie.cat_nom
										FROM produits

										INNER JOIN categorie ON produits.prd_cat = categorie.id_cat');*/
			$reponse = $bdd->query('SELECT * FROM produits');
			$reponse->execute(array(1));
	
			
			while($donnees = $reponse ->fetch()){
				$tab[]=$donnees;	//Mettre les données comme une table.	
			}
			
			foreach ($tab as $key=>$value) { //Pour afficher les données ligne par ligne.
				  if($value['prd_cat']=="1"){
				?>
				<tr>
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

					<td style="border-style: solid; border-width: 2px; border-color: black; text-align: center;margin-right: 3px;background-color: #DAEACD; font-size: 14px; width: 180px;">
					<u><a href="modifierclient.php" style="color: black;margin-right: 5px;border-right-width: 2px;border-right-style: solid;padding-right: 10px;">Modifier</a></u>
					<?php echo "<u><a href='supp.php?id=" . $value['id_prd']."' name='supp'>Suprimer</a></u>"; ?></td>
				</tr>


			<?php
			}	
			}							
			$reponse->closeCursor();

			?>


			</tbody>
		</table>
		
	</div>
	</br></br>
		
</body>	
</html>