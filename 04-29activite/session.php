<?php
//limitation du d�lai de la session � 30 minutes
session_cache_expire(30);
$cache_expire = session_cache_expire();

//cr�ation de la session
session_start();

//cr�ation des variables de session r�cup�r�es dans le formulaire
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['password'] = $_POST['password'];

//fermeture de la session du visiteur
session_destroy();
?>