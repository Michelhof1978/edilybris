<?php include("head.php"); ?>

 <title></title>
 <meta name="description" content="">
 <meta property="og:url" content="https://www.edilybris.fr/">
 <!-- Canonical Link -->
 <link rel="canonical" href="https://www.edilybris.fr/accueil">

 <style>
  .container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 15px;
  padding: 20px;
}

.card {
  background-color: #222;
  width: 200px;
  border-radius: 10px;
  overflow: hidden;
  transition: transform 0.3s;
}

.card:hover {
  transform: scale(1.05);
}

.card img {
  width: 100%;
  height: auto;
}

.card-info {
  padding: 10px;
  text-align: center;
}

.card-info h2 {
  font-size: 18px;
  margin-bottom: 10px;
}

.card-info p {
  font-size: 14px;
  color: #b3b3b3;
}

     /* Animation clignotante tarif promo*/
     .custom-animation {
         animation: infiniteBlink 2s infinite;
         /* 2s est la durée de l'animation, et "infinite" indique une répétition infinie */
     }

     @keyframes infiniteBlink {

         0%,
         100% {
             opacity: 1;
         }

         50% {
             opacity: 0;
         }
     }

     /* Fin Animation clignotante tarif */

 </style>

 </head>
 <?php include("header.php"); ?>
 
 <h1 class="text-white text-center m-4">Bienvenue sur le site d'Eli'dybris</h1>

 <div>
 <h2 class="text-white text-center m-4">Nos dernières nouveautés</h2>
  
  <div class="container">
    <!-- carte 1 -->
<a href="page-details-1.html" class="card-link">
  <div class="card">
    <img src="images/pierreBrandao/luciolesMagiques.png" alt="">
    <div class="card-info">
      <h2 class="text-white">LUCIOLES MAGIQUES</h2>
      <p>Pierre Brandao</p>
      <p class="text-success fw-bold">28,00 €</p>
      <p>LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.</p>
    </div>
  </div>
</a>

<!-- carte 2 -->
<a href="page-details-2.html" class="card-link">
  <div class="card">
    <img src="images/pierreBrandao/luciolesMagiques.png" alt="">
    <div class="card-info">
      <h2 class="text-white">LUCIOLES MAGIQUES</h2>
      <p>Pierre Brandao</p>
      <p class="text-success fw-bold">28,00 €</p>
      <p>LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.</p>
    </div>
  </div>
</a>

<!-- carte 3 -->
<a href="page-details-3.html" class="card-link">
  <div class="card">
    <img src="images/pierreBrandao/luciolesMagiques.png" alt="">
    <div class="card-info">
      <h2 class="text-white">LUCIOLES MAGIQUES</h2>
      <p>Pierre Brandao</p>
      <p class="text-success fw-bold">28,00 €</p>
      <p>LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.</p>
    </div>
  </div>
</a>

<!-- carte 4 -->
<a href="page-details-4.html" class="card-link">
  <div class="card">
    <img src="images/pierreBrandao/luciolesMagiques.png" alt="">
    <div class="card-info">
      <h2 class="text-white">LUCIOLES MAGIQUES</h2>
      <p>Pierre Brandao</p>
      <p class="text-success fw-bold">28,00 €</p>
      <p>LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.</p>
    </div>
  </div>
</a>
</div>
  </div>

  <div class="container">
  <div class="row justify-content-center">
    <div class="col-12 col-md-10">
      <div class="text-light text-center py-5 rounded-4 p-2" style="background-color: #343a40;">
        <h2 class="mb-4">Bienvenue sur le site de notre association</h2>
        <p class="lead mb-4">
          Notre association a pour mission de promouvoir la lecture, le partage de connaissances et la découverte d'auteurs talentueux à travers la vente de livres soigneusement sélectionnés. Que vous soyez passionné de littérature, amateur de récits inspirants ou en quête de nouvelles découvertes, vous trouverez chez nous une offre variée de livres issus de plumes diversifiées.
        </p>

        <h3 class="mt-4 mb-3">Des auteurs pour tous les goûts</h3>
        <p class="mb-4">
          Nous avons rassemblé des ouvrages d'auteurs émergents et confirmés, dans une multitude de genres : romans, essais, poésies, récits de voyage, ouvrages jeunesse et bien plus encore. Chaque livre est une invitation à explorer des univers uniques et à échanger des idées.
        </p>

        <h3 class="mt-4 mb-3">Notre engagement</h3>
        <p class="mb-4">
          Au-delà de la simple vente, notre association se veut un lieu de rencontre pour les amoureux du livre et de la culture. En achetant chez nous, vous soutenez non seulement des auteurs, mais également une démarche collective dédiée à la valorisation de la littérature sous toutes ses formes.
        </p>

        <h3 class="mt-4 mb-3">Faites partie de l’aventure !</h3>
        <p>
          Nous vous invitons à explorer notre catalogue en ligne, à découvrir de nouveaux auteurs et à rejoindre notre communauté de lecteurs. Ensemble, partageons notre passion pour les livres et soutenons la création littéraire.
        </p>
      </div>
    </div>
  </div>
</div>

<div>
 <h2 class="text-white text-center m-4">Nos promotions</h2>
  
  <div class="container">
    <!-- carte 1 -->
<a href="page-details-1.html" class="card-link">
  <div class="card">
    <img src="images/pierreBrandao/luciolesMagiques.png" alt="">
    <div class="card-info">
      <h2 class="text-white">LUCIOLES MAGIQUES</h2>
      <p>Pierre Brandao</p>
      <p class="text-success fw-bold custom-animation">28,00 €</p>
      <p>LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.</p>
    </div>
  </div>
</a>

<!-- carte 2 -->
<a href="page-details-2.html" class="card-link">
  <div class="card">
    <img src="images/pierreBrandao/luciolesMagiques.png" alt="">
    <div class="card-info">
      <h2 class="text-white">LUCIOLES MAGIQUES</h2>
      <p>Pierre Brandao</p>
      <p class="text-success fw-bold custom-animation">28,00 €</p>
      <p>LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.</p>
    </div>
  </div>
</a>

<!-- carte 3 -->
<a href="page-details-3.html" class="card-link">
  <div class="card">
    <img src="images/pierreBrandao/luciolesMagiques.png" alt="">
    <div class="card-info">
      <h2 class="text-white">LUCIOLES MAGIQUES</h2>
      <p>Pierre Brandao</p>
      <p class="text-success fw-bold custom-animation">28,00 €</p>
      <p>LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.</p>
    </div>
  </div>
</a>

<!-- carte 4 -->
<a href="page-details-4.html" class="card-link">
  <div class="card">
    <img src="images/pierreBrandao/luciolesMagiques.png" alt="">
    <div class="card-info">
      <h2 class="text-white">LUCIOLES MAGIQUES</h2>
      <p>Pierre Brandao</p>
      <p class="text-success fw-bold custom-animation">28,00 €</p>
      <p>LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.</p>
    </div>
  </div>
</a>
</div>
  </div>

  
 <?php include("footer.php"); ?>

 </body>

 </html>