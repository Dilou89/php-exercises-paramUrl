<!-- ##Exercice 4
	Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?langage=PHP&serveur=LAMP** -->
	<!DOCTYPE html>
	<html>
	<head>
		<title>index4</title>
	</head>
	<body>
		<p>
			<?php 
			if(isset($_GET["langage"]) && isset($_GET["serveur"])){
				echo "Le language est : " .$_GET["langage"].'</br>';
				echo "Le serveur est : " .$_GET["serveur"].'</br>';
			}
			else{
				echo "veuillez renseigner le language et le serveur";
			};
			?>	


			



		</p>
	</body>
	</html>