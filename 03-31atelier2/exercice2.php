<?php

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
echo ("Bienvenue $prenom $nom");

$adresse=$_POST["adresse"];
$ville=$_POST["ville"];
$codePostal=$_POST["code_postal"];
echo ("Nous avons bien not� que vous habitez : $adresse � $ville ($codePostal)");

?>