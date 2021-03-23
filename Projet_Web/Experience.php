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
                                    <label for="intitule">Intitulé de l'expérience :</label> 
                                    <input type="text" name="intitule" required/> <br/>
                                    <br/>
                                    <label for="date_debut">Date de début :</label>
                                    <input placeholder = "JJ/MM/AA" type="text" name="date_debut" required/> <br/>
                                    <br/>
                                    <label for="date_fin">Date de fin :</label>
                                    <input placeholder = "JJ/MM/AA" type="text" name="date_fin"/> <br/>
                                    <br/>
                                    <label for="description">Description :</label>
                                    <textarea name = "description" rows = "4"></textarea><br/>
                                    <br/>
                                
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
