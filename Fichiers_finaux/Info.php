<?php
    include_once "index.php";
    check_gestionnaire();
    check_connected();
    $query = $bdd->prepare('SELECT * FROM utilisateur 
        JOIN elève 
        ON elève.Id_Utilisateur = utilisateur.Id_Utilisateur
        WHERE utilisateur.Id_Utilisateur = ?');
    $query->execute([$_SESSION['identifiant']]);
    $user = $query->fetch();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Annuaire de l'ENSC - Mes informations</title>
        <link rel = "stylesheet" href = "style_general.css"/>
    </head>
    <body>
        <div class = "row"> <!--Création d'une ligne où la navbar et le reste sont côtes à côtes-->
            <div class = "col-3">
                <?php require_once "NavBarre_Eleve.php"; ?>
            </div>
            <div class = "col-9">
                <h1 >Bienvenue</h1>
                <div class ="row">
                    <div class ="col-md-4 col-3"></div>
                    <div class ="Accueil col-md-8 col-9">Mes infos</div> <!--Affiche la phrase sur la droite de l'écran-->
                </div>
                <form method = "get" action="Info.php" class ="Infos">
                <div class ="cadre"> <!-- Affiche le cadre-->
                    <h2>Promotion: </h2>
                    <?php echo $user["Promotion"]?> 
                    <br/>
                    <h2>
                    Email :</h2>
                    <?php echo $user["E_mail_Eleve"]?>
                    <br/>
                    <h2>
                    Adresse : </h2>
                    <?php echo $user["Rue_Eleve"]?> <br/>
                    <?php echo $user["Ville_Eleve"]?> <br/>
                    <?php echo $user["Code_Postal_Eleve"]?>  <br/>                 
                    <br/>
                    <h2>
                    Numéro Tel :</h2>
                    <?php echo $user["Telephone_Eleve"]?> <br/>
                    <br/>
                </div>
                </form>
                <br/>
                <br/>
                <a class = "acces_modif" href= "Modif_Info.php"> Modifier ces informations </a> <!-- Lien avec la page où on peut modifier ses infos-->
            </div>
        </div>
    </body>
</html>
