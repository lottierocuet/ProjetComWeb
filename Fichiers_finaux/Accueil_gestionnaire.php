<?php
//OK
include_once "index.php";
Check_connected();
$error = null;
if (!empty($_GET['identifiant']) and !empty($_GET['mdp'])) {
    //On met le post identifiant dans la variable $identifiant
    $identifiant = $_GET['identifiant'];
    //On met le GET mdp dans la variable $mdp
    $mdp = $_GET['mdp'];
    $req = $bdd->prepare('select * from utilisateur where Id_Utilisateur=? and Mot_de_passe=? and Statut_Compte=1');
    $req->execute(array($identifiant,$mdp));
  if ($req->rowCount() == 1) 
    {
        // Authentication successfuls
        $_SESSION['identifiant'] = $identifiant;
        header ('Location: Annuaire.php');
    }
    else {
        $error = "Utilisateur non reconnu";
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
        <div class = "row"> <!--Création d'une ligne où la navbar et le reste sont côtes à côtes-->
            <div class = "col-3">
                <?php require_once "NavBarre.php"; ?> <!--Permet d'afficher la barre de navigation-->
            </div>
            <div class = "col-9">
                <h1 >Bienvenue sur notre projet</h1>
                <div class ="row"> 
                    <div class ="col-md-4 col-3"></div>
                    <div class ="Accueil col-md-8 col-9">Accueil</div> <!--Affiche le mot sur la droite de l'écran-->
                </div>
                <?php if ($error) { ?> 
                    <div class="alert alert-danger">
                        <?= $error ?>
                    </div>
                <?php } ?>
                <form method="GET" action="Accueil_gestionnaire.php" class ="cadre"> <!--Commence le formulaire et affiche le cadre-->
                    <p> 
                        Je suis gestionnaire <br/>
                        <strong>Connectez-vous : </strong> <br/>
                        <br/>
                        <div class = "row">
                            <div class = "col-md-6 col-12">
                                <input placeholder="Identifiant" type="text" name="identifiant" required/> <br/>
                                <br/>
                                <input placeholder = "Mot de Passe" type="password" name="mdp" required/> <br/>
                                <br/>
                            </div>
                            <div class = "col-md-6 col">
                                <p>
                                    <img src = "images/user.png" alt = "Image de connexion"/>
                                </p>
                            </div>
                        </div>
                        <input class = "inscription" type="submit" value="Se connecter"/>
                    </p>
                </form>
                <a href= "Accueil_eleve.php">Se connecter en tant qu'élève</a> <!--Lien pour accéder à la connexion des élèves-->
            </div>
    </body>
</html>
