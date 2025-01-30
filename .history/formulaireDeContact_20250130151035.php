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
<style>
body {
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    background-image: url('images/fondBleu.webp') !important;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;   
}
</style>
</head>

<body>

<?php include("header.php"); ?>

<section class="fond">
    <h1 class="mt-5 text-center text-white fw-bold">Formulaire De Contact</h1>

    <div class="text-center m-1">
        <img src="images/nousContacter.webp" loading="lazy" alt="" class="img-fluid w-25">
    </div>

    <h4 class="mt-5 text-center">
        <strong class="text-white">Besoin d'une réponse à vos questions ?</strong>
    </h4>

    <div class="text-center m-3">
        <img src="images/livresEtagere2.webp" loading="lazy" alt="" class="img-fluid w-50">
    </div>

    <h4 class="mb-5 text-center">
        <strong class="text-white">Nous sommes là pour vous aider !</strong>
    </h4>

    <?php if (isset($_SESSION['message_sent']) && $_SESSION['message_sent'] === true): ?>
        <section class="confirmation mb-5">
            <h4 class="m-5 text-center border border-3 rounded text-white p-2 display-6 h4Index" id="contact">
                <strong>MESSAGE ENVOYÉ</strong>
            </h4>
            <div class="text-center">
                <div class="lead text-success display-4 text-center bg-light rounded shadow p-4 pb-5 bg-white rounded ms-1 me-1 mb-5">
                    <p>
                        Nous avons bien reçu votre message et nous vous confirmons que votre demande est en cours de traitement.
                    </p>
                </div>
            </div>
        </section>
        <?php unset($_SESSION['message_sent']); // Supprimer la variable après l'affichage ?>
    <?php endif; ?>

    <form class="needs-validation ms-3 me-3" id="myForm" novalidate action="#" method="POST">
        <fieldset class="mb-5 ms-2 me-2">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="row mb-4">
                        <div class="col">
                            <label for="firstName" class="form-label text-white">Prénom</label>
                            <input name="firstName" type="text" id="firstName" class="borderColorForm form-control" placeholder="Prénom" required>
                        </div>
                        <div class="col">
                            <label for="lastName" class="form-label text-white">Nom</label>
                            <input name="lastName" type="text" id="lastName" class="borderColorForm form-control" placeholder="Nom" required>
                        </div>
                    </div>

                    <label for="phoneNumber" class="form-label text-white">Téléphone</label>
                    <input name="phoneNumber" type="tel" id="phoneNumber" class="borderColorForm form-control" placeholder="Téléphone" pattern="[0-9]{10,15}" required>

                    <label for="email" class="form-label text-white">Adresse Email</label>
                    <input name="email" type="email" id="email" class="borderColorForm form-control" placeholder="Email" required>

                    <label for="objet" class="form-label text-white">Objet :</label>
                    <select name="objet" id="objet" class="form-select borderColorForm" required>
                        <option value="" disabled selected>Choisissez un objet</option>
                        <option value="Demande de devis">Collaboration avec l'association</option>
                        <option value="Besoins d'infos">Besoins d'informations</option>
                        <option value="Demande de devis">Proposition de publication</option>
                        <option value="Besoins d'infos">Salon de littérature</option>
                        <option value="autre">Autre</option>
                    </select>

                    <button type="submit" id="send-data" class="btn2 borderColorForm text-white fs-5 p-2 mb-4 rounded">
                        Envoyez
                    </button>
                </div>
            </div>
        </fieldset>
    </form>
</section>

<?php include("footer.php"); ?>

</body>
</html>
