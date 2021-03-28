<?php

    include 'index.php'; 


      /* function get_promo($promo){
        
        $req1 = $bdd-> prepare('SELECT * FROM utilisateur WHERE Promotion=?');
        $req3->execute(array($promo));
        return $req1;
        }
    $promotion = get_promo(intval($_GET['promotion']));
    $req1 = $promotion->fetch();
  $nom = get_nom(intval($_GET['nom']));
    $req2 = $nom->fetch();
    $rue = get_rue(intval($_GET['rue']));
    $req3 = $rue->fetch();*/
    

    // ATTENTION 1: Le Id_Utilisateur n'est pas bien associé au moment de l'inscription (pour tester j'ai du connecter l'élève à l'utilisateur en allant mettre "32" dans la base pour Id_Utilisateur)
    // ATTENTION 2: Il faut vérifier que l'utilisateur est bien connecté avant d'arriver sur cette page...
    $query = $bdd->prepare('SELECT * FROM experience 
        JOIN organisation
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
        <title>Annuaire de l'ENSC - Voir les expériences</title>
        <link rel = "stylesheet" href = "style_general.css"/>
    </head>
    <body>
        <div class = "row">
            <div class = "col-3">
                <?php require_once "NavBarre_Eleve.php"; ?>
            </div>
            <div class = "col-9">
                <h1 >Bienvenue</h1>
                <div class ="row">
                    <div class ="col-4"></div>
                    <div class ="Accueil col-8">Profil des expériences</div>
                </div>
                <form method = "get" action="Annuaire_Experiences.php" class ="Infos">
                <div class ="cadre"> 
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
                </div>
                </form>
                <br/>
                <br/>
                <a class = "acces_modif" href= "Annuaire_Info.php"> Voir ses coordonnées</a>
            </div>
        </div>
    </body>
</html>