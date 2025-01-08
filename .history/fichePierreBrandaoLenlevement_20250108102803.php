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
                    <p class="fw-bold coloryellow fs-5">22,00 €</p>
                </div>
                <div class="col-12 text-white">
                    <h3 class="h2Jaune text-center">L'enlèvement</h3>
                    <p>
                        <strong class="h2Jaune">Année de publication :</strong> 2024
                    </p>
                    <p>
                        <strong class="h2Jaune">Nombre de pages :</strong> 338
                    </p>
                    <p>
                        <strong class="h2Jaune">Genre :</strong> Policier
                    </p>
                    <p class="lead">
                        <strong class="h2Jaune">Résumé :</strong> Après Meurtres à la micro-carte, la gendarme Isabelle Loubry doit beaucoup prendre sur elle pour accepter de pardonner au genre humain. Cependant, elle aussi doit rendre des comptes auprès d’une hiérarchie fidèle à ses principes de transparence et d’honnêteté. Mais lorsque l’un des plus hauts ténors de l’institution l’invite à accepter une mission particulièrement sensible, elle est loin de s’imaginer dans quel monde elle allait plonger. Et quand s’ajoute à ce challenge une affaire d’enlèvement qui la touchera en plein coeur, ses convictions s’opposeront au principe même qui régit toute personne sur Terre : l’Amour ! De Charente-Maritime en Bretagne, suivez cette héroïne et tentez de percer l’obscurantisme qui confronte toujours les éléments du bien à ceux du mal !
                    </p>
                    <div class="text-center mt-3">
                        <a href="images/bulletin-de-commande-2024.pdf" class="btn btn-warning fw-bold text-white" download>Télécharger le bon de commande</a>
                    </div>
                    <h3 class="h2Jaune text-center m-3">Extrait chapitre 1</h3>
                    <p>
                        Un frisson secoue la jeune femme… De froid ? Elle ne sait pas trop, mais il est tellement désagréable qu’elle sort de sa torpeur. Elle se retrouve en position fœtale, coincée entre plusieurs parois recouvertes de moquette...
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
                        <img src="images/pierreBrandao/couvlenlevement.webp" class="img-fluid" alt="Couverture du livre L'enlèvement">
                        <p class="fw-bold coloryellow mt-3 fs-4 lead">22,00 €</p>
                    </div>
                    <div class="livre-details">
                        <h3 class="h2Jaune">L'enlèvement</h3>
                        <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2024</p>
                        <p class="annee text-white"><strong class="h2Jaune">Genre :</strong> Policier</p>
                        <p class="annee text-white"><strong class="h2Jaune">Nombre de pages :</strong> 338</p>
                        <p class="lead text-white">
                            Après Meurtres à la micro-carte, la gendarme Isabelle Loubry doit beaucoup prendre sur elle pour accepter de pardonner au genre humain...
                        </p>
                        <a href="images/bulletin-de-commande-2024.pdf" class="lien text-white fw-bold" download>Télécharger le bon de commande</a>
                        <h3 class="h2Jaune mt-5">Extrait chapitre 1</h3>
                        <p>
                            Un frisson secoue la jeune femme… De froid ? Elle ne sait pas trop, mais il est tellement désagréable qu’elle sort de sa torpeur...
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
