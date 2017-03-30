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


<body style="background-image: url('img/plante1.jpg');
  background-repeat: no-repeat;
  background-attachment:fixed;background-size: 100%;">
<form action="index.php" method="POST">
<div class="container" id="connecter">
  <form class="form-signin" >
    <h2 class="form-signin-heading" style="font-size: 40px; font-weight:bold;color:  #008080;text-align: center;margin-top: 5%"><u>Se Connecter</u></h2><br/>
    <div class="connec" style="text-align: center;">
    <label for="inputEmail" class="sr-only"></label>
    <input type="text" name="uname" id="inputEmail" class="form-control" style="text-align: center;font-size: 20px;width: 275px;margin-bottom: 4px;" placeholder="Identifier d'Administrateur" required autofocus>
    </br>
    <label for="inputPassword" class="sr-only"></label>
    <input type="password" name="upwd" id="inputPassword"  class="form-control" style="text-align: center;font-size: 20px;width: 275px;" placeholder="Mot de passe" required autofocus/>

    <br/>
    <button class="btn btn-sm btn-default btn-block" type="submit" value="Login" style="background-color:#8FBC8F; color:white;font-size: 20px;width: 200px;margin-top: 3%">Valider</button>
    </div>
    </form> 
</div>
  </form>
</body>

