<?php require_once('inc/haut.inc.php');


// récupération fichier 
$CheminFichier = './sauv/sauvegarde.txt';
// récupération de chaque ligne du fichier vers un tableau
$file = file($CheminFichier);

echo '<pre>';
print_r($file);
echo '</pre>';

// affichage sur navigateur ligne par ligne
/////////////////////////////////
// foreach ($file as $ligne) {
//     echo $ligne . '<br>';
// }
echo implode("<br>", $file);

require_once('inc/bas.inc.php');
