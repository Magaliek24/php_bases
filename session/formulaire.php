<?php
// traitement
session_save_path("./tmp");
session_start();

if (!empty($_POST)) {
    $_SESSION['pseudo'] = $_POST['pseudo'];
    

}

if (isset($_SESSION['pseudo'])) {
    echo "Bonjour $_SESSION[pseudo]";
    echo '<form  action="./deconnexion.php"><br>
    <input type="submit" value="deconnexion"><br>
    </form>';
} else {
    echo '<form method="POST" action="">
    <label for="pseudo">Pseudo</label><br>
    <input type="text" name="pseudo" id="pseudo"><br>
    <button>Valider</button>
</form>';
}

?>

