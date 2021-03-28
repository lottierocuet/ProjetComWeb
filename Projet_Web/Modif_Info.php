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
                <?php require_once "NavBarre_Eleve.php"; ?>
            </div>
            <div class = "col-9">
                <h1 >Modifier mes informations</h1>
                <div class ="row">
                    <div class ="col-4"></div>
                    <div class ="Accueil col-8">Mes infos</div>
                </div>
                <form method="post" action="?" class ="cadre"> 
                    <p>
                        <div class = "row">
                            <div class = "col-4">
                                <label for="promotion">Promotion :</label>
                                <input type="number" name="promotion" min = "2007" required/> <br/>
                                <br/>
                                <label for="adresse">Adresse :</label>
                                <textarea rows = "2" name = "adresse"></textarea><br/>
                                <br/>
                                <label for="email">Email :</label>
                                <input type="email" name="email" required/> <br/>
                                <br/>
                                <label for="telephone">Téléphone :</label>
                                <input type="tel" name="telephone"/> <br/>
                                <br/>
                            </div>  
                        </div>
                        <div class ="row">
                            <div class ="col-8"></div>
                            <div class = "col-4">
                            <input class = "inscription" type="submit" value="Confirmer" href="Info.php"/>
                            </div>
                        </div>
                        
                    </p>
                </form>
            </div>
        </div>
    </body>
</html>