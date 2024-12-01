<?php
session_start(); // Démarrer la session

$config = include('./config/config.php');
$secretKey = $config['recaptcha_secret_key'];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupération des données du formulaire en les nettoyant
    $nom = htmlspecialchars(trim($_POST["lastName"]));
    $prenom = htmlspecialchars(trim($_POST["firstName"]));
    $email = isset($_POST["email"]) ? filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL) : null;
    $objet = htmlspecialchars(trim($_POST["objet"]));
    $message = htmlspecialchars(trim($_POST["message"]));
    $telephone = isset($_POST["phoneNumber"]) ? preg_replace("/[^0-9]/", "", trim($_POST["phoneNumber"])) : null; // Ne garde que les chiffres du numéro de téléphone
    $rgpdCheckbox = isset($_POST["rgpdCheckbox"]);

    // Validation des données
    $errors = [];

    // Vérification des champs non vides
    if (empty($prenom)) {
        $errors[] = 'Prénom est requis.';
    }
    if (empty($nom)) {
        $errors[] = 'Nom est requis.';
    }
    if (empty($email)) {
        $errors[] = 'Email est requis.';
    }
    if (empty($telephone)) {
        $errors[] = 'Numéro de téléphone est requis.';
    }
    if (empty($objet)) {
        $errors[] = 'Objet est requis.';
    }
    if (empty($message)) {
        $errors[] = 'Message est requis.';
    }
    if (!$rgpdCheckbox) {
        $errors[] = 'Vous devez accepter la politique de confidentialité.';
    }

    // Vérification de l'email
    if ($email === null || !preg_match("/^[^\s@]+@[^\s@]+\.[^\s@]+$/", $email)) {
        $errors[] = 'Email invalide. Assurez-vous qu\'il contient un @ et un nom de domaine valide.';
    }

    // Vérification du numéro de téléphone
    if ($telephone === null || strlen($telephone) < 10 || strlen($telephone) > 15) {
        $errors[] = 'Numéro de téléphone invalide. Il doit contenir entre 10 et 15 chiffres.';
    }

    // Vérification du reCAPTCHA
    $recaptchaResponse = $_POST['g-recaptcha-response'];
    $recaptchaUrl = "https://www.google.com/recaptcha/api/siteverify";
    $recaptchaData = [
        'secret' => $secretKey,
        'response' => $recaptchaResponse,
    ];

    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($recaptchaData),
        ],
    ];

    $context = stream_context_create($options);
    $jsonResponse = file_get_contents($recaptchaUrl, false, $context);

    $recaptchaResult = json_decode($jsonResponse, true);

    if (!$recaptchaResult['success']) {
        $errors[] = 'Veuillez compléter le reCAPTCHA correctement.';
    }

    if (empty($errors)) {
        // Envoi de l'e-mail
        $messageContent = "Message envoyé de :\nNom : $nom\nPrenom : $prenom\nEmail : $email\nTéléphone : $telephone\nObjet : $objet\nMessage : $message";
        $retour = mail("edilybris@gmail.com", $objet, $messageContent, "From: contact@edilybris.fr" . "\r\n" . "Reply-to: $email");

        if ($retour) {
            $_SESSION['message_sent'] = true;
            header('Location: confirmationform.php');
            exit();
        } else {
            $errors[] = 'Erreur lors de l\'envoi de l\'email';
        }
    }

    // Affichage des erreurs
    if (!empty($errors)) {
        echo '<div class="error-message">';
        foreach ($errors as $error) {
            echo '<p class="alert alert-danger ms-5 mt-3 fw-bold">' . $error . '</p>';
        }
        echo '</div>';
    }
}
?>



<?php include("head.php") ?>
<title>Formulaire de Contact - Edi'lybris</title>
<meta name="description" content="">

</head>


<?php include("header.php"); ?>

<h1 class="mt-5 text-center text-white fw-bold">
    Formulaire De Contact
</h1>

<div class="text-center mt-5">
    <img src="images/nousContacter.png" loading="lazy" alt="" class="img-fluid w-25">
</div>

<h4 class="mt-5 text-center">
    <strong class="text-white">Besoin d'une réponse à vos questions ?</strong>
</h4>

<h4 class="mb-5 text-center">
    <strong class="text-white">Nous sommes là pour vous aider !</strong>
</h4>

<?php if (isset($_SESSION['message_sent']) && $_SESSION['message_sent'] === true): ?>
    <section class="confirmation mb-5">
        <h4 class="m-5 text-center border border-3 rounded text-white p-2 display-6 h4Index" id="contact"><strong>MESSAGE ENVOYE</strong></h4>
        <div class="text-center">
            <div class="lead text-success display-4 text-center bg-light rounded shadow p-4 pb-5 bg-white rounded ms-1 me-1 mb-5">
                <p>
                    Nous avons bien reçu votre message et nous vous confirmons que votre demande est en cours de traitement.
                </p>
            </div>
        </div>
    </section>
    <?php unset($_SESSION['message_sent']); // Supprimer la variable après l'affichage 
    ?>
<?php endif; ?>

<form class="needs-validation ms-3 me-3" id="myForm" novalidate action="#" method="POST">
    <fieldset class="mb-5 ms-2 me-2">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <!-- Prénom -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label for="firstName" class="form-label text-white">Prénom</label>
                            <input name="firstName" type="text" id="firstName" class="form-control" placeholder="Prénom" required>
                            <div class="invalid-feedback">
                                Veuillez saisir votre prénom.
                            </div>
                        </div>
                    </div>

                    <!-- Nom -->
                    <div class="col">
                        <div class="form-outline">
                            <label for="lastName" class="form-label text-white">Nom</label>
                            <input name="lastName" type="text" id="lastName" class="form-control" placeholder="Nom" required>
                            <div class="invalid-feedback">
                                Veuillez saisir votre nom.
                            </div>
                        </div>
                    </div>

                    <!-- Téléphone -->
                    <div class="col">
                        <div class="form-outline mb-4">
                            <label for="phoneNumber" class="form-label text-white">Téléphone</label>
                            <input name="phoneNumber" type="tel" id="phoneNumber" class="form-control" placeholder="Téléphone" pattern="[0-9]{10,15}" required>
                            <div class="invalid-feedback">
                                Veuillez saisir un numéro de téléphone valide (10 à 15 chiffres).
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-outline mb-4">
                        <label for="email" class="form-label text-white">Adresse Email</label>
                        <div class="input-group has-validation">
                            <input name="email" type="email" id="email" class="form-control" placeholder="Email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|fr)$">
                            <div class="invalid-feedback">
                                Veuillez saisir une adresse email valide avec un @ et un domaine .com ou .fr.
                            </div>
                        </div>
                    </div>

                    <!-- Sélecteur d'objet -->
                    <div class="mb-3">
                        <label for="objet" class="form-label text-white">Objet :</label>
                        <select name="objet" id="objet" class="form-select" required>
                            <option value="" disabled selected>Choisissez un objet</option>
                            <option value="Demande de devis">Collaboration avec l'association</option>
                            <option value="Besoins d'infos">Besoins d'informations</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>

                    <!-- Message -->
                    <div class="form-group">
                        <label for="message" class="mb-2 text-white">Message</label>
                        <div class="form-floating">
                            <textarea name="message" class="form-control" id="message" required></textarea>
                            <label for="message">Votre Message</label>
                            <div class="invalid-feedback">
                                Veuillez saisir votre message.
                            </div>
                        </div>
                    </div>

                    <!-- Case à cocher RGPD -->
                    <div class="form-check mb-4 mt-3">
                        <input class="form-check-input" type="checkbox" id="rgpdCheckbox" name="rgpdCheckbox" required>
                        <label class="form-check-label text-white" for="rgpdCheckbox">
                            J'accepte que mes données personnelles soient traitées conformément à <a href="politiquedeConfidentialite.php" class="politique"><span class="fw-bold">Politique De Confidentialité</span></a>.
                        </label>
                        <div class="invalid-feedback">
                            Vous devez accepter la politique de confidentialité.
                        </div>
                    </div>

                    <!-- reCAPTCHA -->
                    <div class="g-recaptcha mt-4 mb-4" data-sitekey="6LfuGI8qAAAAAPhovwcv6m_lTrVgfMGyG4PpAtEF"></div>

                    <!-- Bouton d'envoi -->
                    <button type="submit" value="Valider" id="send-data" class="btn2 borderColortext-white fs-5 mb-4">
                        Envoyez
                    </button>
                </div>
            </div>
        </div>
    </fieldset>
</form>

<?php include("footer.php"); ?>

</body>

</html>