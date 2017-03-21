<!-- ##Exercice 6
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?batiment=12&salle=101**
-->
<!DOCTYPE html>
<html>
<head>
	<title>index6</title>
</head>
<body>
	<p>
		<?php 
		if(isset($_GET["batiment"]) && isset($_GET["salle"])){
			echo "Batiment : " .$_GET["batiment"].'</br>';
			echo "Numéro de salle : " .$_GET["salle"].'</br>';
		}
		else{
			echo "veuillez renseigner le numéro de batiment et de salle";
		};
		?>	
	</p>

</body>
</html>