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

<!------------------------CARD NOUVEAUTE------------------------------->

<h2 class="text-white text-center m-4">Nos dernières nouveautés</h2>
<!---------------------------------------------------------------->

<!-- MODE MOBILE -->
<!-- Groupe 1 - Affiché sur mobile uniquement -->
<div id="book-carousel" class="carousel slide d-block d-md-none" data-bs-ride="carousel">
  <div class="carousel-inner">
    <!-- Carte 1 -->
    <div class="carousel-item active">
      <div class="book-card">
        <a href="link_to_book_A.html">
          <img src="images/pierreBrandao/leCoeurAsesSaisons.png" class="img-fluid" alt="Livre A">
          <div class="book-card-content">
            <div class="book-card-title">L'écho des collines</div>
            <div class="book-card-author">Alice Dubois</div>
            <div class="book-card-description">Une histoire captivante au cœur des montagnes.</div>
            <div class="book-card-price">16,99 €</div>
          </div>
        </a>
      </div>
    </div>

    <!-- Carte 2 -->
    <div class="carousel-item">
      <div class="book-card">
        <a href="link_to_book_B.html">
          <img src="images/pierreBrandao/luciolesMagiques.png" class="img-fluid" alt="Livre B">
          <div class="book-card-content">
            <div class="book-card-title">Les murmures du temps</div>
            <div class="book-card-author">Bertrand Martin</div>
            <div class="book-card-description">Un voyage à travers les époques et les secrets.</div>
            <div class="book-card-price">18,99 €</div>
          </div>
        </a>
      </div>
    </div>

    <!-- Carte 3 -->
    <div class="carousel-item">
      <div class="book-card">
        <a href="link_to_book_F.html">
          <img src="images/pierreBrandao/luciolesMagiques.png" class="img-fluid" alt="Livre F">
          <div class="book-card-content">
            <div class="book-card-title">La lumière des ombres</div>
            <div class="book-card-author">Fabien Leclerc</div>
            <div class="book-card-description">Un thriller captivant à couper le souffle.</div>
            <div class="book-card-price">17,99 €</div>
          </div>
        </a>
      </div>
    </div>

    <!-- Carte 4 -->
    <div class="carousel-item">
      <div class="book-card">
        <a href="link_to_book_G.html">
          <img src="images/pierreBrandao/luciolesMagiques.png" class="img-fluid" alt="Livre G">
          <div class="book-card-content">
            <div class="book-card-title">Les vagues éternelles</div>
            <div class="book-card-author">Gabrielle Blanc</div>
            <div class="book-card-description">Un récit émouvant au bord de l'océan.</div>
            <div class="book-card-price">13,99 €</div>
          </div>
        </a>
      </div>
    </div>

    <!-- Carte 5 -->
    <div class="carousel-item">
      <div class="book-card">
        <a href="link_to_book_D.html">
          <img src="images/pierreBrandao/luciolesMagiques.png" class="img-fluid" alt="Livre D">
          <div class="book-card-content">
            <div class="book-card-title">Sous les cyprès</div>
            <div class="book-card-author">Diane Morel</div>
            <div class="book-card-description">Un roman poétique entre amour et nature.</div>
            <div class="book-card-price">14,99 €</div>
          </div>
        </a>
      </div>
    </div>

    <!-- Carte 6 -->
    <div class="carousel-item">
      <div class="book-card">
        <a href="link_to_book_H.html">
          <img src="images/pierreBrandao/leCoeurAsesSaisons.png" class="img-fluid" alt="Livre H">
          <div class="book-card-content">
            <div class="book-card-title">Le chant des cendres</div>
            <div class="book-card-author">Henri Dupont</div>
            <div class="book-card-description">Une épopée historique riche en émotions.</div>
            <div class="book-card-price">14,99 €</div>
          </div>
        </a>
      </div>
    </div>
  </div>

  <!-- Contrôles de navigation -->
  <button class="carousel-control-prev" type="button" data-bs-target="#book-carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Précédent</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#book-carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Suivant</span>
  </button>
</div>



<!------------------------------------------------------------------------------>


<!-- MODE DESKTOP -->
<div class="container-fluid d-none d-lg-block">
    <div class="row mb-4" id="group1">
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
                <a href="link_to_book_A.html" class="text-decoration-none text-dark">
                    <img src="images/pierreBrandao/leCoeurAsesSaisons.png" class="card-img-top img-fluid" alt="Livre A">
                    <div class="card-body">
                        <h5 class="card-title">L'écho des collines</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Alice Dubois</h6>
                        <p class="card-text">Une histoire captivante au cœur des montagnes.</p>
                        <div class="fw-bold text-success">16,99 €</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
                <a href="link_to_book_B.html" class="text-decoration-none text-dark">
                    <img src="images/pierreBrandao/luciolesMagiques.png" class="card-img-top img-fluid" alt="Livre B">
                    <div class="card-body">
                        <h5 class="card-title">Les murmures du temps</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Bertrand Martin</h6>
                        <p class="card-text">Un voyage à travers les époques et les secrets.</p>
                        <div class="fw-bold text-success">18,99 €</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
                <a href="link_to_book_D.html" class="text-decoration-none text-dark">
                    <img src="images/pierreBrandao/luciolesMagiques.png" class="card-img-top img-fluid" alt="Livre D">
                    <div class="card-body">
                        <h5 class="card-title">Sous les cyprès</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Diane Morel</h6>
                        <p class="card-text">Un roman poétique entre amour et nature.</p>
                        <div class="fw-bold text-success">14,99 €</div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="row mb-4 d-none" id="group2">
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
                <a href="link_to_book_F.html" class="text-decoration-none text-dark">
                    <img src="images/pierreBrandao/luciolesMagiques.png" class="card-img-top img-fluid" alt="Livre F">
                    <div class="card-body">
                        <h5 class="card-title">La lumière des ombres</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Fabien Leclerc</h6>
                        <p class="card-text">Un thriller captivant à couper le souffle.</p>
                        <div class="fw-bold text-success">17,99 €</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
                <a href="link_to_book_G.html" class="text-decoration-none text-dark">
                    <img src="images/pierreBrandao/luciolesMagiques.png" class="card-img-top img-fluid" alt="Livre G">
                    <div class="card-body">
                        <h5 class="card-title">Les vagues éternelles</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Gabrielle Blanc</h6>
                        <p class="card-text">Un récit émouvant au bord de l'océan.</p>
                        <div class="fw-bold text-success">13,99 €</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
                <a href="link_to_book_H.html" class="text-decoration-none text-dark">
                    <img src="images/pierreBrandao/leCoeurAsesSaisons.png" class="card-img-top img-fluid" alt="Livre H">
                    <div class="card-body">
                        <h5 class="card-title">Le chant des cendres</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Henri Dupont</h6>
                        <p class="card-text">Une épopée historique riche en émotions.</p>
                        <div class="fw-bold text-success">14,99 €</div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between">
        <button id="backButton" class="btn btn-secondary" disabled>Précédent</button>
        <button id="nextButton" class="btn btn-primary">Suivant</button>
    </div>
</div>