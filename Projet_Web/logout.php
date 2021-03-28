<?php
session_start();
session_destroy();
header ('Location : Accueil_Eleve.php');
