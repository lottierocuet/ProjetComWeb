<?php
    include_once "index.php";
    check_gestionnaire();
    session_start();
    check_connected();
    $identifiant=$_SESSION['identifiant'];
    $query = $bdd->prepare('SELECT Id_Utilisateur FROM organisation JOIN expérience
                            WHERE expérience.Id_Utilisateur = ?');
    $query->execute($identifiant);
    $user = $query->fetch();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Annuaire de l'ENSC - Voir les expériences</title>
        <link rel = "stylesheet" href = "style_general.css"/>
    </head>
    <body>
        <div class = "row"> <!--Création d'une ligne où la navbar et le reste sont côtes à côtes-->
            <div class = "col-3">
                <?php require_once "NavBarre_Gestionnaire.php"; ?> <!--Permet d'afficher la barre de navigation-->
            </div>
            <div class = "col-9">
                <h1 >Bienvenue</h1>
                <div class ="row">
                    <div class ="col-md-4 col-3"></div>
                    <div class ="Accueil col-md-8 col-9">Profil des expériences</div> <!--Affiche la phrase sur la droite de l'écran-->
                </div>
                <form method = "get" action="Annuaire_Experiences.php" class ="Infos">
                <div class ="cadre"> <!-- Affiche le cadre-->
                    <h2>Expériences : </h2>
                    <strong><?php echo $user["Type_Experience"]?> </strong>
                    <br/>
                    <?php echo $user["Date_debut_Experience"]?> - <?php echo $user["Date_fin_Experience"]?> - <?php echo $user["Poste"]?> - <?php echo $user["Salaire"]?>
                    <br/>
                    <h2>Domaine(s) de compétence(s) :</h2>
                    <?php echo $user["Domaine_competence_1"]?> - <?php echo $user["Domaine_competence_2"]?> - <?php echo $user["Domaine_competence_3"]?> 
                    <br/>
                    <h2>Secteur(s) d'activité(s) :</h2>
                    <?php echo $user["Secteur_d_activité_1"]?> - <?php echo $user["Secteur_d_activité_2"]?> - <?php echo $user["Secteur_d_activité_3"]?>
                    <br/>
                    <br/>
                    <?php echo $user["Description_Experience"]?> 
                    <br/>
                    <br/>
                    <br/>
                    <h2>Chez :</h2> <?php echo $user["Nom_Organisation"]?> -<?php echo $user["Type_Organisation"]?> <br/>
                    <strong>
                    Domaine d'activité :</strong>
                    <?php echo $user["Domaine_Entreprise"]?>
                    <br/>
                    <strong>
                    Adresse : </strong>
                    <?php echo $user["Rue_Organisation"]?> <br/>
                    <?php echo $user["Ville_Entreprise"]?> - <?php echo $user["Code_postal_Organisation"]?>  <br/>                 
                    <br/>
                    <!-- Affiche toutes les informations des expériences postées par un élève -->
                </div>
                </form>
                <br/>
                <br/>
                <a class = "acces_modif" href= "Annuaire.php"> Retour à l'annuaire </a> <!-- Relie cette page à l'annuaire --> 
            </div>
        </div>
    </body>
</html>
