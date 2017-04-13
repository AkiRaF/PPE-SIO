<!DOCTYPE html>
<html>
<head>
<meta charste="UTF-8" >
<link rel="stylesheet" type="text/css" href="index.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<title>GBS-Ajouter Produits</title>
</head>
<body style="background-image: url('img/wallpaper-2.jpg');
  background-repeat: no-repeat;
  background-attachment:fixed;">

  <a href="produits.php"><span class="glyphicon glyphicon-arrow-left" style="margin-left: 144px; font-size: 20px; color: green;"> Retour</span></a>

	<?php include("entete.php"); ?>
    <?php include("connecBDD.php"); ?>


    <!--testModif-->

    <form method="post" action="test/testModif.php">
     
           <label for="prd_nom">Dans quel pays habitez-vous ?</label><br />
           <select name="prd_nom" id="prd_nom">
    <?php

     
    $reponse = $bdd->query('SELECT * FROM produits');
     
    while ($donnees = $reponse->fetch())
    {
    ?>
        <option value=" <?php echo $donnees['prd_nom']; ?>"> <?php echo $donnees['prd_nom']; ?></option>
    <?php
    }
     
    //$reponse->closeCursor();
     
    ?>
    </select>
 
    </form>



	<div class="container" style="margin-top: -50px;">

		<div class="panel panel-success">
			<div class="panel-heading">
				<div class="panel-title" style="font-size: 30px; font-weight: bold;">Modifier</div>

			</div>

			<div class="panel-body">
				<form id="insert" class="form-horizontal" role="form" method="GET" action=""> 
                
                 <?php
                    $requete = $bdd->prepare("SELECT * FROM produits where prd_nom=".$_GET['prd_nom']);
                    $requete->execute(array());
                    $arg= $requete->fetch();   
                ?>
                </br></br>
					<div class="form-group">
                        <label for="nomprd" class="col-md-3 control-label" style="font-size: 16px;">Nom de Produits : </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="id_prd" placeholder="Nom de Produit" >
                                 <?php echo $value['id_prd'];?>
                            </div>
                    </div>
                </br></br> 
                    <div class="form-group">
                        <label for="cat" class="col-md-3 control-label" style="font-size: 16px;">Catégorie : </label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="prd_nom" placeholder="Categorie">
                                <?php echo $value['prd_nom'];?>
                            </div>
                    </div>

                    <div class="form-group">
                    </br></br>
                        <label for="prxvente" class="col-sm-3 control-label" style="font-size: 15px;">Stock disponible : </label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="stk_dispo" placeholder="">
                                <?php echo $value['stk_dispo'];?>
                            </div>

                       <!-- <label for="prxvente" class="col-sm-2 control-label" style="font-size: 15px;">Prix de Vente :</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="stk" placeholder="Prix vente" value="$arg[id_prd]">
                            </div>-->
                    </div>

                   
                    </br></br>

                    <div class="form-group">
                        <!-- Button -->                                        
                        <div class="enregiste">
                            <button id="btn-enregist" type="button" class="btn btn-success" onclick="return confirm('Etes-vous sûre de supprimer cette article ?');"><i class="icon-hand-right"></i>&nbspEnregiste</button>
                           <!--<button id="btn-annuler" type="button" class="btn btn-warning"><i class="icon-hand-right"></i>&nbspAnnuler</button>-->
                            
                        </div>
                       
                    </div>
				</form>
				
			</div>


		</div>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>