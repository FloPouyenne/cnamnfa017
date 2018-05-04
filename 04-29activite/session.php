<?php
//limitation du délai de la session à 30 minutes
session_cache_expire(30);
$cache_expire = session_cache_expire();

//création de la session
session_start();

//création des variables de session récupérées dans le formulaire
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['password'] = $_POST['password'];

//fermeture de la session du visiteur
session_destroy();
?>