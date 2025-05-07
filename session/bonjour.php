<?php

session_save_path("./tmp");

session_start();
echo "Bonjour $_SESSION[pseudo]";
unset($_SESSION['mdp']); // pour supprimer les infos 1 à 1

session_destroy(); // détruire la session complètement