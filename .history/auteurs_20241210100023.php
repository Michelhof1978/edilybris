<?php include("head.php"); ?>

<title></title>
 <meta name="description" content="">
</head>

 <?php include("header.php"); ?>
 
 <h1 class="text-white text-center m-5">Soutien et promotion des auteurs littéraires</h1>
 
<?php include("nouveaute.php"); ?>

<!-- TEXTE AUTEURS-->
 <div class="container  mt-5">
  <div class="row justify-content-center ">
    <div class="col-12 col-md-10">
      <div class="text-center py-5 rounded-4 p-2 fond-text">
      <h3 class="mb-4 fs-2 fw-bold">Pourquoi acheter nos livres ?</h3>
    
        <!-- <img class="" src="images/livreAuteurs3.png" alt="Image centrée"> -->
    
      <div class="text-center">
        <img class="img-fluid w-25" src="images/livreAuteurs2.png" alt="Image centrée">
    </div>
      <h3 class="mb-4">Soutenir la création littéraire</h3>
        <p class="lead mb-4">
  Chaque livre acheté permet de soutenir les auteurs dans la réalisation de leurs projets futurs. Votre achat les aide à continuer d’écrire et à partager leur vision du monde.        </p>

        <h3 class="mt-4 mb-3">Découvrir des talents émergents</h3>
        <p class="lead mb-4">
        Notre association regroupe des auteurs de tous horizons, de la fiction à la poésie, en passant par l’essai et la littérature jeunesse. Vous y trouverez des œuvres originales, diverses et parfois audacieuses, qui ne demandent qu’à être découvertes.        </p>

        <h3 class="mt-4 mb-3">Soutenir une cause importante </h3>
        <p class=" lead mb-4">
        En soutenant notre association, vous participez à l’essor de nouveaux talents et à l’émergence de voix littéraires qui, sans votre soutien, auraient peut-être du mal à se faire connaître.        </p>
      </div>
    </div>
  </div>
</div>
<!-- FIN TEXTE AUTEURS-->

 <h2 class="text-white text-center m-5">Plongez dans l’univers de nos auteurs, livre par livre</h2> 

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

<!-- MODE DESKTOP-->
<div class="d-none d-md-block">
  <!-- Groupe 1 -->
  <div class="book-card-container mb-5" id="book-group1">
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

  <!-- Groupe 2 -->
  <div class="book-card-container book-hidden" id="book-group2">
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

  <!-- Boutons de navigation -->
  <div class="book-navigation">
    <button id="book-backButton" class="book-button text-white" disabled>Précédent</button>
    <button id="book-nextGroupButton" class="book-button text-white">Suivant</button>
  </div>
</div>




 <!-- CARDS XL-->
<div id="new-group1" class="new-card-container">
  <div class="new-card">
    <a href="link_to_book_A.html">
      <img src="images/pierreBrandao/XLlamourafleurdame.png" class="img-fluid" alt="Livre A">
      <div class="new-card-content">
        <div class="new-card-title">L'écho des collines</div>
        <div class="new-card-author">Alice Dubois</div>
        <div class="new-card-description">Une histoire captivante au cœur des montagnes.</div>
        <div class="new-card-price">16,99 €</div>
      </div>
    </a>
  </div>
  <div class="new-card">
    <a href="link_to_book_B.html">
      <img src="images/pierreBrandao/XLlamuserie.png" class="img-fluid" alt="Livre B">
      <div class="new-card-content">
        <div class="new-card-title">Les murmures du temps</div>
        <div class="new-card-author">Bertrand Martin</div>
        <div class="new-card-description">Un voyage à travers les époques et les secrets.</div>
        <div class="new-card-price">18,99 €</div>
      </div>
    </a>
  </div>
  <div class="new-card">
    <a href="link_to_book_C.html">
      <img src="images/pierreBrandao/XLquesavonsnousdumonde.png" class="img-fluid" alt="Livre C">
      <div class="new-card-content">
        <div class="new-card-title">Le cercle des étoiles</div>
        <div class="new-card-author">Camille Laurent</div>
        <div class="new-card-description">Une aventure épique dans un univers fantastique.</div>
        <div class="new-card-price">12,99 €</div>
      </div>
    </a>
  </div>
  <div class="new-card">
    <a href="link_to_book_D.html">
      <img src="images/pierreBrandao/XLlamourafleurdame.png" class="img-fluid" alt="Livre D">
      <div class="new-card-content">
        <div class="new-card-title">Sous les cyprès</div>
        <div class="new-card-author">Diane Morel</div>
        <div class="new-card-description">Un roman poétique entre amour et nature.</div>
        <div class="new-card-price">14,99 €</div>
      </div>
    </a>
  </div>
  <div class="new-card">
    <a href="link_to_book_E.html">
      <img src="images/pierreBrandao/XLlamuserie.png" class="img-fluid" alt="Livre E">
      <div class="new-card-content">
        <div class="new-card-title">L'ombre du vent</div>
        <div class="new-card-author">Émile Rousseau</div>
        <div class="new-card-description">Une quête mystérieuse dans un monde envoûtant.</div>
        <div class="new-card-price">15,99 €</div>
      </div>
    </a>
  </div>
</div>

<!-- Groupe 2 -->
<div id="new-group2" class="new-card-container new-hidden">
  <div class="new-card">
    <a href="link_to_book_F.html">
      <img src="images/pierreBrandao/XLquesavonsnousdumonde.png" class="img-fluid" alt="Livre F">
      <div class="new-card-content">
        <div class="new-card-title">La lumière des ombres</div>
        <div class="new-card-author">Fabien Leclerc</div>
        <div class="new-card-description">Un thriller captivant à couper le souffle.</div>
        <div class="new-card-price">17,99 €</div>
      </div>
    </a>
  </div>
  <div class="new-card">
    <a href="link_to_book_G.html">
      <img src="images/pierreBrandao/XLlamourafleurdame.png" class="img-fluid" alt="Livre G">
      <div class="new-card-content">
        <div class="new-card-title">Les vagues éternelles</div>
        <div class="new-card-author">Gabrielle Blanc</div>
        <div class="new-card-description">Un récit émouvant au bord de l'océan.</div>
        <div class="new-card-price">13,99 €</div>
      </div>
    </a>
  </div>
  <div class="new-card">
    <a href="link_to_book_H.html">
      <img src="images/pierreBrandao/XLlamuserie.png" class="img-fluid" alt="Livre H">
      <div class="new-card-content">
        <div class="new-card-title">Le chant des cendres</div>
        <div class="new-card-author">Henri Dupont</div>
        <div class="new-card-description">Une épopée historique riche en émotions.</div>
        <div class="new-card-price">14,99 €</div>
      </div>
    </a>
  </div>
  <div class="new-card">
    <a href="link_to_book_I.html">
      <img src="images/pierreBrandao/XLquesavonsnousdumonde.png" class="img-fluid" alt="Livre I">
      <div class="new-card-content">
        <div class="new-card-title">La danse des esprits</div>
        <div class="new-card-author">Isabelle Fournier</div>
        <div class="new-card-description">Une intrigue captivante entre réel et imaginaire.</div>
        <div class="new-card-price">16,99 €</div>
      </div>
    </a>
  </div>
  <div class="new-card">
    <a href="link_to_book_J.html">
      <img src="images/pierreBrandao/XLlamuserie.png" class="img-fluid" alt="Livre J">
      <div class="new-card-content">
        <div class="new-card-title">L'esprit des forêts</div>
        <div class="new-card-author">Jean-Louis Perrin</div>
        <div class="new-card-description">Une immersion profonde dans la nature sauvage.</div>
        <div class="new-card-price">18,99 €</div>
      </div>
    </a>
  </div>
</div>


<!-- Boutons de navigation -->
<div class="new-navigation">
  <button id="new-backButton" class="new-button xl-button text-white" disabled>Précédent</button>
  <button id="new-nextGroupButton" class="new-button xl-button text-white">Suivant</button>
</div>

<!-- FIN CARDS XL-->

<?php include("souscription.php"); ?>

<h2 class="text-white text-center m-4">Nos Auteurs</h2> 

<!-- TROMBINOSCOPE -->
<div class="carousel-container">
  <!-- Carrousel -->
  <div class="carousel">
    <div class="box">
      <!-- Cartes de profils -->
      <a href="page_gilles_herve.html" class="profile-card director">
        <div class="imgBx">
          <img src="images/gillesHerve/gillesHerve.png" class="img-fluid" alt="Gilles Hervé">
        </div>
        <div class="details">
          <h2>Gilles Hervé</h2>
        </div>
      </a>

      <a href="page_abdel_francois.html" class="profile-card producer">
        <div class="imgBx">
          <img src="images/abdelFrançoisNadini/abdelFrançoisNadini.png" class="img-fluid" alt="Abdel François">
        </div>
        <div class="details">
          <h2>Abdel François</h2>
        </div>
      </a>

      <a href="page_abdel_francois.html" class="profile-card producer">
        <div class="imgBx">
          <img src="images/abdelFrançoisNadini/abdelFrançoisNadini.png" class="img-fluid" alt="Abdel François">
        </div>
        <div class="details">
          <h2>Abdel François</h2>
        </div>
      </a>

      <a href="page_abdel_francois.html" class="profile-card producer">
        <div class="imgBx">
          <img src="images/abdelFrançoisNadini/abdelFrançoisNadini.png" class="img-fluid" alt="Abdel François">
        </div>
        <div class="details">
          <h2>Abdel François</h2>
        </div>
      </a>

      <a href="page_gilles_herve.html" class="profile-card director">
        <div class="imgBx">
          <img src="images/gillesHerve/gillesHerve.png" class="img-fluid" alt="Gilles Hervé">
        </div>
        <div class="details">
          <h2>Gilles Hervé</h2>
        </div>
      </a>

      <a href="page_gilles_herve.html" class="profile-card director">
        <div class="imgBx">
          <img src="images/gillesHerve/gillesHerve.png" class="img-fluid" alt="Gilles Hervé">
        </div>
        <div class="details">
          <h2>Gilles Hervé</h2>
        </div>
      </a>

      <!-- Répétition de cartes (ajoutons 34 autres cartes) -->
      <a href="page_abdel_francois.html" class="profile-card producer">
        <div class="imgBx">
          <img src="images/abdelFrançoisNadini/abdelFrançoisNadini.png" class="img-fluid" alt="Abdel François">
        </div>
        <div class="details">
          <h2>Abdel François</h2>
        </div>
      </a>

      <a href="page_abdel_francois.html" class="profile-card producer">
        <div class="imgBx">
          <img src="images/abdelFrançoisNadini/abdelFrançoisNadini.png" class="img-fluid" alt="Abdel François">
        </div>
        <div class="details">
          <h2>Abdel François</h2>
        </div>
      </a>

      <a href="page_abdel_francois.html" class="profile-card producer">
        <div class="imgBx">
          <img src="images/abdelFrançoisNadini/abdelFrançoisNadini.png" class="img-fluid" alt="Abdel François">
        </div>
        <div class="details">
          <h2>Abdel François</h2>
        </div>
      </a>

      <a href="page_gilles_herve.html" class="profile-card director">
        <div class="imgBx">
          <img src="images/gillesHerve/gillesHerve.png" class="img-fluid" alt="Gilles Hervé">
        </div>
        <div class="details">
          <h2>Gilles Hervé</h2>
        </div>
      </a>

      <a href="page_gilles_herve.html" class="profile-card director">
        <div class="imgBx">
          <img src="images/gillesHerve/gillesHerve.png" class="img-fluid" alt="Gilles Hervé">
        </div>
        <div class="details">
          <h2>Gilles Hervé</h2>
        </div>
      </a>

      <a href="page_abdel_francois.html" class="profile-card producer">
        <div class="imgBx">
          <img src="images/abdelFrançoisNadini/abdelFrançoisNadini.png" class="img-fluid" alt="Abdel François">
        </div>
        <div class="details">
          <h2>Abdel François</h2>
        </div>
      </a>

      <a href="page_gilles_herve.html" class="profile-card director">
        <div class="imgBx">
          <img src="images/gillesHerve/gillesHerve.png" class="img-fluid" alt="Gilles Hervé">
        </div>
        <div class="details">
          <h2>Gilles Hervé</h2>
        </div>
      </a>

      <a href="page_abdel_francois.html" class="profile-card producer">
        <div class="imgBx">
          <img src="images/abdelFrançoisNadini/abdelFrançoisNadini.png" class="img-fluid" alt="Abdel François">
        </div>
        <div class="details">
          <h2>Abdel François</h2>
        </div>
      </a>

      <a href="page_abdel_francois.html" class="profile-card producer">
        <div class="imgBx">
          <img src="images/abdelFrançoisNadini/abdelFrançoisNadini.png" class="img-fluid" alt="Abdel François">
        </div>
        <div class="details">
          <h2>Abdel François</h2>
        </div>
      </a>

      <a href="page_gilles_herve.html" class="profile-card director">
        <div class="imgBx">
          <img src="images/gillesHerve/gillesHerve.png" class="img-fluid" alt="Gilles Hervé">
        </div>
        <div class="details">
          <h2>Gilles Hervé</h2>
        </div>
      </a>

      <a href="page_gilles_herve.html" class="profile-card director">
        <div class="imgBx">
          <img src="images/gillesHerve/gillesHerve.png" class="img-fluid" alt="Gilles Hervé">
        </div>
        <div class="details">
          <h2>Gilles Hervé</h2>
        </div>
      </a>

      <a href="page_abdel_francois.html" class="profile-card producer">
        <div class="imgBx">
          <img src="images/abdelFrançoisNadini/abdelFrançoisNadini.png" class="img-fluid" alt="Abdel François">
        </div>
        <div class="details">
          <h2>Abdel François</h2>
        </div>
      </a>

      <a href="page_abdel_francois.html" class="profile-card producer">
        <div class="imgBx">
          <img src="images/abdelFrançoisNadini/abdelFrançoisNadini.png" class="img-fluid" alt="Abdel François">
        </div>
        <div class="details">
          <h2>Abdel François</h2>
        </div>
      </a>

      <a href="page_abdel_francois.html" class="profile-card producer">
        <div class="imgBx">
          <img src="images/abdelFrançoisNadini/abdelFrançoisNadini.png" class="img-fluid" alt="Abdel François">
        </div>
        <div class="details">
          <h2>Abdel François</h2>
        </div>
      </a>

      <a href="page_gilles_herve.html" class="profile-card director">
        <div class="imgBx">
          <img src="images/gillesHerve/gillesHerve.png" class="img-fluid" alt="Gilles Hervé">
        </div>
        <div class="details">
          <h2>Gilles Hervé</h2>
        </div>
      </a>

      <a href="page_gilles_herve.html" class="profile-card director">
        <div class="imgBx">
          <img src="images/gillesHerve/gillesHerve.png" class="img-fluid" alt="Gilles Hervé">
        </div>
        <div class="details">
          <h2>Gilles Hervé</h2>
        </div>
      </a>

    </div>
  </div>

 <!-- Boutons de navigation du trombinoscope -->
<div class="carousel-navigation">
  <button id="prevBtn" class="carousel-btn text-white">Précédent</button>
  <button id="nextBtn" class="carousel-btn text-white">Suivant</button>
</div>


<!-- Fin TROMBINOSCOPE -->




 <?php include("footer.php"); ?>



 </body>

 </html>