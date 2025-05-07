<?php require_once('inc/haut.inc.php');
$message = '';
$error_ville = '';
$error_cp = '';
$error_adresse = '';
$success = '';
if (!empty($_POST)) {
    $message .= "Données récupérées : <br>";
    $message .= "Ville : $_POST[ville] <br>";
    $message .= "Code postal : $_POST[cp] <br>";
    $message .= "Adresse : $_POST[adresse] <br>";
}
//$error = $error . 'le texte';
// $error_cp .= 'Champ obligatoire';
// $success .= 'Message envoyé';

?>
<!-- <?php echo $message ?> -->
<?= $message ?>
<form method="POST" action="">
    <label for="ville">Ville</label><br>
    <input type="text" id="ville" name="ville"><br>
    <span class="error"><?= $error_ville ?></span>
    <label for="cp">Code postal</label><br>
    <input type="text" id="cp" name="cp"><br>
    <span class="error"><?= $error_cp ?></span>
    <label for="adresse">Adresse</label><br>
    <input type="text" id="adresse" name="adresse"><br>
    <span class="error"><?= $error_adresse ?></span>
    <span class="success"><?= $success ?></span>
    <button type="submit">Valider</button>
</form>
<?php require_once('inc/bas.inc.php') ?>