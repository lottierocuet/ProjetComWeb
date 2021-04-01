<?php
include_once('index.php');
check_connected();
check_gestionnaire();
$_GET['user'] = $_SESSION['identifiant'];
include('Voir_Experiences.php');
