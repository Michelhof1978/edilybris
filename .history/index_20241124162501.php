<?php include("head.php"); ?>

 <title></title>
 <meta name="description" content="">
 
 <!-- Canonical Link -->
 

 <style>
  

 </style>

 </head>
 <?php include("header.php"); ?>
 
 <h1 class="text-white text-center m-4">Bienvenue sur le site d'Eli'dybris</h1>
  
 <?php include("nouveaute.php"); ?>

  <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-12 col-md-10">
      <div class="text-center py-5 rounded-4 p-2 fond-text">
        <h3 class="mb-4">Bienvenue sur le site de notre association</h3>
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

h1 Css3 Transform
// Rotate
.card
  .box.rotate
    .fill
  p rotate(45deg)  
.card
  .box.rotateX
    .fill
  p rotateX(45deg)
.card
  .box.rotateY
    .fill
  p rotateY(45deg)
.card
  .box.rotateZ
    .fill
  p rotateZ(45deg)  
// scale
.card
  .box.scale
    .fill
  p scale(2)
.card
  .box.scaleX
    .fill
  p scaleX(2)    
.card
  .box.scaleY
    .fill
  p scaleY(2)    
// skew
.card
  .box.skew
    .fill
  p skew(45deg, 45deg)  
.card
  .box.skewX
    .fill
  p skewX(45deg)
.card
  .box.skewY
    .fill
  p skewY(45deg)
// translate
.card
  .box.translate
    .fill
  p translate(45px)  
.card
  .box.translateX
    .fill
  p translateX(45px)
.card
  .box.translateY
    .fill
  p translateY(45px)
.card
  .box.matrix
    .fill
  p  matrix(2, 2, 0, 2, 45, 0)
h4 Perspective : 100
.perspective-100
  .card
    .box.rotateX
      .fill
    p rotateX(90deg)
  .card
    .box.rotateY
      .fill
    p rotateY(45deg)
h4 Perspective : 200
.perspective-200
  .card
    .box.rotateX
      .fill
    p rotateX(90deg)
  .card
    .box.rotateY
      .fill
    p rotateY(45deg)
// transform origin
h2 Transform origin
.card
  .box.rotate
    .fill.to-100-0-0
  p
    | transform-origin : 100% 0 0  
    br
    | rotate(45deg)
.card
  .box.rotate
    .fill.to-0-100-0
  p
    | transform-origin : 0 100%  0
    br
    | rotate(45deg)
.card.perspective-200
  .box.rotateX
    .fill.to-0-100-0
  p
    | transform-origin : 0 100%  0
    br
    | rotateX(45deg)
.card.perspective-200
  .box.rotateX
    .fill.to-100-0-0
  p
    | transform-origin : 0 100%  0
    br
    | rotateX(45deg)
.card.perspective-200
  .box.rotateY
    .fill.to-0-100-0
  p
    | transform-origin : 0 100%  0 
    br
    | rotateY(45deg)
.card.perspective-200
  .box.rotateY
    .fill.to-100-0-0
  p
    | transform-origin : 100%  0 0
    br
    | rotateY(45deg)
.card
  .box.scale
    .fill.to-100-0-0
  p
    | transform-origin : 100%  0 0
    br
    | scale(2)
.card
  .box.scale
    .fill.to-0-100-0
  p
    | transform-origin : 0 100%  0
    br
    | scale(2)
.card
  .box.scaleX
    .fill.to-100-0-0
  p
    | transform-origin : 100%  0 0
    br
    | scaleX(2)
.card
  .box.scaleX
    .fill.to-0-100-0
  p
    | transform-origin : 0 100%  0
    br
    | scaleX(2)
.card
  .box.scaleY
    .fill.to-100-0-0
  p
    | transform-origin : 100%  0 0
    br
    | scaleY(2)
.card
  .box.scaleY
    .fill.to-0-100-0
  p
    | transform-origin : 0 100%  0
    br
    | scaleY(2)

<?php include("promotions.php"); ?>
 <?php include("footer.php"); ?>

 </body>

 </html>