<?php

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
echo ("Bienvenue $prenom $nom");

$adresse=$_POST["adresse"];
$ville=$_POST["ville"];
$codePostal=$_POST["code_postal"];
echo ("Nous avons bien noté que vous habitez : $adresse à $ville ($codePostal)");

?>