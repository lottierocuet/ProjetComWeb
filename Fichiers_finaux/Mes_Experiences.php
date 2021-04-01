<?php
include_once('index.php');
check_connected();

$_GET['user'] = $_SESSION['identifiant'];
include('Voir_Experiences.php');