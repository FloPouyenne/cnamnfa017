<!DOCTYPE html>
<html>
	<head>
		<title>Formulaire d'identification</title>
	</head>
	<body>
		<?php
		
		//vérifier que les champs ne sont pas vides
		if(empty($_POST['nom'] || empty($_POST['prenom'])){
			echo "Vous devez compléter tous les champs du formulaire";
		}
		
		echo "Nom : ".$_GET['nom']."<br />";
		echo "Prénom : ".$_GET['prenom']."<br />";
		
		$couleur=$_GET['couleur'];
		
		//pour vérifier si la case shopping a été cochée
		$_GET['shopping']=='on';
		
		$cheveux=$_GET['cheveux'];
		
		$langue=$_GET['langue'];
		echo "Vous parlez<br />";
		for ($i=0;$i<count($langue);i++){
			echo $langue[$i]."<br />";
		}
		?>
	</body>
</html>