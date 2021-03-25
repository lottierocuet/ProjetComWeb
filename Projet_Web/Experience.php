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
                <form method="post" action="?" class ="cadre"> 
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
