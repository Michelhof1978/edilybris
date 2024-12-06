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

<!-- Mode mobile-->

<h2 class="text-white text-center m-4">Nos dernières nouveautés</h2>
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
<div class="container mt-5">
    <div id="netflixCarousel" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Groupe 1 -->
            <div class="carousel-item active">
                <div class="d-flex justify-content-center">
                    <div class="card netflix-card mx-2">
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
                    <div class="card netflix-card mx-2">
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
                    <div class="card netflix-card mx-2">
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
                    <div class="card netflix-card mx-2">
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
                    <div class="card netflix-card mx-2">
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
                    <div class="card netflix-card mx-2">
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
