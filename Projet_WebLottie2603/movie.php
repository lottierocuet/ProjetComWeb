<?php
session_start();

    
    if (isset($_POST['Prenom_Eleve'])) {
      //Promo user
        $Id_Promotion = escape($_POST['Id_Promotion']);
        //Adresse
        $Rue_Eleve = escape($_POST['Rue_Eleve']);
        $Ville_Eleve = escape($_POST['Ville_Eleve']);
        $Code_postale_eleve = escape($_POST['Code_postale_eleve']);

        //Email eleve
        $E_mail_Eleve = escape($_POST['E_mail_Eleve']);
        //Num Tel
        $Telephone_Eleve = escape($_POST['Telephone_Eleve']);
        }
          
    ?>





<?php
session_start();

$utilisateur = $_GET[''];
$stmt = getDb()->prepare('select  from utilisateur');
$stmt->execute(array($utilisateur));
$movie = $stmt->fetch(); // Access first (and only) result line
?>

<!doctype html>
<html>

<?php 
$pageTitle = $movie['mov_title'];
require_once "includes/head.php"; 
?>

<body>
    <div class="container">
        <?php require_once "includes/header.php"; ?>

        <div class="jumbotron">
            <div class="row">
                <div class="col-md-5 col-sm-7">
                    <img class="img-responsive movieImage" src="images/<?= $movie['mov_image'] ?>" title="<?= $movie['mov_title'] ?>" />
                </div>
                <div class="col-md-7 col-sm-5">
                    <h2><?= $movie['mov_title'] ?></h2>
                    <p><?= $movie['mov_director'] ?>, <?= $movie['mov_year'] ?></p>
                    <p><small><?= $movie['mov_description_long'] ?></small></p>
                </h2>
            </div>
        </div>
    </div>

    <?php require_once "includes/footer.php"; ?>
</div>

<?php require_once "includes/scripts.php"; ?>
</body>

</html>