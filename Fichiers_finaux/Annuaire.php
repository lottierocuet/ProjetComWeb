<?php  

    $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
    session_start(); 

    $req = $bdd->query('SELECT * FROM utilisateur');

?>
        
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Annuaire de l'ENSC - Annuaire</title>
        <link rel = "stylesheet" href = "style_general.css"/>
       
         
    </head>
    <body>
        <div class = "row">
            <div class = "col-3">
                <?php require_once "NavBarre_Gestionnaire.php"; ?>
            </div>
            <div class = "col-9 contents">
                <div class ="row">
                    <div class ="col-4"></div>
                    <div class ="Accueil col-8">Annuaire</div>
                
                <div class = "row">
                        <div class="col-4">
                            
                            <h2>
                                Nom élève: <br/>
                                
                            </h2>
                          
                        </div>
                        <div class="col-4">
                            <h2>Prénom élève:<br/>
                                
                            </h2>
                        </div>
                        <div class="col-4">
                            <h2 name ="promotion">Promotion:<br/>
                            </h2>
                            
                        </div>
                    </div>
                    
                
                    <?php foreach ($req as $result) { ?>

                        <a href="Voir_Experiences.php?user=<?= $result['Id_Utilisateur'] ?>">
                    <div class = "row">
                        <div class="col-4">
                            
                            
                            <?= $result['Nom_Utilisateur'] ?>
                            
                                
                                                      
                        </div>
                        <div class="col-4">
                            <?= $result['Prenom_Utilisateur'] ?>
                                
                        </div>
                        <div class="col-4">
                                <?= $result['Promotion'] ?>
                            
                        </div>
                    </div>
                    </a>
                    <?php }?>
                    </div>
                

            </div>
        </div>
    </body>
</html>
