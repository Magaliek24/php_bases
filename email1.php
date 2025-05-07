<?php
// traitement de l'nvoie mail
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// Headers au format 'String' | texte
// $headers = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html' . "\r\n";
// $headers .= 'Reply-To: ' . $_POST['expediteur'] . "\r\n";
// $headers .= 'From: ' . '<' . $_POST['expediteur'] . '>' . "\r\n";
// $headers .= 'Delivered-to: ' . $_POST['destinataire']  . "\r\n";

if (!empty($_POST)) {
    // headers au format tableau
    $headers = [
        'MIME-Version' => '1.0',
        'Content-type' => 'text/html; charset=UTF-8',
        'Reply-To' => $_POST['expediteur'],
        'From' => $_POST['expediteur'],
        'Delivered-to' => $_POST['destinataire'],
    ];

    $messageHTML = '
    <html>
    <body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px;">
        <table style="max-width: 600px; margin: auto; background-color: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); padding: 20px;">
            <tr>
                <td style="text-align: center; border-bottom: 1px solid #ddd; padding-bottom: 10px;">
                    <h2 style="color: #333;">Nouveau message de contact</h2>
                </td>
            </tr>
            <tr>
                <td style="padding: 20px;">
                    <p><strong>Expéditeur :</strong> ' . htmlspecialchars($_POST["expediteur"]) . '</p>
                    <p><strong>Objet :</strong> ' . htmlspecialchars($_POST["subject"]) . '</p>
                    <hr style="border: none; border-top: 1px solid #eee; margin: 20px 0;">
                    <p style="white-space: pre-line; color: #555;">' . nl2br(htmlspecialchars($_POST["message"])) . '</p>
                </td>
            </tr>
        </table>
    </body>
    </html>';

    if (mail($_POST['destinataire'], $_POST['subject'], $messageHTML, $headers)) {
        echo 'message envoyé';
    } else {
        echo 'erreuur envoie mail';
    }
}



?>


<?php require_once('inc/haut.inc.php'); ?>
<form method="POST" action="">
    <label for="destinataire">Destinataire</label>
    <input type="text" name="destinataire" id="destinataire" placeholder="Email du destinataire">
    <label for="expediteur">expediteur</label>
    <input type="text" name="expediteur" id="expediteur" placeholder="Email du expediteur">
    <label for="subject">Sujet</label>
    <input type="text" name="subject" id="subject" placeholedr="Votre sujet">
    <label for="message">Message</label>
    <textarea name="message" maxlength="200" id="message" rows="6"></textarea>
    <button>Envoyer</button>
</form>



<?php require_once('inc/bas.inc.php');
