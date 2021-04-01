<?php
include_once "index.php";
check_connected();
$error=null;
if (!empty($_POST['identifiant']) and !empty($_POST['mdp']) ) {
    //On met le post identifiant dans la variable $identifiant
    $identifiant = $_POST['identifiant'];
    //On met le post mdp dans la variable $mdp
    $mdp = $_POST['mdp'];
    $stmt = $bdd->prepare('select * from utilisateur where Id_Utilisateur=? and Mot_de_passe=? and Statut_Compte=0');
    $stmt->execute(array($identifiant, $mdp));
  if ($stmt->rowCount() == 1) 
    {
        // Authentication successfuls
        $_SESSION['identifiant'] = $identifiant;
        header ('Location: Info.php');
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
                <form method="post" action="?" class ="cadre"> <!--Commence le formulaire et affiche le cadre-->
                    <p>
                        Je suis élève <br/>
                        <strong>Connectez-vous : </strong> <br/>
                        <br/>
                        <div class = "row">
                            <div class = "col-md-6 col-12">
                                <input placeholder="Identifiant" type="text" name="identifiant" required/> <br/>
                                <br/>
                                <input placeholder = "Mot de Passe" type="password" name="mdp" required/> <br/>
                                <br/>
                                <!--Permet de rentrer ses infos de connexion-->
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
                <a href= "Accueil_gestionnaire.php">Se connecter en tant que gestionnaire</a> <!--Lien pour accéder à la connexion des gestionnaires-->
            </div>
    </body>
</html>
