<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Annuaire de l'ENSC - Modifier mes préférences</title>
        <link rel = "stylesheet" href = "style_general.css"/>
    </head>
    <body>
        <div class = "row">
            <div class = "col-3">
                <?php require_once "NavBarre_Eleve.html"; ?>
            </div>
            <div class = "col-9">
                <h1 >Modifier mes expériences</h1>
                <div class ="row">
                    <div class ="col-3"></div>
                    <div class ="Accueil col-9">Mes préférences</div>
                </div>
                <form method="post" action="?" class ="cadre"> 
                    <p>
                        <div class = "row">
                            <div class = "col-4">
                                <label for="poste">Type de poste :</label> 
                                <input type="text" name="poste" required/> <br/>                                    <br/>
                                <label for="location">Localisation :</label>
                                <input type="text" name="location" required/> <br/>
                                <br/>
                                <label for="tags">Tags :</label>
                                <textarea rows = "4" name = "tags"></textarea><br/>
                                <br/>
                                <label for="duree">Durée (Mois) :</label>
                                <input type="number" name="duree" required/> <br/>
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