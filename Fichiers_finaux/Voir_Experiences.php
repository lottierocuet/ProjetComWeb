<?php
    include_once "index.php";
    check_gestionnaire();
    check_connected();    
    $utilisateur = $_GET['user'];
    $is_me = isset($_SESSION['identifiant']) && $_SESSION['identifiant'] == $utilisateur;
    $query = $bdd->prepare('SELECT * FROM utilisateur WHERE Id_Utilisateur = ?');
    $query->execute([$utilisateur]);
    $user = $query->fetch();
    $query = $bdd->prepare('SELECT * FROM expérience 
        JOIN organisation
        ON expérience.Id_Organisation = organisation.Id_Organisation
        WHERE expérience.Id_Utilisateur = ?');
    $query->execute([$utilisateur]);
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Annuaire de l'ENSC - <?php if ($is_me) {?>
                        Mes expériences
                        <?php } else { ?>
                        Expériences de <?= $user['Prenom_Utilisateur'] ?> <?= $user['Nom_Utilisateur'] ?>
                        <?php } ?></title>
        <link rel = "stylesheet" href = "style_general.css"/>
    </head>
    <body>
        <div class = "row"> <!--Création d'une ligne où la navbar et le reste sont côtes à côtes-->
            <div class = "col-3">
                        <?php if ($statut==1) {?>
                        <?php require_once "NavBarre_Gestionnaire.php"; ?>
                        <?php } else { ?>
                        <?php require_once "NavBarre_Eleve.php"; ?>
                        <?php } ?>
                <!--Permet d'afficher la barre de navigation selon que l'utilisateur soit élève ou gestionnaire-->
            </div>
            <div class = "col-9">
                <h1 >Bienvenue</h1>
                <div class ="row">
                    <div class ="col-md-4 col-3"></div>
                    <div class ="Accueil col-md-8 col-9">
                        <?php if ($is_me) {?>
                        Mes expériences
                        <?php } else { ?>
                        Expériences de <?= $user['Prenom_Utilisateur'] ?> <?= $user['Nom_Utilisateur'] ?>
                        <?php } ?>
                    </div>
                </div>
                <form method = "get" action="Mes_Experiences.php" class ="Infos">
                    <div class ="cadre"> 
                        <h2>Expériences : </h2>
                        <?php foreach($query as $experience) { ?> 
                        <strong><?php echo $experience["Type_Experience"]?> </strong>
                        <br/>
                        <?php echo $experience["Date_debut_Experience"]?> - <?php echo $experience["Date_fin_Experience"]?> - <?php echo $experience["Poste"]?> - <?php echo $experience["Salaire"]?>
                        <br/>
                        <h2>Domaine(s) de compétence(s) :</h2>
                        <?php echo $experience["Domaine_competence_1"]?> - <?php echo $experience["Domaine_competence_2"]?> - <?php echo $experience["Domaine_competence_3"]?> 
                        <br/>
                        <h2>Secteur(s) d'activité(s) :</h2>
                        <?php echo $experience["Secteur_d_activité_1"]?> - <?php echo $experience["Secteur_d_activité_2"]?> - <?php echo $experience["Secteur_d_activité_3"]?>
                        <br/>
                        <br/>
                        <?php echo $experience["Description_Experience"]?> 
                        <br/>
                        <br/>
                        <br/>
                        <h2>Chez :</h2> <?php echo $experience["Nom_Organisation"]?> -<?php echo $experience["Type_Organisation"]?> <br/>
                        <strong>
                        Domaine d'activité :</strong>
                        <?php echo $experience["Domaine_Entreprise"]?>
                        <br/>
                        <strong>
                        Adresse : </strong>
                        <?php echo $experience["Rue_Organisation"]?> <br/>
                        <?php echo $experience["Ville_Entreprise"]?> - <?php echo $experience["Code_postal_Organisation"]?>  <br/>
                        <?php }?>        
                        <br/>
                    </div>
                </form>
                <br/>
                <br/>
                <?php if ($is_me) { ?>
                <a class = "acces_modif" href= "Experience.php"> Ajouter une expérience </a> <!-- Permet d'accéder à la page où on ajoute des expériences -->
                <?php } ?>
            </div>
        </div>
    </body>
</html>
