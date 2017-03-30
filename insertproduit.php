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

    

	<div class="container" style="margin-top: -50px;">

		<div class="panel panel-success">
			<div class="panel-heading">
				<div class="panel-title" style="font-size: 30px; font-weight: bold;">Ajouter nouveaux Produits</div>

			</div>

			<div class="panel-body">
				<form id="insert" class="form-horizontal" role="form" method="POST" action="index.php">
                

                </br></br>
					<div class="form-group">
                        <label for="nomprd" class="col-md-3 control-label" style="font-size: 16px;">Nom de Produits : </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="nomprd" placeholder="Nom de Produit">
                            </div>
                    </div>
                </br></br> 
                    <div class="form-group">
                        <label for="cat" class="col-md-3 control-label" style="font-size: 16px;">Catégorie* : </label>
                            <div class="col-md-8">
                                <select class="form-control" id="sel1" name="cate">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                </select>
                            </div>
                    </div>

                    <div class="form-group">
                    
                    </br></br>
                 
                   <div class="dispo col-sm-4">
                        <label for="prxvente" class="col-sm-3 control-label" style="font-size: 15px; width: 100%;text-align: center;">Stock dispo. :</label>
                           
                        <input type="text" class="form-control" name="stkdispo" placeholder="Prix vente" style="width: 100%;">
                    </div>

                    <div class="min col-sm-4">
                        <label for="prxvente" class="col-sm-3 control-label" style="font-size: 15px;width: 100%;text-align: center;">Stock min. :</label>
                            
                        <input type="text" class="form-control" name="stkmin" placeholder="Prix vente" style="width: 100%;"">
                    </div>     

                    <div class="max col-sm-4">
                        <label for="prxvente" class="col-sm-3 control-label" style="font-size: 15px;width: 100%;text-align: center;">Stock max. :</label>
                        
                        <input type="text" class="form-control" name="stkmax" placeholder="Prix vente" style="width: 100%;"">
                    </div>       
                    </div>

                   
                    </br></br>
                    <div style="text-align: center;">
                   <input type="submit" name="valid" value="Envoyer" style="text-align: center;"></span>
                   </div>
				</form>
                </br>
                 <p style="font-size: 12px;margin-right: 20px;"> * 1 = Medicalements à base de plantes / 2 = Médicalements allopathiques / 3 = Médicalements homéopathiques.</p>
				
			</div>

   
		</div>

	</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>