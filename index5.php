<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?semaine=12** -->
<!DOCTYPE html>
<html>
<head>
	<title>index5</title>
</head>
<body>
	<p>
		<?php 
		if(isset($_GET["semaine"])){
			echo "Le numero de semaine est: " .$_GET["semaine"];
			
		}
		else{
			echo "veuillez renseigner le numero de semaine";
		};


		?>
	</p>
</body>
</html>
