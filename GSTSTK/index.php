<?php
session_start();
$errmsg_arr = array();
$errflag = false;

include("connecBDD.php");

// new data


$user = null;
$password = null;

if(isset($_SESSION['uname']))
    header("location: paccueil.php");
 
if(isset($_POST['uname'])){
    if($_POST['uname'] == ''){
        $errmsg_arr[] = 'Entrer votre nom d\'utilisateur';
    $errflag = true;
    }
    else {
        $user = $_POST['uname'];
    }
}
    
if(isset($_POST['upwd'])){
    if($_POST['upwd'] == '') {
    $errmsg_arr[] = 'Entrer votre mot de passe !';
    $errflag = true;
    }
    else{
        $password = $_POST['upwd'];
    }
}
 
if(count($errmsg_arr) == 0 && isset($_POST)){
    // query
    $result = $bdd->prepare("SELECT * FROM users WHERE username= :hjhjhjh AND password= :asas");
    $result->bindParam(':hjhjhjh', $user);
    $result->bindParam(':asas', $password);
    $result->execute();
    $rows = $result->fetch(PDO::FETCH_NUM);

    if($rows > 0) {
        $_SESSION['uname'] = $rows[1];
        header("location: paccueil.php");

    }
    else{
        $errmsg_arr[] = 'Vous n\'êtes pas administrateur - Votre nom d\'utiliser ou mot de passe incorrect !';
        $errflag = true;
    }
}

if($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
    header("location: pconnec.php");
    
    exit();
}

?>
