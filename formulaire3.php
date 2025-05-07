<?php require_once('inc/haut.inc.php') ?>



<!-- afficher (navigateur) : pseudo et email récupérés
depuis formulaire2 -->
<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';
if (!empty($_POST["pseudo"]) && !empty($_POST["email"])) {
    echo "Pseudo : $_POST[pseudo]<br>";
    echo "Email : $_POST[email]";
    // Sauvegarde
    // Ouverture fichier
    $file = fopen('./sauv/sauvegarde.txt', "a");
    // Ecriture dans le fichier
    fwrite($file, $_POST['pseudo'] . ' - ');
    fwrite($file, $_POST['email'] . "\n");
    // libération du fichier
    fclose($file);
} else {
    header('location: formulaire2.php');
}

?>
<?php require_once('inc/bas.inc.php') ?>