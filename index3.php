
<!DOCTYPE html>
<html>
<head>
	<title>index3</title>
</head>
<body>
	<p>
		<?php 
		if(isset($_GET["dateDebut"]) && isset($_GET["dateFin"])){
			echo "La date de début est : " .$_GET["dateDebut"].'</br>';
			echo "La date de fin est : " .$_GET["dateFin"].'</br>';
		}
		else{
			echo "veuillez renseigner les dates de début et de fin";
		};
		?>	
	</p>
</body>
</html>