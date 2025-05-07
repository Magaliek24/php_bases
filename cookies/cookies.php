<?php
// pour la création du cookie
setcookie("nomCookie", "contenuCookie", time() + 31536000);
echo time();

// pour la suppression du cookie
if (isset($_COOKIE['nomCookie'])) {
    setcookie('nomCookie', '', time() - 3600, "/");
}