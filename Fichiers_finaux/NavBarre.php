<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <!-- Bootstrap CSS CDN -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="NavBarre.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script type="text/javascript" href="NavBarre.js"></script>
    <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
   
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
	<nav>
       <div class="sidebar-header">
            <h1>Menu</h1>
        </div>
        
        <ul class="list-unstyled components">
            <li class="dropdown">
                <a href="Accueil_Eleve.php" aria-expanded="true">Se connecter</a>
                <ul id="homeSubmenu">
                	<div class="sidebar container-fluid">
	                    <li>
	                        <a href="Accueil_gestionnaire.php">Compte Gestionnaire</a>
	                    </li>
	               
	                    <li>
	                        <a href="Accueil_Eleve.php">Compte étudiant</a>
	                    </li>
                    </div>
	            </ul> 
	        </li> 
	    
	        <li>
	                <a href="Inscription.php">Créer un compte</a>
            </li>
           
        </ul>
    </nav>
</div>
 
</body>
</html>
