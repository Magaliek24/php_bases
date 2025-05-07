<?php
session_save_path("./tmp");
session_start();

echo time();

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

if (isset($_SESSION['temps'])) {
    if(time() > ($_SESSION['temps']+$_SESSION['limite'])) {
        // session_destroy();
        header('location: deconnexion.php');
    } else {
        $_SESSION['temps'] = time();
        echo "Connexion mise à jour";
    }

} else {
    echo "Connexion";
    $_SESSION['temps'] = time();
    $_SESSION['limite'] = 5; // en secondes
}
?>

<script>
    setTimeout(() => {
        location.reload();
        
    }, 25000)
</script>