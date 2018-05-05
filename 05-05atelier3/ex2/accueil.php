<?php
session_start();

$date=date("d-m-Y");
$heure=date("H:i:s");

echo "<div>Bienvenue admin</div><div>Pour accéder à vos identifiants
cliquez <a href='identifiant.php'>ici</a>
<div>Nous sommes le : ".$date." ".$heure."</div></div><div>Si vous souhaitez partir cliquez sur <a href='login.php'>déconnexion</a></div>";

$logfile=fopen("log.txt","a+");
$ret=fwrite($logfile, "connexion user : ".$_SESSION['nom'].
    " mot de passe :".$_SESSION['password']." date de connexion : "
    .$date." ".$heure);
fclose ($logfile);


?>