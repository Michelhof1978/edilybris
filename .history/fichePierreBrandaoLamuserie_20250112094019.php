<?php include("head.php"); ?>

<title>Pierre Brandao - Auteur</title>
<meta name="description" content="Biographie et livres de Pierre Brandao. Découvrez ses œuvres et téléchargez un bon de commande.">
</head> <!-- Correction : fermeture correcte de la balise <head> -->

<?php include("header.php"); ?>

<main>
    <!-- MODE MOBILE--> 
    <!-- Section des livres -->
    <section class="livres-mobile d-block d-md-none py-4">
        <div class="container">
            <h2 class="text-center text-white">Les livres de Pierre Brandao</h2>

            <!-- Livre 1 : L'ENLEVEMENT -->
            <div id="livre-1-mobile" class="livre-mobile row align-items-center my-4">
                <div class="col-12 text-center">
                    <img src="images/pierreBrandao/couvlenlevement.webp" class="img-fluid w-75 mb-3" alt="Couverture du livre L'enlèvement">
                    <p class="fw-bold coloryellow fs-5">15,00 €</p>
                </div>
                <div class="col-12 text-white">
                    <h3 class="h2Jaune text-center">L'enlèvement</h3>
                    <p>
                        <strong class="h2Jaune">Année de publication :</strong> 2023
                    </p>
                    <p>
                        <strong class="h2Jaune">Nombre de pages :</strong> 134
                    </p>
                    <p>
                        <strong class="h2Jaune">Genre :</strong> Poésie
                    </p>
                    <p class="lead">
                        <strong class="h2Jaune">Résumé :</strong> Ce septième recueil de poésies de Pierre Brandao regroupe des textes dont le fil conducteur est la musique des mots, la mélodie des émotions, l’inspiration du coeur.

À l’instar d’une épicerie imaginaire, l’Amuserie vous propose cinq rayons qui sauront occuper vos aspirations de liberté : Amour et tendresse – Révolte – C’est la vie ! – Vague à l’âme – Bazar.

Pour vous plaire, l’Amuse-rit (et pleure parfois) évoque les joies des passions, les colères éphémères, les doutes existentiels et les blessures quotidiennes dont on se passerait bien, mais qui font aussi partie de la nécessité de vivre.

L’auteur plagierait bien volontiers Michel Sardou en fredonnant que tout est prétexte à chanson : cet ouvrage l’illustre parfaitement ! Alors, si un air vous trotte dans la tête en lisant, ne vous étonnez pas : c’est voulu !
                    </p>
                    <div class="text-center mt-3">
                        <a href="images/bulletin-de-commande-2024.pdf" class="btn btn-warning fw-bold text-white" download>Télécharger le bon de commande</a>
                    </div>

                    <!-- Bouton citations -->
                <div class="text-center">
                    <a href="fichePierreBrandaoCitations.php" class="btnCitations">Découvrir les citations</a>
                </div>
                    </p>

                    <div class="text-center mt-3">
                        <a href="images/bulletin-de-commande-2024.pdf" class="btn btn-warning fw-bold text-white" download>Télécharger le bon de commande</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MODE DESKTOP--> 
    <section class="livres d-none d-md-block">
        <div class="containerAuteur">
            <h2>Les livres de Pierre Brandao</h2>
            <!-- Carte 1 : L'ENLEVEMENT -->
            <div id="livre-1" class="livre">
                <div class="livre-content">
                    <div class="livre-image">
                        <img src="images/pierreBrandao/XLlamuserie.webp" class="img-fluid" alt="Couverture du livre L'enlèvement">

                        <p class="fw-bold coloryellow mt-3 fs-4 lead">15,00 €</p>


                    </div>
                    <div class="livre-details">
                        <h3 class="h2Jaune">L'amuserie (et pleure parfois)</h3>
                        <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2023</p>
                        <p class="annee text-white"><strong class="h2Jaune">Genre :</strong> Poésie</p>
                        <p class="annee text-white"><strong class="h2Jaune">Nombre de pages :</strong> 134</p>
                        <p class="lead text-white">
                        Ce septième recueil de poésies de Pierre Brandao regroupe des textes dont le fil conducteur est la musique des mots, la mélodie des émotions, l’inspiration du coeur.

À l’instar d’une épicerie imaginaire, l’Amuserie vous propose cinq rayons qui sauront occuper vos aspirations de liberté : Amour et tendresse – Révolte – C’est la vie ! – Vague à l’âme – Bazar.

Pour vous plaire, l’Amuse-rit (et pleure parfois) évoque les joies des passions, les colères éphémères, les doutes existentiels et les blessures quotidiennes dont on se passerait bien, mais qui font aussi partie de la nécessité de vivre.

L’auteur plagierait bien volontiers Michel Sardou en fredonnant que tout est prétexte à chanson : cet ouvrage l’illustre parfaitement ! Alors, si un air vous trotte dans la tête en lisant, ne vous étonnez pas : c’est voulu !
                        </p>
   <!-- Bouton citations -->
   <div class="text-center mb-5">
                    <a href="fichePierreBrandaoCitations.php" class="btnCitations">Découvrir les citations</a>
                </div>                     
                        </p>
                        <a href="images/bulletin-de-commande-2024.pdf" class="lien text-white fw-bold" download>Télécharger le bon de commande</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include("footer.php"); ?>
</body>
</html>
