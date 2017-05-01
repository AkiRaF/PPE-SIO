<?php
    include('connecBDD.php');

    	if(isset($_POST['nomprd']) && !empty($_POST['nomprd'])){
    		$nomprd = strtoupper($_POST['nomprd']);

    		$sel=$bdd->prepare('SELECT id_prd FROM produits WHERE prd_nom = :nomprd');
    		$sel->execute(array('nomprd' => $nomprd));
    		$count = $sel->rowCount();


    		if($count){
                echo '<script language="Javascript">
                    alert ("Ce nom de produit a déjà existé, il n\' pas été enregistrer" )
                    window.location ="insertproduit.php";
                    </script>';
    			
                
    		}else{
    			$ins=$bdd->prepare('INSERT INTO produits (prd_nom, prd_cat, stk_dispo, stk_min, stk_max) VALUES (:prod, :cat, :stkdispo, :stkmin, :stkmax)');
			    $ins->execute(array(
			        'prod' => $_POST['nomprd'],
			        'cat' => $_POST['cate'],
			        'stkdispo' => $_POST['stkdispo'],
			        'stkmin' => $_POST['stkmin'],
			        'stkmax' => $_POST['stkmax'],
	        ));

                echo '<script language="Javascript">
                    alert ("Ce nouveau produit a été enregistré !" )
                    window.location ="insertproduit.php";
                    </script>';


                


    		}
        }else{
            echo '<script language="Javascript">
                    alert ("Vérifier bien le champ à remplir !" )
                    window.location ="insertproduit.php";
                    </script>';

        }
     

   
    	
   
?>