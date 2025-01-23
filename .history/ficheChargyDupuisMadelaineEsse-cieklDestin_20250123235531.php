<?php include("head.php"); ?>

<title>Madelelaine Chargy Dupuis - Auteur</title>
<meta name="description" content="Biographie et livres de Madelelaine Chargy Dupuis. Découvrez ses œuvres et téléchargez un bon de commande.">
</head> 
<?php include("header.php"); ?>

<main>
    <!-- MODE MOBILE--> 
    <!-- Section des livres -->
    <section class="livres-mobile d-block d-md-none py-4">
        <div class="container">
            <h2 class="text-center text-white">Le livre de Madelelaine Chargy Dupuis</h2>

            <!-- Livre 1 : Abreuver le fou qui dort en nos déserts -->
            <div id="livre-1-mobile" class="livre-mobile row align-items-center my-4">
                <div class="col-12 text-center">
                    <img src="images/christinekunz/couv-pour-site-abreuver-le-fou-min.webp" class="img-fluid w-75 mb-3" alt="Couverture du livre Abreuver le fou qui dort en nos déserts">
                    <p class="fw-bold coloryellow fs-5">20,00 €</p>
                </div>
                <div class="col-12 text-white">
                    <h3 class="h2Jaune text-center">Madelelaine Chargy Dupuis</h3>
                    <p>
                        <strong class="h2Jaune">Année de publication :</strong> 2019
                    </p>
                    <p>
                        <strong class="h2Jaune">Nombre de pages :</strong> 54<br> <br>
                        <strong class="h2Jaune">Référence :</strong>  9782363440303
                    <p>
                        <strong class="h2Jaune">Genre :</strong> Poésies
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
            <h2>Abreuver le fou qui dort en nos déserts</h2>
            <!-- Carte 1 Abreuver le fou qui dort en nos déserts-->
            <div id="livre-1" class="livre">
                <div class="livre-content">
                    <div class="livre-image">
                        <img src="images/christinekunz/couv-pour-site-abreuver-le-fou-min.webp" class="img-fluid" alt="Couverture du livre Abreuver le fou qui dort en nos déserts">

                        <p class="fw-bold coloryellow mt-3 fs-4 lead">20,00 €</p>
                        <!-- <img src="images/livreIndex2.webp" class="img-fluid mt-5 mb-5" alt="Illustration"> -->

                    </div>
                    <div class="livre-details">
                        <h3 class="h2Jaune">Madelelaine Chargy Dupuis</h3>
                        <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2019</p>
                        <p class="annee text-white"><strong class="h2Jaune">Genre :</strong> Poésie</p>
                        <p class="annee text-white"><strong class="h2Jaune">Nombre de pages :</strong> 54</p>
                        <p class="annee text-white"><strong class="h2Jaune">Référence :</strong> 9782363440303</p>

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
