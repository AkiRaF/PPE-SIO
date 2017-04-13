<!--testModif-->

<?php include('connecBDD'); ?>
	<select name="id" id="id_prd">
<?php
	$id = $_GET['id'];
 	$reponse = $bdd->query('SELECT * FROM produits WHERE id_prd=:id');
 	$req = array('id' => $id);
 	$res=

							     
	 while ($donnees = $reponse->fetch())
	 {
	?>
	<option value=" <?php echo $donnees['id_prd']; ?>" style =""> <?php echo $donnees['id_prd']; ?></option>
	  
	<?php
	}

	if(isset($_GET['id']))
							    

	?>

	</select>







