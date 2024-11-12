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
 
 <h1 class="text-white">Nos dérnière</h1>
  
  <div class="container">
    <!-- carte 1 -->
    <div class="card">
    <img src="images/pierreBrandao/luciolesMagiques.png" alt="">
      <div class="card-info">
        <h2 class="text-white">LUCIOLES MAGIQUES </h2>
        <p>Pierre Brandao</p>
        <p class="text-success fw-bold">28,00 €</p>
      </div>
    </div>
    <div class="card">
      <img src="https://via.placeholder.com/200x300" alt="Film 2">
      <div class="card-info">
        <h2>Film 2</h2>
        <p>Petite description du film 2.</p>
      </div>
    </div>
    <div class="card">
      <img src="https://via.placeholder.com/200x300" alt="Film 2">
      <div class="card-info">
        <h2>Film 2</h2>
        <p>Petite description du film 2.</p>
      </div>
    </div>
    
  </div>

 <?php include("footer.php"); ?>

 </body>

 </html>