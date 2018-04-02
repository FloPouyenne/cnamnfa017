<?php
//création du tableau
$tableau=array("banane","pomme","poire","fraise");
$chaine ="";

//parcourt du tableau avec foreach
foreach ($tableau as $element){
    echo $element . '<br />';
    $chaine = $chaine .$element.", ";
 }
 echo $chaine;
//regoupement des valeurs dans une chaine

?>
