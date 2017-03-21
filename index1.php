<!-- #PHP - Les paramètres d'URL
##Exercice 1
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: **index.php?nom=Nemare&prenom=Jean** -->

<!DOCTYPE html>
<html>
<head>
	<title>index</title>



</head>
<body>
	<p> <?php echo $_GET['prenom'] ." & ". $_GET['nom']; ?> !</p>

</body>
</html>