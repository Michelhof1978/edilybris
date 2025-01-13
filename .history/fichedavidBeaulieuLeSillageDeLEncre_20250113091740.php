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
            <h2 class="text-center text-white">Le livre de David Beaulieu</h2>

            <!-- Livre 1 : L'ASSASSIN DU 1 ER MAI -->
            <div id="livre-1-mobile" class="livre-mobile row align-items-center my-4">
                <div class="col-12 text-center">
                    <img src="images/davidBeaulieu/couv-le-sillage-de-l-encre-1.webp" class="img-fluid w-75 mb-3" alt="Couverture du livre L'ASSASSIN DU 1 ER MAI ">
                    <p class="fw-bold coloryellow fs-5">22,00 €</p>
                </div>
                <div class="col-12 text-white">
                    <h3 class="h2Jaune text-center">Le sillage de l'encre</h3>
                    <p>
                        <strong class="h2Jaune">Année de publication :</strong> 2022
                    </p>
                    <p>
                        <strong class="h2Jaune">Nombre de pages :</strong> 86
                    </p>
                    <p>
                        <strong class="h2Jaune">Genre :</strong> Prose poétique
                    </p>
                    
                    <div class="text-center mt-3">
                        <a href="images/bulletin-de-commande-2024.pdf" class="btn btn-warning fw-bold text-white" download>Télécharger le bon de commande</a>
                    </div>
                    <h3 class="h2Jaune text-center m-3">Lire les extraits</h3>
                    <
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
                        <img src="images/davidBeaulieu/couv-le-sillage-de-l-encre-1.webp" class="img-fluid" alt="Couverture du livre L'enlèvement">
                        <p class="fw-bold coloryellow mt-3 fs-4 lead">20,00 €</p>
                        <img src="images/livreIndex2.webp" class="img-fluid mt-5 mb-5" alt="Illustration">

                    </div>
                    <div class="livre-details">
                        <h3 class="h2Jaune">L'assassin du 1 er mai</h3>
                        <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2022</p>
                        <p class="annee text-white"><strong class="h2Jaune">Genre :</strong> Prose poétique</p>
                        <p class="annee text-white"><strong class="h2Jaune">Nombre de pages :</strong> 86</p>
                        <p class="lead text-white">
                 
<h3 class="h2Jaune text-center m-3">Lire les extraits</h3>

                     <!-- Bouton citations -->
                <div class="text-center">
                    <a href="ficheDavidBeaulieuCitations.php" class="btnCitations mb-5">Les extraits</a>
                </div>
                <p>
                <img src="images/davidBeaulieu/fiancee-ocean_11zon.webp" class="img-fluid mt-5 mb-5" alt="Illustration">
                <img src="images/davidBeaulieu" class="img-fluid mt-5 mb-5" alt="Illustration">


                </p>
                    </p>
                      <a href="images/bulletin-de-commande-2024.pdf" class="lien text-white fw-bold mt-5" download>Télécharger le bon de commande</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include("footer.php"); ?>
</body>
</html>
