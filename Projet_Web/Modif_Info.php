<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Annuaire de l'ENSC - Modifier mes informations</title>
        <link rel = "stylesheet" href = "style_general.css"/>
    </head>
    <body>
        <div class = "row">
            <div class = "col-3">
                <?php require_once "NavBarre_Eleve.html"; ?>
            </div>
            <div class = "col-9">
                <h1 >Modifier mes informations</h1>
                <div class ="row">
                    <div class ="col-4"></div>
                    <div class ="Accueil col-8">Mes infos</div>
                </div>
                <form method="post" action="?" class ="cadre"> 
                    <strong>Veuillez remplir la totalité des champs</strong>
                    <p>
                        <div class = "row">
                            <div class = "col-4">
                                <label for="identifiant">Identifiant :</label> 
                                <input type="text" name="identifiant" required/> <br/>
                                <br/>
                                <label for="mdp">Mot de Passe :</label>
                                <input type="password" name="mot_de_passe" required/> <br/>
                                <br/>
                                <label for="prenom">Prénom :</label> 
                                <input type="text" name="prenom" required/> <br/>
                                <br/>
                                <label for="nom">Nom :</label> 
                                <input type="text" name="nom" required/> <br/>
                                <br/>
                                <label for="age">Âge :</label>
                                <input type="number" name="age"/> <br/>
                                <br/>
                                <label for="sexe">Sexe :</label> <br/>
                                <input type="radio" name="sexe" id="homme" required/> 
                                <label for= "homme">Homme</label> <br/>
                                <input type ="radio" name="sexe" id="femme" required/> 
                                <label for= "femme" >Femme</label> <br/>
                                <input type ="radio" name="sexe" id="autre" required/> 
                                <label for= "autre" >Autre</label> <br/>
                                <br/>
                                <label for="promotion">Promotion :</label>
                                <input type="number" name="promotion" min = "2007" required/> <br/>
                                <br/>
                                <label for="nom_promotion">Nom de la promotion :</label>
                                <input type="text" name="nom_promotion"/> <br/>
                                <br/>
                                <label for="email">Email :</label>
                                <input type="email" name="email" required/> <br/>
                                <br/>
                                <label for="telephone">Téléphone :</label>
                                <input type="tel" name="telephone"/> <br/>
                                <br/>                              
                                <label for="nationalite">Nationalité :</label>
                                <input type="text" name="nationalite"/> <br/>
                                <br/>
                                <label for="code_postal">Code Postal :</label>
                                <input type="number" name="code_postal"/> <br/>
                                <br/>
                                <label for="ville">Ville :</label>
                                <input type="text" name="ville"/> <br/>
                                <br/>
                                <label for="adresse">Adresse :</label>
                                <textarea class = "adresse" name = "adresse" rows = "2"></textarea><br/>
                                <br/>
                            </div>  
                        </div>
                        <div class ="row">
                            <div class ="col-8"></div>
                            <div class = "col-4">
                            <input class = "inscription" type="submit" value="Confirmer"/>
                            </div>
                        </div>
                        
                    </p>
                </form>
            </div>
        </div>
    </body>
</html>
