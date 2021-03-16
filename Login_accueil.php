<html>
	<body>

	<?php


	if (empty($_POST['identifiant']) or empty($_POST['mdp']))
	{
		print "Vous devez saisir un login et un mot de passe";
	}
	else 
	{
		print "lIdentifiant : ".$_POST['identifiant'];
		print "Mot de Passe : ".$_POST['mdp'];
	}

	?>
</body>
</html>
