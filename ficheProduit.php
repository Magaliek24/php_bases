<?php require_once('inc/haut.inc.php');
// var_dump($_GET);
// echo $_GET['id'];


// if (isset($_GET['id'])) {
// echo "ID du produit sélectionné : $_GET[id]";
// } else {
// echo "Pas de produit sélectionné";
// }

if (!empty($_GET)) {
    echo "ID du produit sélectionné : $_GET[id]";
} else {
    echo "Pas de produit sélectionné";
};
require_once('inc/bas.inc.php');
