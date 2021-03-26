<?php
//OK
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', '001', 'ENSC2021');

session_start();



if (!empty($_GET['identifiant']) and !empty($_GET['mdp'])) {
    //On met le post identifiant dans la variable $identifiant
    $identifiant = $_GET['identifiant'];
    //On met le GET mdp dans la variable $mdp
    $mdp = $_GET['mdp'];

    $req = $bdd->prepare('select * from utilisateur where Id_Utilisateur=? and Mot_de_passe=?');
    $req->execute(array($identifiant,$mdp));
  if ($req->rowCount() == 1) 
    {
        // Authentication successfuls

        $_SESSION['identifiant'] = $identifiant;
        header ('Location: Experience.php');
    }
    else {
        $error = "Utilisateur non reconnu";
        print " ça marche vite fait";
    }

}
?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Annuaire de l'ENSC - Accueil</title>
        <link rel = "stylesheet" href = "style_general.css"/>
    </head>
    <body>
        <div class = "row">
            <div class = "col-3">
                <?php require_once "NavBarre.php"; ?>
            </div>
            <div class = "col-9">
                <h1 >Bienvenue sur notre projet</h1>
                <div class ="row">
                    <div class ="col-4"></div>
                    <div class ="Accueil col-8">Accueil</div>
                </div>
                
                <form method="GET" action="Accueil_gestionnaire.php" class ="cadre"> 
                    <p>
                        
                        Je suis gestionnaire <br/>
                        <strong>Connectez-vous : </strong> <br/>
                        <br/>
                        <div class = "row">
                            <div class = "col-6">
                                <input placeholder="Identifiant" type="text" name="identifiant" required/> <br/>
                                <br/>
                                <input placeholder = "Mot de Passe" type="password" name="mdp" required/> <br/>
                                <br/>
                            </div>
                            <div class = "col-6">
                                <p>
                                    <img src = "images/user.png" alt = "Image de connexion"/>
                                </p>
                            </div>
                        </div>
                        <input class = "inscription" type="submit" value="Se connecter"/>
                    </p>
                </form>
                <a href= "Accueil_eleve.php">Se connecter en tant qu'élève</a>
            </div>
    </body>
</html>