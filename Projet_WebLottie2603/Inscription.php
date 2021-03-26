 <?php

 $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', '001', 'ENSC2021');
 session_start();
if(!empty($_POST['prenom']) && !empty($_POST['nom'])){


//1) on récupère les données via des post et des variables 
 echo $_POST['prenom'];
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$identifiant=$_POST['identifiant'];
$mot_de_passe=$_POST['mot_de_passe'];//KO
$promotion=$_POST['promotion'];
$email=$_POST['email'];
$nom_promotion=$_POST['nom_promotion'];//KO
$nationalite=$_POST['nationalite'];//KO
$code_postal=$_POST['code_postal'];//KO
$ville=$_POST['ville'];//KO
$adresse=$_POST['adresse'];
$telephone=$_POST['telephone'];

$req =$bdd->prepare('INSERT INTO utilisateur (
            Prenom_Utilisateur, 
            Nom_Utilisateur, 
            Id_Utilisateur,
            Mot_De_Passe
                )VALUES (:prenom,:nom, :id, :mdp)');
$req=$req->execute(array(
            'prenom'=>$prenom,
            'nom'=> $nom, 
            'id'=>$identifiant, 
            'mdp'=>$mot_de_passe
            ));

$req2 =$bdd->prepare('INSERT INTO elève
            (
            Id_Promotion, 
            E_mail_Eleve, 
            Nationalite,
            Code_Postal_Eleve, 
            Ville_Eleve, 
            Rue_Eleve, 
            Telephone_Eleve
            )VALUES (?, ?, ?, ?, ?,?,?)');
$req2=$req2->execute(array(
            $promotion, $email, $nationalite, $code_postal, $ville, $adresse, $telephone
            ));

$req3 =$bdd->prepare('INSERT INTO promotion
            (
                Nom_Promotion
            )
             VALUES (?)');
$req3=$req3->execute(array(
            $nom_promotion
            ));

        header('Location: Accueil_Eleve.php');
        print "Ca marche vite fait ";
        
     
}
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
                <?php require_once ("C:/xampp/htdocs/PROJETCOMWEB/ProjetComWeb/Projet_Web/NavBarre.html"); ?>
            </div>
            <div class = "col-9">
                <h1 >M'inscrire</h1>
                <div class ="row">
                    <div class ="col-4"></div>
                    <div class ="Accueil col-8">Accueil</div>
                </div>
                <form action="Inscription.php" class ="cadre">  
                    <p>
                        <div class = "row">
                            <div class = "col-4">
                                <fieldset><legend>Mentions obligatoires</legend>
                                    <label for="statut">Statut du compte :</label> 
                                    <input type="radio" name="statut" id="eleve" required  checked/> 
                                    <label for= "eleve">Eleve</label> <br/>
                                    <input type ="radio" name="statut" id="gestionnaire" required/> 
                                    <label for= "gestionnaire" >Gestionnaire</label> <br/>
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
                                    <label for="identifiant">Identifiant :</label> 
                                    <input type="text" name="identifiant" required/> <br/>
                                    <br/>
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
                                    <label for="age">Âge :</label>
                                    <input type="number" name="age"/> <br/>
                                    <br/>
                                    <label for="nom_promotion">Nom de la promotion :</label>
                                    <input type="text" name="nom_promotion"/> <br/>
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
