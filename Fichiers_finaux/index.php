<?php
// Sous WAMP
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

function check_connected() {
	if (!isset($_SESSION['identifiant'])) {
		header('location: Accueil_Eleve.php');
		die();
	}
}

if (isset($_SESSION['identifiant'])) {
	$query = $bdd->prepare('SELECT * FROM utilisateur WHERE Id_Utilisateur = ?');
	$query->execute([$_SESSION['identifiant']]);
	$connected_user = $query->fetch();
}

function check_gestionnaire() {
	global $connected_user;
	check_connected();
	if ($connected_user['statut'] != 1) {
		header('location: Accueil_Eleve.php');
	}
}