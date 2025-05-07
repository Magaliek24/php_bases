<?php
// pour la démonstration
session_save_path("./tmp");
// en haut des fichiers à protéger en accès !!!
session_start();
$_SESSION['pseudo'] = "Mathieu";
$_SESSION['mdp'] = "Balmont";
echo '<pre>';
print_r($_SESSION);
echo '<pre>';