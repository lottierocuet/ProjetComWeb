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
        <div class = "row">
            <div class = "col-3">
                <?php require_once "NavBarre_Eleve.php"; ?>
            </div>
            <div class = "col-9">
                <h1 >Bienvenue</h1>
                <div class ="row">
                    <div class ="col-4"></div>
                    <div class ="Accueil col-8">Mes infos</div>
                </div>
                <form mmethod = "get" action="Infos.php" class ="Infos">
                <div class ="cadre"> 
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
                <a class = "acces_modif" href= "Modif_Info.php"> Modifier ces informations </a>
            </div>
        </div>
    </body>
</html>
