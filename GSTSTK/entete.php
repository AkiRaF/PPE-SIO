
<!DOCTYPE html>
<html>
<head>
<meta charste="UTF-8" >
<link rel="stylesheet" type="text/css" href="index.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<title>GBS</title>
</head>
<body style="background-image: url('img/plante1.jpg');
  background-repeat: no-repeat;
  background-attachment:fixed;">
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container_fluid">
    <div class="navbar-header">
      
      <a class="navbar-brand" href=""><img src="img/logoGSB.png" width="70" height="30" style="margin-left:10px;"></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav"> 
        <li class="active"><a href="paccueil.php"><span class="glyphicon glyphicon-home"> Produits</span></a></li>
        <!--<li><a href="stock.php">Stock</a></li>-->
        <li><a href="plistecommande.php">Fiches de Demande</a></li>
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><p style="font-size: 20px;">Bonjour <?php echo $_SESSION['uname'];?></p></li> 
        <li><a href="deconnexion.php">Se déconnecter <span class="glyphicon glyphicon-log-in" style="font-size:18px; margin-right:20px"></span></a></li>      
      </ul>
    </div>
  </div>
  </nav>
</body>
</html>
