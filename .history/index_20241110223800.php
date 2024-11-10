<?php include("head.php"); ?>

 <title></title>
 <meta name="description" content="">
 <meta property="og:url" content="https://www.edilybris.fr/">
 <!-- Canonical Link -->
 <link rel="canonical" href="https://www.edilybris.fr/">

 <style>
    
     footer {
         margin-left: -8px;
         margin-right: -7px;
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

 </style>

 </head>
 <?php include("footer.php"); ?>
 

 <?php include("footer.php"); ?>

 </body>

 </html>