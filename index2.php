
<!DOCTYPE html>
<html>
<head>
	<title>Index2</title>

</head>
<body>
	<p>

		<?php 
		if(isset($_GET['prenom'])AND isset($_GET['nom'])AND isset($_GET['age'])){
			echo $_GET['prenom'] ." & ". $_GET['nom']. "&".$_GET['age']; }


			else{
				echo "Veuillez renseigner votre nom prénom et age";
			};
			?>
		</p>
	</body>
	</html>