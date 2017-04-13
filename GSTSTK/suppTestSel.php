<!--testModif-->
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Liste déroulante test</title>
</head>
 
<body>
<form method="post" action="test/testModif.php">
 
       <label for="prd_nom">Dans quel pays habitez-vous ?</label><br />
       <select name="prd_nom" id="prd_nom">
	<?php

		include('connecBDD.php');
		$reponse1 = $bdd->query('SELECT * FROM produits WHERE id_prd=:id');
		
		 
		while ($donnees = $reponse->fetch())
		{
		?>
		    <option name="id_prd" value=" <?php echo $donnees['id_prd']; ?>"> <?php echo $donnees['id_prd']; ?></option>

		    <?php 
		    if(isset($donnees['id_prd'])){
		    	$reponse2 = $bdd->query("UPDATE listerdv SET id_rdv = ?, NomUtilisateur = ?,date_rdv= ?, heure_rdv= ?, nomClient = ?, commentaire_rdv = ?  WHERE id_rdv = :id)");
		    
		    ?>
		    <div class="form-group">
            <label for="nomprd" class="col-md-3 control-label" style="font-size: 16px;">Nom de Produits : </label>
            	<div class="col-md-8">
                     <input type="text" class="form-control" name="<?php echo $donnees['id_prd']; ?>" value="<?php echo $donnees['id_prd']; ?>" ><?php echo $donnees['prd_nom']; ?>
                                 
                 </div>
                    </div>
                </br></br> 
                    <div class="form-group">
                        <label for="cat" class="col-md-3 control-label" style="font-size: 16px;">Catégorie : </label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="prd_cat" value="<?php echo $donnees['id_prd']; ?>"><?php echo $donnees['nom_prd']; ?>
                                
                            </div>
                    </div>

                    <div class="form-group">
                    </br></br>
                        <label for="prxvente" class="col-sm-3 control-label" style="font-size: 15px;">Stock disponible : </label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="stk_dispo" value="<?php echo $donnees['id_prd']; ?>"><?php echo $donnees['nom_prd']; ?>
                                
                            </div>

		<?php
	}
			
		}
		 
	?>
		</select>
	<?php 

	?>
 
	
		
         
</form>
</body>
</html>


