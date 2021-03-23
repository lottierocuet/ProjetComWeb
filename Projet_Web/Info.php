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
                <?php require_once "NavBarre_Eleve.html"; ?>
            </div>
            <div class = "col-9">
                <h1 >Bienvenue</h1>
                <div class ="row">
                    <div class ="col-4"></div>
                    <div class ="Accueil col-8">Mes infos</div>
                </div>
                <div class ="cadre"> 
                    Promotion:  <br/>
                    <br/>
                    <?php
session_start();

    
    if (isset($_POST['Prenom_Eleve'])) {
      //Promo user
        $Id_Promotion = escape($_POST['Id_Promotion']);
        //Adresse
        $Rue_Eleve = escape($_POST['Rue_Eleve']);
        $Ville_Eleve = escape($_POST['Ville_Eleve']);
        $Code_postale_eleve = escape($_POST['Code_postale_eleve']);

        //Email eleve
        $E_mail_Eleve = escape($_POST['E_mail_Eleve']);
        //Num Tel
        $Telephone_Eleve = escape($_POST['Telephone_Eleve']);
        }
          
    ?>


                </div>
                <br/>
                <br/>
                <a class = "acces_modif" href= "Modif_Info.php"> Modifier ces informations </a>
            </div>
        </div>
    </body>
</html>