<!-- Mode mobile -->
<div class=" videoCommandeMobile d-flex justify-content-center align-items-center vh-100 d-block d-md-none ">
    <!-- Conteneur vidéo sans marges excessives -->
    <div class="position-relative w-100 h-100" style="max-width: 800px;">
        <video id="myVideo" autoplay muted class="w-100 h-100 rounded-3 object-fit-cover">
            <source src="videos/commande.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la vidéo.
        </video>
    </div>
</div>


<!-- Mode desktop -->
<div class="d-flex justify-content-center align-items-center vh-100 ">
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
          <img src="images/joelBerthelot/couverture-avec-titre-jtedte.webp" class="img-fluid" alt="Livre A">
          <div class="book-card-content">
            <div class="book-card-title">J'ai tellement envie de t'écrire</div>
            <div class="book-card-author">Berthelot Joël</div>
            <div class="book-card-price">20,00 €</div>
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


<!-- MODE DESKTOP-->
<div class="d-none d-md-block">
<!-- Groupe 1 -->
<div class="L-card-container mb-5" id="L-group1">
    <div class="L-card">
        <a href="link_to_book_A.html">
            <img src="images/pierreBrandao/leCoeurAsesSaisons.png" class="img-fluid" alt="Livre A">
            <div class="L-card-content">
                <div class="L-card-title">J'ai tellement envie de t'écrire</div>
                <div class="L-card-author">Alice Dubois</div>
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
                <div class="L-card-price">14,99 €</div>
            </div>
        </a>
    </div>
    </div>
<!-- Boutons de navigation -->
<div class="L-navigation">
    <button id="L-backButton" class="L-button text-white" disabled>Précédent</button>
    <button id="L-nextGroupButton" class="L-button text-white">Suivant</button>
</div>
</div>



