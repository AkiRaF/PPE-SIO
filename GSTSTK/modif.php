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

  <a href=""><span class="glyphicon glyphicon-arrow-left" style="margin-left: 144px; font-size: 20px; color: green;"> Retour</span></a>

  <div class="container" style="margin-top: -50px;">

        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="panel-title" style="font-size: 30px; font-weight: bold;">Modifier de prosuits</div>

            </div>
        <?php
        include('entete.php');
        include('connecBDD.php');

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT * FROM produits WHERE id_prd = :id";
            $req = array(':id' =>$id); // FAY : ici les : sont utiles
            $res = $bdd->prepare($sql);
            $res -> execute($req);

            while($sql = $res ->fetch() )
               
            {

                 $value = $sql;
            ?>
                    <div class="panel-body">
                                <form id="insert" class="form-horizontal" role="form" method="POST" action="./test/testModifUpdate.php"><!-- FAY : ici faire attention à mettre la bonne url -->
                                

                                </br></br>
                                   
                                    <div class="form-group">

                                        <label for="idprd" class="col-md-3 control-label" style="font-size: 16px;" name="idprd">Id :</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" value="<?php echo $value['id_prd'];?>" name="idprd" style="width: 100%;background-color: #DCDADA;width: 50%"/>
                                            </div>

                                        
                                        
                                    </div>

                                    <div class="form-group">

                                        <label  class="col-md-3 control-label" style="font-size: 16px;">Nom de Produits : </label>
                                            <div class="col-md-8">
                                                <input for="nomprd"  type="text" class="form-control" name="nomprd" placeholder="Nom de Produit" value="<?php echo $value['prd_nom'];?>">
                                            </div>

                                    </div>
                                    
                                </br></br> 
                                    <div class="form-group col-md-12">

                                        <label for="cat" class="col-md-3 control-label" style="font-size: 16px;">Catégorie* : </label>
                                            <div class="col-md-3">
                                                <select class="form-control" id="sel1" name="cate">
                                                
                                                <option value="<?php echo $value['prd_cat'];?>" style=""><?php echo $value['prd_cat'];?></option>
                                                <option >1</option>
                                                <option >2</option>
                                                <option >3</option>
                                               
                                                </select>
                                            </div>


                                        <label for="stkdispo" class="col-md-2 control-label" style="font-size: 15px;">Stock dispo :</label>
                                            <div class="col-md-3"> 
                                                <input type="text" class="form-control" name="stkdispo" value="<?php echo $value['stk_dispo'];?>" style="width: 100%;">
                                            </div>     
                                    </div>

                                    <div class="form-group">
    
                                          
                                    </div>

                    </br></br>
                        <div style="text-align: center;">
                            <input type="submit" name="valid" value="Envoyer" style="text-align: center;"></span>
                       </div>
                </form>
            </div>

             </br>
                 <p style="font-size: 12px;margin-right: 20px;"> * 1 = Medicalements à base de plantes / 2 = Médicalements allopathiques / 3 = Médicalements homéopathiques.</p>

                                  
                <?php

                }
                    
                }
                    
                $res->closeCursor();

                ?>

        </div>

    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>




