<?php include("head.php"); ?>

 <title>Agence Web, Création Site Internet... à Decize dans la Nièvre</title>
 <meta name="description" content="Création de sites web professionnels et sur mesure. Un partenaire de confiance pour un site unique qui reflète parfaitement votre image de marque.">


 <meta property="og:url" content="https://harmony-digital.fr/accueil">
 <!-- Canonical Link -->
 <link rel="canonical" href="https://harmony-digital.fr/accueil">

 <style>
    
     footer {
         margin-left: -8px;
         margin-right: -7px;
     }

    

     /* Robot droite compétence */
     .small-robot {
         position: absolute;
         right: 0;
         top: 0;
         height: 200px;
         object-fit: contain;
         margin-right: -50px;
         margin-top: 1000px;
     }

     /* Médias Queries pour les écrans plus petits */
     @media (max-width: 768px) {
         #countdown {
             font-size: 1.5em;
             /* Réduit la taille de la police sur les écrans plus petits */
         }

         #countdown .time-part {
             width: 1.5em;
             /* Réduit la largeur des parties du temps */
         }
     }

     @media (max-width: 480px) {
         #countdown {
             font-size: 1.2em;
             /* Réduit encore la taille de la police pour les très petits écrans */
         }

         #countdown .time-part {
             width: 1.8em;
             /* Réduit encore la largeur des parties du temps */
         }
     }

     .competence {
         background-image: url('images/fondBleu.webp');
     }

     /* Style par défaut pour les écrans plus grands */
     .competence p {
         font-size: 1.25rem;
         /* fs-4 correspond à 1.25rem */
     }

     /* Style pour les écrans de moins de 768px (mobile) */
     @media (max-width: 767.98px) {
         .competence p {
             font-size: 1rem;
             /* Ajustez la taille du texte pour mobile */
         }
     }

     /* CARDS DESKTOP*/
     .card {
         transform: scale(0.7);
         transform-origin: center center;
         flex: 1 0 30%;
         box-sizing: border-box;
         margin: 0 -90px;
         background-image: url('images/fondBleu.webp');
         background-size: cover;
         background-position: center;
         background-repeat: no-repeat;
     }

     cardwidth {
         width: 18rem;
     }

     .carousel-inner .d-flex>.card:first-child,
     .carousel-inner .d-flex>.card:last-child {
         margin-left: 30px;
         margin-right: 30px;
     }

     .carousel-inner .d-flex {
         flex-wrap: wrap;
         justify-content: center;
         margin-bottom: 80px;
     }

     .carousel-container {
         position: relative;
         padding: 20px;
         margin-top: -70px;
     }

     .carousel-control-prev,
     .carousel-control-next {
         position: absolute;
         top: 50%;
         width: 40px;
         height: 40px;
         margin-top: -70px;
         background-color: #e06717e4;
         border-radius: 50%;
     }

     .carousel-control-prev {
         left: 0;
     }

     .carousel-control-next {
         right: 0;
     }

     /* Animation clignotante tarif */
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

     .pricecard {
         font-size: 25px !important;
         font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
         margin-top: -100px;
     }

     .info {
         font-size: 30px !important;
         font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
         border: 5px solid #e06717e4;
     }

     /* FIN CARDS DESKTOP*/

     .text-decoration-custom:hover .text-orange-nav2 {
         color: white;
         /* Change la couleur du texte en blanc au survol */
     }

     /* Domaine de compétence */
     .textIntro {
         margin-top: 40px;
         background-image: url('images/fondBleu.webp');
         background-size: cover;
         background-position: center;
         background-repeat: no-repeat;
     }

     .robotIndex {
         position: fixed;
         top: 50%;
         right: 0;
         transform: translateY(-50%);
         width: 20%;

     }

     .neon-yellow {
         color: rgba(255, 255, 51, 0.8);
         /* Code couleur pour un jaune néon plus clair et plus transparent */
         text-shadow: 0 0 5px rgba(255, 255, 51, 0.5),
             0 0 10px rgba(255, 255, 51, 0.5),
             0 0 20px rgba(255, 255, 51, 0.5);
         box-shadow: 0 0 10px rgba(255, 255, 51, 0.5),
             0 0 20px rgba(255, 255, 51, 0.3),
             0 0 30px rgba(255, 255, 51, 0.2);
         border-radius: 10px;
         /* Légèrement arrondir les bords */
         padding: 10px;
         display: inline-block;
         /* Nécessaire pour que le box-shadow soit visible */
     }


     .neon-section {
         border-radius: 5px;
     }

     .robotDomaine {
         max-width: 50%;
         height: 150px;
         /* Conserve le ratio de l'image */
         display: block;
         margin: 0 auto;
         /* Centre l'image */
         margin-top: 20px;
     }

     .robotSeparateur {
         max-width: 50%;
         height: 100px;
         /* Conserve le ratio de l'image */
         display: block;
         margin: 0 auto;
         /* Centre l'image */


     }

     .h2competence {
         margin-top: -70px;
     }

     /* Fin domaine de compétence*/

     /*Intro*/
     .offre {
         margin-left: 100px;
     }

     .intro {
         margin-right: 60px;
         margin-top: 30px;
         background-image: url('images/fondBleu.webp');
         background-size: cover;
         background-position: center;
         background-repeat: no-repeat;
         border-radius: 5px;

     }

     /*Fin Intro*/
     /*Intro2*/
     .robotDomaine2 {
         max-width: 25%;
         height: auto;
         /* Conserve le ratio de l'image */
         position: absolute;
         /* Positionnement absolu */
         left: 0;
         /* Aligne l'image complètement à gauche */
         top: 40px;
         /* Décale l'image vers le bas depuis le haut du conteneur */
         margin-top: 300px;
     }

     .intro2 {
         margin-left: 30%;
         padding-left: 20px;
     }

     /*fin Intro2*/
     /*Section VIDEOCOM*/
     .text-orange-video {
         color: #e06717e4;
         font-size: 25px;
         font-weight: 700;
     }

     .videoCom {
         padding: 15px;
         border: 1px solid #ddd;
         background: #FFF;
         background: linear-gradient(#FFF, #FFF 20%, #EEE 80%, #DDD);
         border-radius: 2px;
         box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
         margin-bottom: 20px;
     }

     .embed-responsive iframe {
         width: 100%;
         height: 315px;
         border: none;
     }

     @media (max-width: 767px) {
         .row>div:first-child {
             margin-bottom: 20px;
         }
     }

     /*Fin Section VIDEOCOM*/

     /* Effet survol logo */
     .imgcard2 {
         transition: transform 0.5s ease;
     }

     /* Animation lors du survol */
     .imgcard2:hover {
         transform: rotateY(360deg);
     }

     .card2 {
         transform: scale(0.7);
         transform-origin: center center;
         flex: 1 0 30%;
         box-sizing: border-box;
         margin: 0 -90px;
         background-image: url('images/fondNoir2.webp');
         background-size: cover;
         background-position: center;
         background-repeat: no-repeat;
     }


     .img-small {
         max-width: 50px;
         height: auto;
         /* Maintient les proportions de l'image */
     }


     /* Video robot ordi*/
     .video-container {
         width: 100%;
         max-width: 100%;
         padding: 0 15px;
     }

     .video-container video {
         width: 100%;
         height: auto;
     }

     @media (min-width: 768px) {
         .fs-md-2 {
             font-size: 2rem !important;
         }

         .video-container {
             width: 50%;
             max-width: 800px;
         }
     }

     /* VIDEO CLIC CARAVANE */
     .video-container-caravane {
         display: inline-block;
         cursor: pointer;
         position: relative;
     }

     .video-caravane {
         max-width: 100%;
         height: auto;
     }

     /* Style pour les vidéos en mode mobile */
     @media (max-width: 767.98px) {
         .video-container-caravane {
             max-width: 100%;
             margin: auto;
         }
     }

     /* FIN VIDEO CLIC CARAVANE */

     .gif6mobile {
         margin-bottom: -50px;
     }

     .gif3mobile1 {
         margin-bottom: -43px;
     }

     .gif3mobile2 {
         margin-bottom: -43px;
         margin-left: 150px;
     }

     .robotvideo {
         margin-top: -50px;
     }

     .robotvideo2 {
         min-height: 50vh;
     }

     .robotvideo3 {
         margin-top: -50px;
     }

     .robotvideo4 {
         min-height: 50vh;
     }

     .robotvideo5 {
         max-width: 50%;
         margin: auto;
     }

     .robotvideo6 {
         min-height: 50vh;
         margin-top: -100px;
         margin-top: -10px;
     }

     .robotvideo7 {
         width: 100%;
     }

     .logo {
         margin-bottom: -80px;
     }

     .robotvideo8 {
         min-height: 50vh;
     }

     .robotvideo9 {
         margin-top: -70px;
         margin-bottom: -20px;
     }

     .robotvideo10 {
         max-width: 50%;
         margin: auto;
     }

     .robotvideo11 {
         min-height: 50vh;
     }

     .robotvideo12 {
         max-width: 100%;
         margin: auto;
     }

     .margin-bottom {
         margin-bottom: -120px;
     }
 </style>

 </head>

 

 <?php include("footer.php"); ?>

 </body>

 </html>