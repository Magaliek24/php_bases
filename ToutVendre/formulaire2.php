<?php require_once('inc/haut.inc.php') ?>


<!-- formulaire avec 2 champs : pseudo et email -->
<form method='POST' action="./formulaire3.php">
    <label for="pseudo"></label>
    <input id="pseudo" name="pseudo" type="text">
    <label for="email"></label>
    <input id="email" name="email" type="text">
    <button>Envoyer</button>
</form>

<!-- à la soummission : diriger vers 'formulaire3' -->


<?php require_once('inc/bas.inc.php') ?>