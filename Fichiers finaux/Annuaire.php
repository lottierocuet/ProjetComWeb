<?php  

    $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
    session_start(); 

    $req = $bdd->query('SELECT * FROM utilisateur');

/*
        function get_annuaire($nom){
        
        $req = $bdd-> prepare('SELECT * FROM utilisateur WHERE Nom_Utilisateur=?');
        $req->execute(array($nom));
        return $req1;
        }
        function get_prenom($prenom){
        
        $req2 = $bdd-> prepare('SELECT * FROM utilisateur WHERE Prenom_Utilisateur=?');
        $req2->execute(array($prenom));
        return $req2;
        }
        function get_promo($promo){
        
        $req3 = $bdd-> prepare('SELECT * FROM utilisateur WHERE Promotion=?');
        $req3->execute(array($promo));
        return $req3;
        }
    $nom = get_nom(intval($_GET['nom']));
    $req1 = $nom->fetch();
    $prenom = get_prenom(intval($_GET['prenom']));
    $req2 = $prenom->fetch();
    $promotion = get_promo(intval($_GET['promotion']));
    $req3 = $promotion->fetch();*/

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
            <div class = "col-9">
                <div class ="row">
                    <div class ="col-4"></div>
                    <div class ="Accueil col-8">Annuaire</div>
                </div>
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
                    <?php }?>
                

            </div>
        </div>
    </body>
</html>
