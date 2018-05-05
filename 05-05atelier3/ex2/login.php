<?php
//limitation du délai de la session à 30 minutes
session_cache_expire(30);
$cache_expire = session_cache_expire();

//création de la session
session_start();

//fonction de validation de l'authentification
function authentification(){
    //authentification admin
    $username_admin = "admin";
    $password_admin = "admin123";
    
    //enregistrement des identifiants de session
    $_SESSION['nom']=$_POST['nom'];
    $_SESSION['password']=$_POST['password'];
    
    //comparaison des identifiants saisis et des id admin
    if (($_SESSION['nom']==$username_admin)&($_SESSION['password']==$password_admin)){
        header("Location:accueil.php");
    }
    else {
        echo "<div>login ou mot de passe invalide</div>";
    }
    $_SESSION['password']=sha1($_SESSION['password']);
}

//affichage du formulaire
echo '<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Formulaire HTML</title>
		<link rel="stylesheet" href="form_client.css">
	</head>
	<body>
		<form method="post" action="">
		<fieldset>
			<legend>LOGIN</legend>
			<div>
			<input class="input1" type="text" name="nom" value="Username">
			</div>
			<div>
			<input class="input1" type="text" name="password" value ="Password">
			</div>
			<div>
			<input type="submit" value="LOGIN" name="login">
			</div>
		</fieldset>
		</form>
	</body>
</html>';

if (isset($_POST['nom']) & (isset($_POST['password']))){
 echo authentification();
}

?>