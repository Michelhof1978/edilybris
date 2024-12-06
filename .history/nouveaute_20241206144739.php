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

/*CARD L*/
.L-card-container {
  display: flex;
  flex-wrap: nowrap;  /* Les cartes seront sur la même ligne */
  justify-content: space-between;  /* Équilibrer les espaces entre les cartes */
  gap: 20px;  /* Espace entre les cartes */
  width: 100%;
  transition: opacity 0.3s ease;
}

.L-card {
  background-color: #1E3A5F;
  padding: 20px;
  margin: 0;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(249, 248, 248, 0.1);
  width: 230px;  /* Ajustez cette largeur si nécessaire pour plus de cohérence */
  text-align: center;
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.L-card img {
  width: 100%;
  height: auto;
  border-radius: 5px;
  margin-bottom: 15px;
}

.L-card-content {
  text-align: center; /* Centrer tout le texte */
}

.L-card-title,
.L-card-author,
.L-card-description,
.L-card-price {
  color: white; /* Texte en blanc */
}

.L-card-title {
  font-size: 18px;
  margin: 10px 0;
  font-weight: bold;
}

.L-card-author {
  font-size: 14px;
  color: #ffcc00;
  font-weight: bold;
}

.L-card-description {
  font-size: 14px;
  color: #bbb;
}

.L-card-price {
  font-size: 18px;
  color: #ffcc00;
  margin-top: 10px;
  font-weight: bold; /* Texte en gras */
}

.L-card:hover {
  transform: scale(1.1);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

.L-hidden {
  display: none;
}

.L-navigation {
  text-align: center;
  margin-top: 20px;
}

.L-button {
  background-color: #ffcc00;
  border: none;
  padding: 10px 20px;
  margin: 0 10px;
  cursor: pointer;
  font-size: 16px;
  border-radius: 5px;
}

.L-button:disabled {
  background-color: #ddd;
  cursor: not-allowed;
}

/* Désactiver la sélection de texte sur les cartes */
.L-card, .L-card * {
  user-select: none;  /* Désactive la sélection de texte */
  -webkit-user-select: none; /* Pour Safari */
  -moz-user-select: none; /* Pour Firefox */
}

/* Enlever les effets de surlignage sur les liens (s'il y en a) */
.L-card a {
  text-decoration: none;  /* Supprimer le soulignement des liens */
  color: inherit;  /* Hériter de la couleur du texte */
}

/* FIN CARDS L*/


<!------------------------------------------------------------------------------>


<!-- MODE DESKTOP-->
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
    
</div>


<!-- Boutons de navigation -->
<div class="L-navigation">
    <button id="L-backButton" class="L-button text-white" disabled>Précédent</button>
    <button id="L-nextGroupButton" class="L-button text-white">Suivant</button>
</div>

