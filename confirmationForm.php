<?php
session_start(); // Démarrer la session

include("head.php");
?>

<title>Confirmation Formulaire De Contact - Harmony Digital</title>
<meta name="description" content="Confirmation message - Harmony Digital">

<style>
    .text-light-success {
        color: #7dff33;
        /* Un vert plus clair */
    }
</style>

</head>

<?php include("header.php") ?>

<div id="binary-background2"></div>

<?php if (isset($_SESSION['message_sent']) && $_SESSION['message_sent'] === true): ?>
    <section class="confirmation mb-5">
        <h4 class="m-5 text-center border border-3 text-white p-2 display-6 borderColor" id="contact"><strong>MESSAGE ENVOYE</strong></h4>
        <div class="text-center">
            <div class="fw-bold lead fs-2 text-light-success text-center p-4 pb-5 ms-1 me-1 mb-5">
                <p>
                    Nous avons bien reçu votre message et nous vous confirmons que votre demande est en cours de traitement.
                </p>
                <img src="images/robotSeparateur.png" alt="robot" loading="lazy" class="img-fluid w-25 mt-3">
            </div>
        </div>
    </section>
    <?php unset($_SESSION['message_sent']); // Supprimer la variable après l'affichage 
    ?>
<?php endif; ?>

<?php include("footer.php") ?>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const typingElement = document.querySelector('#binary-background2');
        const binaryLength = 300; // Nombre total de caractères binaires à afficher
        const characters = [];

        // Créez des éléments span pour chaque caractère
        for (let i = 0; i < binaryLength; i++) {
            const char = document.createElement('span');
            char.textContent = Math.random() > 0.8 ? '@' : '@'; // Remplace 0 et 1 par @ et #
            char.className = 'star';
            char.style.left = Math.random() * 100 + 'vw';
            char.style.top = Math.random() * 100 + 'vh';
            char.style.animationDelay = `${Math.random() * 15}s`; // Délai d'animation aléatoire pour chaque caractère
            typingElement.appendChild(char);
            characters.push(char);
        }

        // Fonction pour afficher les caractères un par un
        function showCharacters(index) {
            if (index < characters.length) {
                characters[index].style.opacity = 1;
                setTimeout(() => showCharacters(index + 1), 200); // Ajustez la durée pour la vitesse souhaitée
            }
        }

        showCharacters(0);
    });
</script>

</body>

</html>