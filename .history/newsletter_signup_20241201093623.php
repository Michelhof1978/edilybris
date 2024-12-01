<?php
session_start(); // Démarrer la session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['email'])) {
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

        if ($email) {
            $to = 'michelhoffmann@harmony-digital.fr';
            $subject = 'Nouvel abonnement à la newsletter';
            $message = 'Un nouvel utilisateur s\'est abonné à la newsletter avec l\'email : ' . $email;
            $headers = 'From: michelhoffmann@harmony-digital.fr' . "\r\n" .
                'Reply-To: michelhoffmann@harmony-digital.fr' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            if (mail($to, $subject, $message, $headers)) {
                $_SESSION['newsletter_subscribed'] = true;
            } else {
                $_SESSION['newsletter_subscribed'] = false;
                // Peut-être enregistrer cette erreur pour des fins de débogage
            }
        } else {
            $_SESSION['newsletter_subscribed'] = false; // Email invalide
        }
    } else {
        $_SESSION['newsletter_subscribed'] = false; // Email vide
    }
    header('Location: confirmationNewsLetter.php');
    exit(); // Terminer l'exécution après redirection
} else {
    echo 'Méthode de requête invalide.';
}
