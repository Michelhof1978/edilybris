<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jocelyn  - Auteur</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Section de l'en-tête de l'auteur -->
    <div class="headerAuteur">
        <div class="containerAuteur">
            <h1>Patrice Bachereau</h1>
            <img src="images/patriceBachereau/patriceBachereau.webp" alt="Portrait de Patrice Bachereau" class="img-fluid bio-image">
        </div>
    </div>

    <main>
        <!-- Section biographie -->
        <section class="biographie">
            <div class="containerAuteur">
                <h2 class="h2Jaune">Biographie</h2>

                <div class="bio-content">
                    <div class="bio-text">
                        <p class="lead text-white text-center m-4">
                            L'univers que nous connaissons n'est pas assez grand pour Patrice Bachereau, auteur d'un premier roman héroïc-fantasy qui transporte le lecteur dans un monde où créatures fantastiques et aventure humaine se côtoient !
                            <br><br>
                            L'auteur a pourtant ses journées bien remplies : entre son activité professionnelle, ses occupations de maire de sa commune, et sa vie familiale, il n'a de cesse de rêver et faire partager son onirisme en embrassant le papier de ses écrits fantastiques. La grande prophétie s'annonce comme les prémices d'une aventure de haut vol, car la suite est déjà attendue !
                            <br><br>
                            Cette présentation ne peut se conclure sans parler du magnifique dessin de couverture réalisé par Christophe KRO, un professionnel de la bande dessinée que vous pouvez retrouver sur son site : 
                            <a href="https://christophekro.wixsite.com/art-bordeaux" class="coloryellow fw-bold" target="_blank" rel="noopener noreferrer">https://christophekro.wixsite.com/art-bordeaux</a>
                        </p>
                    </div>
                </div>

                <!-- Section des cartes de livres -->
                <div class="book-cards">
                    
                    <!-- Cartes pour mobile -->
                    <div class="d-block d-md-none">
                        <div class="mobile-books-container">
                            <!-- Carte 1 -->
                            <div class="mobile-book-card">
                                <a href="fichePatriceBachereau.php">
                                    <img src="images/patriceBachereau/image-basse-resolution-couverture-min.webp" class="img-fluid" alt="Couverture de La grande prophétie">
                                    <div class="mobile-book-details">
                                        <div class="mobile-book-author">Patrice Bachereau</div>
                                        <div class="mobile-book-price">22,00 €</div>
                                    </div>
                                </a>
                            </div>
                            <!-- Carte 2 -->
                            <div class="mobile-book-card">
                                <a href="fichePatriceBachereauLivre2.php">
                                    <img src="images/patriceBachereau/image-livre2-min.webp" class="img-fluid" alt="Couverture du deuxième livre">
                                    <div class="mobile-book-details">
                                        <div class="mobile-book-author">Patrice Bachereau</div>
                                        <div class="mobile-book-price">18,00 €</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Cartes pour desktop -->
                    <div class="d-none d-md-block">
                        <div class="new-card-container">
                            <!-- Carte 1 -->
                            <div class="new-card">
                                <a href="fichePatriceBachereauLaGrandeProphetie.php">
                                    <img src="images/patriceBachereau/image-basse-resolution-couverture-min.webp" class="img-fluid" alt="Couverture de La grande prophétie">
                                    <div class="new-card-content">
                                        <div class="new-card-author">Patrice Bachereau</div>
                                        <div class="new-card-price">22,00 €</div>
                                    </div>
                                </a>
                            </div>
                            <!-- Carte 2 -->
                            <div class="new-card">
                                <a href="fichePatriceBachereauLivre2.php">
                                    <img src="images/patriceBachereau/image-livre2-min.webp" class="img-fluid" alt="Couverture du deuxième livre">
                                    <div class="new-card-content">
                                        <div class="new-card-author">Patrice Bachereau</div>
                                        <div class="new-card-price">18,00 €</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

</body>
</html>
