
<?php
session_start();
$errmsg_arr = array();
$errflag = false;

include("connecBDD.php");

// new data


$user = $_POST['uname'];
$password = $_POST['upwd'];
 
if($user == '') {
    $errmsg_arr[] = 'Entrer votre nom d\'utilisateur';
    $errflag = true;
    
}
if($password == '') {
    $errmsg_arr[] = 'Entrer votre mot de passe !';
    $errflag = true;
}
 
// query
$result = $bdd->prepare("SELECT * FROM users WHERE username= :hjhjhjh AND password= :asas");
$result->bindParam(':hjhjhjh', $user);
$result->bindParam(':asas', $password);
$result->execute();
$rows = $result->fetch(PDO::FETCH_NUM);
if($rows > 0) {
header("location: paccueil.php");

}
else{
    $errmsg_arr[] = 'Vous n\'êtes pas administrateur - Votre nom d\'utiliser ou mot de passe incorrect !';
    $errflag = true;
}

if($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
    header("location: pconnec.php");
    
    exit();
}

?>
