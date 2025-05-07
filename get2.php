<?php require_once('inc/haut.inc.php');
print_r($_GET);

if (!empty($_GET)) {
    // echo "Produit : $_GET[produit] <br>";
    // echo "Prix : $_GET[prix] <br>";
    // echo "Couleur : $_GET[couleur] <br>";
    echo implode("#", $_GET); // inverse de l'explode
} else {
    echo 'Pas de produit sélectionné';
};
require_once('inc/bas.inc.php');
