<?php
session_start();
?>
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
    echo '<ul style="padding:0; color:red; text-align:center;">';
    foreach($_SESSION['ERRMSG_ARR'] as $msg) {
        echo '<li>',$msg,'</li>'; 
    }
    echo '</ul>';
    unset($_SESSION['ERRMSG_ARR']);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charste="UTF-8" >
<link rel="stylesheet" type="text/css" href="index.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<title>GBS</title>
	
</head>
<body>
	
	<?php include("entete.php"); ?>

	<div class="container">
			
			<ul class="nav nav-tabs nav-fixed" id="nav-tabs">
			
				<li><a href="stock-plantes.php">Médicaments à base de plantes</a></li>		
				<li><a href="stock-allophatique.php">Médicaments allopathiques</a></li>
				<li><a href="stock-homeopath.php">Médicaments homéopathiques</a></li>
		
			</ul>
			
			<br/>

			<div class="col-md-offset-10 col-md-2">
			<a href="insertproduit.php" type="button" class="btn btn-sm btn-success" href="ajouterprd.php">Ajoute nouveaux produits</a>
			</div>

			<div class="presentation">
			<br/><br/>
				<h1 style="font-weight: bold; font-size: 50px;">Types de médicament</h1><hr/>

				<div class="pres1">
					<div class="row">
						<div class="col-sm-4">
							<img src="img/médical-plante.jpg" style="width:85%; height:50%; ">
						</div>
						<div class="col-sm-7">
							<u><h3>Médicaments à base de plantes</h3></u>
							<p>La famille des médicaments à base de plante inclut tous les médicaments et préparations pharmaceutiques dont la composition et le principe actif sont exclusivement d'origine végétale.</p>
							<p>Le médicament à base de plante est principalement utilisé en phytothérapie.
							Il s'agit d'une spécialité de médecine douce dont l'objectif est de soigner une maladie ou une pathologie à l'aide de plantes ou d'extraits de plantes.</p>
							
						</div>
					</div>
				</div>

				<div class="pres2">
					<div class="row">
						<div class="col-sm-7">
							<u><h3>Médicaments allopathiques</h3></u>
							<p>L'allopathie désigne un ensemble de traitements médicaux qui utilisent des substances dont les propriétés permettent de contrecarrer les symptômes de la maladie. Il y a donc les traitements que nous avons l'habitude d'utiliser et que nous appelons plus communément "les médicaments". Par exemple les antibiotiques, l'insuline ou encore les anti-inflammatoires sont des traitements allopathiques. L'allopathie concerne également les médecines non-conventionnelles telles que la phytothérapie, l'aromathérapie ou encore l'oligothérapie. Le terme s'oppose cependant à l'homéopathie.</p>						
						</div>
						<div class="col-sm-4">
							<img src="img/médical-allopathiques.jpg" style="width:100%; height:80%; margin-top: 10%; ">
						</div>						
					</div>				
				</div>

				<br/><br/>

				<div class="pres3">
					<div class="row">
						<div class="col-sm-4">
							<img src="img/Médical-homéopathiques.jpg" style="width:90%; height:50%; margin-top: 5%; ">
						</div>
						<div class="col-sm-7">
							<u><h3>Médicaments homéopathiques</h3></u>
							<p>L'homéopathie est une forme de médecine douce. Elle repose historiquement sur la théorie qu'une substance entrainant un symptôme chez une personne saine, pourrait chez une personne atteinte de ce symptôme, le faire disparaitre. Actuellement pratiquée par des homéopathes ou certains médecins généralistes, l'homéopathie repose sur l'utilisation de substances actives en concentrations infinitésimales.</p>
							
						</div>
					</div>
				</div>
				
			</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
