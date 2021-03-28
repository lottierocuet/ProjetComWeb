 <?php


 include 'index.php'; 
if(!empty($_POST['prenom']) && !empty($_POST['nom']))
{

//1) on récupère les données via des post et des variables 

$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$mot_de_passe=$_POST['mot_de_passe'];
$email=$_POST['email'];
$nationalite=$_POST['nationalite'];
$code_postal=$_POST['code_postal'];
$ville=$_POST['ville'];
$adresse=$_POST['adresse'];
$telephone=$_POST['telephone'];
$sexe=$_POST['sexe'];
$promotion=$_POST['promotion'];

$req =$bdd->prepare('UPDATE utilisateur 
            SET Prenom_Utilisateur = :prenom
            Nom_Utilisateur = :nom 
            Mot_De_Passe = :mot_de_passe,
            Promotion = :promotion
            WHERE Id_Utilisateur = :identifiant
            ');
$req->execute(array(
            'prenom'=>$prenom,
            'nom'=> $nom, 
            'mot_de_passe'=>$mot_de_passe,
            'promotion'=>$promotion
            ));


$req2 =$bdd->prepare('UPDATE elève
            SET
            E_mail_Eleve = :email, 
            Nationalite =:nationalite,
            Code_Postal_Eleve = :code_postal, 
            Ville_Eleve = :ville, 
            Rue_Eleve = :adresse, 
            Telephone_Eleve = :telephone,
            Sexe = :sexe
            ');
$req2=$req2->execute(array(
            'email'=>$email, 
            'nationalite'=>$nationalite, 
            'code_postal'=>$code_postal, 
            'ville'=>$ville, 
            'adresse'=>$adresse, 
            'telephone'=>$telephone, 
            'sexe'=>$sexe
    //SI CONSTRAINT VIOLATION TRUC ==> Vider les tables manuellement dans élève et utilisateur
            ));

    header('Location: Info.php');

}   
//Boucle if statut==on {accueil_eleve}else{accueil_gestionnaire}


    

?>



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
                                <label for="mdp">Mot de Passe :</label>
                                <input type="password" name="mot_de_passe" required/> <br/>
                                <br/>
                                <label for="prenom">Prénom :</label> 
                                <input type="text" name="prenom" required/> <br/>
                                <br/>
                                <label for="nom">Nom :</label> 
                                <input type="text" name="nom" required/> <br/>
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
