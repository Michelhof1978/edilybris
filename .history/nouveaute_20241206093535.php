<!-- Mode mobile -->
<div class=" videoCommandeMobile d-flex justify-content-center align-items-center vh-100 d-block d-md-none">
    <!-- Conteneur vidéo sans marges excessives -->
    <div class="position-relative w-100 h-100" style="max-width: 800px;">
        <video id="myVideo" autoplay muted class="w-100 h-100 rounded-3 object-fit-cover">
            <source src="videos/commande.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la vidéo.
        </video>
    </div>
</div>


<!-- Mode desktop -->
<div class="d-flex justify-content-center align-items-center vh-100">
    <!-- Conteneur vidéo sans marges excessives -->
    <div class="position-relative w-100 h-100" style="max-width: 800px;">
        <video id="myVideo" autoplay muted class="w-100 h-100 rounded-3 object-fit-cover d-none d-lg-block">
            <source src="videos/commande.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la vidéo.
        </video>
    </div>
</div>

<!------------------------------------------------------------------------------>

<h2 class="text-white text-center m-4">Nos dernières nouveautés</h2>

<!-- Mode mobile-->
<div class="container mt-5">
    <div id="netflixCarousel" class="carousel slide d-block d-sm-none" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Groupe 1 -->
            <div class="carousel-item active">
                <div class="d-flex justify-content-center">
                    <!-- Card 1 -->
                    <div class="card netflix-card mx-2 col-6 col-md-4">
                        <a href="auteurs/pierreBrandao.html">
                            <img src="images/pierreBrandao/luciolesMagiques.png" alt="Lucioles Magiques" class="img-fluid book-cover">
                            <div class="book-details">
                                <div class="book-title coloryellow fw-bold">Lucioles Magiques</div>
                                <div class="book-author coloryellow fw-bold">Pierre Brandao</div>
                                <div class="book-description">
                                    LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.
                                </div>
                                <div class="book-price coloryellow fw-bold">19.99€</div>
                            </div>
                        </a>
                    </div>
                    <!-- Card 2 -->
                    <div class="card netflix-card mx-2 col-6 col-md-4">
                        <a href="auteurs/pierreBrandao.html">
                            <img src="images/pierreBrandao/luciolesMagiques.png" class="img-fluid book-cover" alt="Placeholder Image">
                            <div class="book-details">
                                <div class="book-title coloryellow fw-bold">Lucioles Magiques</div>
                                <div class="book-author coloryellow fw-bold">Pierre Brandao</div>
                                <div class="book-description">LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.
                                </div>
                                <div class="book-price coloryellow fw-bold">30€</div>
                            </div>
                        </a>
                    </div>
                    <!-- Card 3 -->
                    <div class="card netflix-card mx-2 col-6 col-md-4">
                        <a href="auteurs/pierreBrandao.html">
                            <img src="images/pierreBrandao/luciolesMagiques.png" class="img-fluid book-cover" alt="Placeholder Image">
                            <div class="book-details">
                                <div class="book-title coloryellow fw-bold">Lucioles Magiques</div>
                                <div class="book-author coloryellow fw-bold">Pierre Brandao</div>
                                <div class="book-description">LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.
                                </div>
                                <div class="book-price coloryellow fw-bold">20€</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Groupe 2 -->
            <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <!-- Card 1 -->
                    <div class="card netflix-card mx-2 col-6 col-md-4">
                        <a href="auteurs/pierreBrandao.html">
                            <img src="images/pierreBrandao/luciolesMagiques.png" class="img-fluid book-cover" alt="Placeholder Image">
                            <div class="book-details">
                                <div class="book-title coloryellow fw-bold">Lucioles Magiques</div>
                                <div class="book-author coloryellow fw-bold">Pierre Brandao</div>
                                <div class="book-description">LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.
                                </div>
                                <div class="book-price coloryellow fw-bold">35€</div>
                            </div>
                        </a>
                    </div>
                    <!-- Card 2 -->
                    <div class="card netflix-card mx-2 col-6 col-md-4">
                        <a href="auteurs/pierreBrandao.html">
                            <img src="images/pierreBrandao/luciolesMagiques.png" class="img-fluid book-cover" alt="Placeholder Image">
                            <div class="book-details">
                                <div class="book-title coloryellow fw-bold">Lucioles Magiques</div>
                                <div class="book-author coloryellow fw-bold">Pierre Brandao</div>
                                <div class="book-description">LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.
                                </div>
                                <div class="book-price coloryellow fw-bold">40€</div>
                            </div>
                        </a>
                    </div>
                    <!-- Card 3 -->
                    <div class="card netflix-card mx-2 col-6 col-md-4">
                        <a href="auteurs/pierreBrandao.html">
                            <img src="images/pierreBrandao/luciolesMagiques.png" class="img-fluid book-cover" alt="Placeholder Image">
                            <div class="book-details">
                                <div class="book-title coloryellow fw-bold">Lucioles Magiques</div>
                                <div class="book-author coloryellow fw-bold">Pierre Brandao</div>
                                <div class="book-description">LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.</div>
                                <div class="book-price coloryellow fw-bold">50€</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#netflixCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#netflixCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


<!-- Mode desktop -->
<!-- Groupe 1 -->
<div class="L-card-container mb-5" id="L-group1">
    <div class="L-card">
        <a href="link_to_book_A.html">
            <img src="images/pierreBrandao/leCoeurAsesSaisons.png" class="img-fluid" alt="Livre A">
            <div class="L-card-content">
                <div class="L-card-title">L'écho des collines</div>
                <div class="L-card-author">Alice Dubois</div>
                <div class="L-card-description">Une histoire captivante au cœur des montagnes.</div>
                <div class="L-card-price">16,99 €</div>
            </div>
        </a>
    </div>
    <div class="L-card">
        <a href="link_to_book_B.html">
            <img src="images/pierreBrandao/luciolesMagiques.png" class="img-fluid" alt="Livre B">
            <div class="L-card-content">
                <div class="L-card-title">Les murmures du temps</div>
                <div class="L-card-author">Bertrand Martin</div>
                <div class="L-card-description">Un voyage à travers les époques et les secrets.</div>
                <div class="L-card-price">18,99 €</div>
            </div>
        </a>
    </div>
    <div class="L-card">
        <a href="link_to_book_C.html">
            <img src="images/pierreBrandao/leCoeurAsesSaisons.png" class="img-fluid" alt="Livre C">
            <div class="L-card-content">
                <div class="L-card-title">Le cercle des étoiles</div>
                <div class="L-card-author">Camille Laurent</div>
                <div class="L-card-description">Une aventure épique dans un univers fantastique.</div>
                <div class="L-card-price">12,99 €</div>
            </div>
        </a>
    </div>
    <div class="L-card">
        <a href="link_to_book_D.html">
            <img src="images/pierreBrandao/luciolesMagiques.png" class="img-fluid" alt="Livre D">
            <div class="L-card-content">
                <div class="L-card-title">Sous les cyprès</div>
                <div class="L-card-author">Diane Morel</div>
                <div class="L-card-description">Un roman poétique entre amour et nature.</div>
                <div class="L-card-price">14,99 €</div>
            </div>
        </a>
    </div>
    
</div>

<!-- Groupe 2 -->
<div class="L-card-container L-hidden" id="L-group2">
    <div class="L-card">
        <a href="link_to_book_F.html">
            <img src="images/pierreBrandao/luciolesMagiques.png" class="img-fluid" alt="Livre F">
            <div class="L-card-content">
                <div class="L-card-title">La lumière des ombres</div>
                <div class="L-card-author">Fabien Leclerc</div>
                <div class="L-card-description">Un thriller captivant à couper le souffle.</div>
                <div class="L-card-price">17,99 €</div>
            </div>
        </a>
    </div>
    <div class="L-card">
        <a href="link_to_book_G.html">
            <img src="images/pierreBrandao/luciolesMagiques.png" class="img-fluid" alt="Livre G">
            <div class="L-card-content">
                <div class="L-card-title">Les vagues éternelles</div>
                <div class="L-card-author">Gabrielle Blanc</div>
                <div class="L-card-description">Un récit émouvant au bord de l'océan.</div>
                <div class="L-card-price">13,99 €</div>
            </div>
        </a>
    </div>
    <div class="L-card">
        <a href="link_to_book_H.html">
            <img src="images/pierreBrandao/leCoeurAsesSaisons.png" class="img-fluid" alt="Livre H">
            <div class="L-card-content">
                <div class="L-card-title">Le chant des cendres</div>
                <div class="L-card-author">Henri Dupont</div>
                <div class="L-card-description">Une épopée historique riche en émotions.</div>
                <div class="L-card-price">14,99 €</div>
            </div>
        </a>
    </div>
    <div class="L-card">
        <a href="link_to_book_I.html">
            <img src="images/pierreBrandao/leCoeurAsesSaisons.png" class="img-fluid" alt="Livre I">
            <div class="L-card-content">
                <div class="L-card-title">La danse des esprits</div>
                <div class="L-card-author">Isabelle Fournier</div>
                <div class="L-card-description">Une intrigue captivante entre réel et imaginaire.</div>
                <div class="L-card-price">16,99 €</div>
            </div>
        </a>
    </div>
    
</div>

<!-- Groupe 3 -->
<div class="L-card-container L-hidden" id="L-group3">
    <div class="L-card">
        <a href="link_to_book_K.html">
            <img src="images/pierreBrandao/leCoeurAsesSaisons.png" class="img-fluid" alt="Livre K">
            <div class="L-card-content">
                <div class="L-card-title">Le feu de la nuit</div>
                <div class="L-card-author">François Leroy</div>
                <div class="L-card-description">Une aventure pleine de mystères.</div>
                <div class="L-card-price">19,99 €</div>
            </div>
        </a>
    </div>
    <div class="L-card">
        <a href="link_to_book_L.html">
            <img src="images/pierreBrandao/leCoeurAsesSaisons.png" class="img-fluid" alt="Livre L">
            <div class="L-card-content">
                <div class="L-card-title">L'étoile d'argent</div>
                <div class="L-card-author">Juliette Moreau</div>
                <div class="L-card-description">Un voyage au-delà des étoiles.</div>
                <div class="L-card-price">20,99 €</div>
            </div>
        </a>
    </div>
    <div class="L-card">
        <a href="link_to_book_M.html">
            <img src="images/pierreBrandao/leCoeurAsesSaisons.png" class="img-fluid" alt="Livre M">
            <div class="L-card-content">
                <div class="L-card-title">Les lumières de l'aube</div>
                <div class="L-card-author">Clara Martin</div>
                <div class="L-card-description">Un roman d'amour et de mystère à couper le souffle.</div>
                <div class="L-card-price">21,99 €</div>
            </div>
        </a>
    </div>
    <div class="L-card">
        <a href="link_to_book_N.html">
            <img src="images/pierreBrandao/luciolesMagiques.png" class="img-fluid" alt="Livre N">
            <div class="L-card-content">
                <div class="L-card-title">La forêt des songes</div>
                <div class="L-card-author">Lucas Dupont</div>
                <div class="L-card-description">Une exploration entre l'imaginaire et le réel.</div>
                <div class="L-card-price">22,99 €</div>
            </div>
        </a>
    </div>
   
</div>

<!-- Boutons de navigation -->
<div class="L-navigation">
    <button id="L-backButton" class="L-button text-white" disabled>Précédent</button>
    <button id="L-nextGroupButton" class="L-button text-white">Suivant</button>
</div>

 <!-- FIN CARDS L-->