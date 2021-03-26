<?php
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', '001', 'ENSC2021');
session_start();

    
    if(!empty($_POST['id_experience']) && !empty($_POST['type'])) 
    {
      //1) on récupère les données via des post et des variables 
      $id_experience=$_POST['id_experience'];
      $type=$_POST['type'];
      $nom_organisation=$_POST['nom_organisation'];
      $type_organisation=$_POST['type_organisation'];
      $date_debut=$_POST['date_debut'];
      $date_fin=$_POST['date_fin'];
      $region=$_POST['region'];
      $poste=$_POST['poste'];
      $salaire=$_POST['salaire'];
      $description=$_POST['description'];
      $competence_1=$_POST['competence_1'];
      $competence_2=$_POST['competence_2'];
      $competence_3=$_POST['competence_3'];
      $activite_1=$_POST['activite_1'];
      $activite_2=$_POST['activite_2'];
      $activite_3=$_POST['activite_3'];
      $activite_organisation=$_POST['activite_organisation'];
      $ville_organisation=$_POST['ville_organisation'];
      $code_postal_organisation=$_POST['code_postal_organisation'];
      $adresse_organisation=$_POST['adresse_organisation'];
    
        
        // insert expérience into BD
        //$stmt = $bdd->prepare('select * from utilisateur where Id_Utilisateur=? and Mot_de_passe=?');
        $req =$bdd->prepare('INSERT INTO experience (
            Id_Experience, 
            Type_Experience, 
            Date_debut_Experience ,
            Date_fin_Experience ,
            Domaine_competence_1  , 
            Domaine_competence_2, 
            Domaine_competence_3  , 
            Secteur_d_activité_1  , 
            Secteur_d_activité_2, 
            Secteur_d_activité_3, 
            Salaire, 
            Poste, 
            Description_Experience  , 
            Region, 
                )VALUES (:id_experience, :type, :date_debut, :date_fin, :competence_1, :competence_2, :competence_3, :activite_1, :activite_2, :activite_3, :salaire, :poste, :description, :region)');
$req=$req->execute(array(
      'id_experience'=>$id_experience,
      'type'=>$type,
      'date_debut'=>$date_debut,
      'date_fin'=>$date_fin,
      'competence_1'=>$competence_1,
      'competence_2'=>$competence_2,
      'competence_3'=>$competence_3,
      'activite_1'=>$activite_1,
      'activite_2'$activite_2,
      'activite_3'$activite_3
      'salaire'=>$salaire,
      'poste'=>$poste,
      'description'=>$description,
      'region'=>$region,
            ));

$req2 =$bdd->prepare('INSERT INTO organisation
            (
            Nom_Organisation, 
            Type_Organisation, 
            Domaine_Entreprise, 
            Ville_Entreprise, 
            Rue_Organisation, 
            Code_postal_Organisation 
            )VALUES (?, ?, ?, ?, ?, ?)');
$req2=$req2->execute(array(
            $nom_organisation, $type_organisation, $activite_organisation, $ville_organisation, $adresse_organisation, $code_postal_organisation
            ));




        header("Accueil_Eleve.php");

    }
    ?>

  <!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Annuaire de l'ENSC - Mes Experiences</title>
        <link rel = "stylesheet" href = "style_general.css"/>
    </head>
    <body>
        <div class = "row">
            <div class = "col-3">
                <?php require_once "NavBarre_Eleve.html"; ?>
            </div>
            <div class = "col-9">
                <h1 >Publier une expérience</h1>
                <br/>
                <br/>
                <form method="post" action="Experience.php" class ="cadre"> 
                    <p>
                        
                        <div class = "row">
                            <div class = "col-4">
                                    <label for="id_experience">Intitulé de l'expérience :</label> 
                                    <input type="text" name="id_experience" required/> <br/>
                                    <br/>
                                    <label for="type">Type d'expérience :</label> 
                                    <input type="text" name="type" required/> <br/>
                                    <br/>
                                    <label for="nom_organisation">Nom de l'Organisation d'accueil :</label> 
                                    <input type="text" name="nom_organisation"/> <br/>
                                    <br/>
                                    <label for="type_organisation">Type de l'Organisation d'accueil :</label> 
                                    <input type="text" name="type_organisation"/> <br/>
                                    <br/>
                                    <label for="date_debut">Date de début :</label>
                                    <input placeholder = "JJ/MM/AA" type="text" name="date_debut" required/> <br/>
                                    <br/>
                                    <label for="date_fin">Date de fin :</label>
                                    <input placeholder = "JJ/MM/AA" type="text" name="date_fin"/> <br/>
                                    <br/>
                                    <label for="region">Région géographique :</label>
                                    <input type="text" name="region"/> <br/>
                                    <br/>
                                    <label for="poste">Poste :</label> 
                                    <input type="text" name="poste"/> <br/>
                                    <br/>
                                    <label for="salaire">Salaire :</label> 
                                    <input type="number" name="salaire"/> <br/>
                                    <br/>
                                    <label for="description">Description :</label>
                                    <textarea name = "description" rows = "4"></textarea><br/>
                                    <br/>
                                    <label for="competence_1">Domaine de compétence 1 :</label> 
                                    <input type="text" name="competence_1" required/> <br/>
                                    <br/>
                                    <label for="competence_2">Domaine de compétence 2 :</label> 
                                    <input type="text" name="competence_2"/> <br/>
                                    <br/>
                                    <label for="competence_3">Domaine de compétence 3 :</label> 
                                    <input type="text" name="competence_3"/> <br/>
                                    <br/>
                                    <label for="activite_1">Secteur d'activité 1:</label> 
                                    <input type="text" name="activite_1" required/> <br/>
                                    <br/>
                                    <label for="activite_2">Secteur d'activité 2:</label> 
                                    <input type="text" name="activite_2"/> <br/>
                                    <br/>
                                    <label for="activite_3">Secteur d'activité 3:</label> 
                                    <input type="text" name="activite_3"/> <br/>
                                    <br/>
                                    <fieldset><legend>A propos de l'organisation d'accueil</legend>
                                        <label for="activite_organisation">Domaine d'activité :</label> 
                                        <input type="text" name="activite_organisation"/> <br/>
                                        <br/>
                                        <label for="ville_organisation">Ville :</label> 
                                        <input type="text" name="ville_organisation"/> <br/>
                                        <br/>
                                        <label for="code_postal_organisation">Code Postal :</label> 
                                        <input type="text" name="code_postal_organisation"/> <br/>
                                        <br/>
                                        <label for="adresse_organisation">Adresse :</label> 
                                        <input type="text" name="adresse_organisation"/> <br/>
                                        <br/>
                                    </fieldset>
                            </div>  
                        </div>
                        <div class ="row">
                            <div class ="col-7"></div>
                            <div class = "col-5">
                                <input class = "inscription" type="submit" value="Publier"/>
                                <img src = "images/writing.png" alt = "Image de publication"/>
                            </div>
                        </div>
                        
                    </p>
                </form>
            </div>
        </div>
    </body>
</html>
