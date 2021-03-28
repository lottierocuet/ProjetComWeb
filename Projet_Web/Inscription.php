 <?php


 include 'index.php'; 
if(!empty($_POST['prenom']) && !empty($_POST['nom']))
{

//1) on récupère les données via des post et des variables 

$identifiant = $bdd->lastInsertId();
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

$req =$bdd->prepare('INSERT INTO utilisateur (
            Prenom_Utilisateur, 
            Nom_Utilisateur,
            Mot_De_Passe,
            Promotion) VALUES (:prenom, :nom, :mdp, :promotion)');
$req->execute(array(
            'prenom'=>$prenom,
            'nom'=> $nom, 
            'mdp'=>$mot_de_passe,
            'promotion'=>$promotion
            ));


$req2 =$bdd->prepare('INSERT INTO elève
            (
            E_mail_Eleve, 
            Nationalite,
            Code_Postal_Eleve, 
            Ville_Eleve, 
            Rue_Eleve, 
            Telephone_Eleve,
            Sexe
            )VALUES (?,?,?,?,?,?,?)');
$req2=$req2->execute(array($email, $nationalite, $code_postal, $ville, $adresse, $telephone, $sexe
    //SI CONSTRAINT VIOLATION TRUC ==> Vider les tables manuellement dans élève et utilisateur
            ));

    print "Votre identifiant est : ".$identifiant;
    header('Location: Accueil_Eleve.php');

}   
//Boucle if statut==on {accueil_eleve}else{accueil_gestionnaire}


    

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Annuaire de l'ENSC - Inscription</title>
        <link rel = "stylesheet" href = "style_general.css"/>
    </head>
    <body>
        <div class = "row">
            <div class = "col-3">
                <?php require_once ("NavBarre.php"); ?>
            </div>
            <div class = "col-9">
                <h1 >M'inscrire</h1>
                <div class ="row">
                    <div class ="col-4"></div>
                    <div class ="Accueil col-8">Accueil</div>
                </div>
                <form method = "post" action="Inscription.php" class ="cadre">  
                    <p>
                        <div class = "row">
                            <div class = "col-4">
                                <fieldset><legend>Mentions obligatoires</legend>
                                    <label for="statut">Statut du compte :</label> 
                                    <input type="radio" name="statut" value="eleve" id="eleve" required/>
                                    <label name="eleve" for= "eleve">Eleve</label> <br/>
                                    <input type ="radio" name="statut" value="gestionnaire" id="gestionnaire" required/>
                                    <label name="gestionnaire" for= "gestionnaire" >Gestionnaire</label> <br/>
                                    <br/>
                                    <label for="sexe">Sexe :</label> <br/>
                                    <input type="radio" name="sexe" id="homme" required/> 
                                    <label for= "homme">Homme</label> <br/>
                                    <input type ="radio" name="sexe" id="femme" required/> 
                                    <label for= "femme" >Femme</label> <br/>
                                    <input type ="radio" name="sexe" id="autre" required/> 
                                    <label for= "autre" >Autre</label> <br/>
                                    <br/>
                                    <label for="prenom">Prénom :</label> 
                                    <input type="text" name="prenom" required/> <br/>
                                    <br/>
                                    <label for="nom">Nom :</label> 
                                    <input type="text" name="nom" required/> <br/>
                                    <br/>
                                    <!-- <label for="identifiant">Identifiant :</label> 
                                    <input type="text" name="identifiant" required/> <br/>
                                    <br/> -->
                                    <label for="mdp">Mot de Passe :</label>
                                    <input type="password" name="mot_de_passe" required/> <br/>
                                    <br/>
                                    <label for="promotion">Promotion :</label>
                                    <input type="number" name="promotion" min = "2007" required/> <br/>
                                    <br/>
                                    <label for="email">Email :</label>
                                    <input type="email" name="email" required/> <br/>
                                    <br/>
                                </fieldset>
                                <fieldset><legend>Mentions facultatives</legend>
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
                                    <label for="telephone">Téléphone :</label>
                                    <input type="tel" name="telephone"/> <br/>
                                    <br/>
                                </fieldset>
                            </div>  
                        </div>
                        <div class ="row">
                            <div class ="col-8"></div>
                            <div class = "col-4">
                            <input class = "inscription" type="submit" value="S'inscrire"/>
                            </div>
                        </div>
                        
                    </p>
                </form>
            </div>
        </div>
    </body>
</html>
