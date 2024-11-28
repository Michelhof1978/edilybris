<?php include("head.php"); ?>

 <title></title>
 <meta name="description" content="">
 </head>

 <?php include("header.php"); ?>
 
 <h1 class="text-white text-center m-4">Association d'Edi'lybris <br></h1>

 <div class="text-center">
        <img class="w-25" src="images/livreIndex.png" alt="Image centrée">
    </div>
  
  <!-- PRESENTATION AUTEURS -->
 <section class="home m-5">
      <div class="description">
        <h2 class="title">
          <span class="gradient-text">ASSOCIATION</span><br><span class="colorLogoIndex">Edi'Lybris</span> 
        </h2>
        <p class="paragraph">
        Une communauté d'auteurs passionnés unis par l'amour des mots et l'envie de partager leurs créations littéraires avec le monde.<br><br>

Notre association rassemble écrivains confirmés et nouveaux talents pour promouvoir la richesse et la diversité de la littérature contemporaine.<br>

        </p>
        <!-- <form id="form" autocomplete="off">
          <input
            type="email"
            id="email-id"
            name="email_address"
            aria-label="email adress"
            placeholder=""
            required
            oninput="checkEmpty()" />
          <button type="submit" class="btn" aria-label="submit">
            <span>Subscribe</span>
            <ion-icon name="arrow-forward-outline"></ion-icon>
          </button>
        </form> -->
      </div>

      <div class="users-color-container">
        <span class="item" style="--i: 1"></span>
        <img
          class="item imgAuteurIndex"
          src="images/annieBrunetot/annieBrunetot.jpg"
          style="--i: 2"
          alt="" />
        <span class="item" style="--i: 3"></span>
        <img
          class="item imgAuteurIndex"
          src="images/pierreBrandao/pierreBrandao.png"
          style="--i: 4"
          alt="" />

        <img
          class="item imgAuteurIndex"
          src="images/gillesHerve/gillesHerve.png"
          style="--i: 10"
          alt="" /> 
        <span class="item" style="--i: 11"></span>
        <img class="item imgAuteurIndex" src="images/patriciaScharff/patriciaScharff.png" style="--i: 12" alt="" />
        <span class="item" style="--i: 5"></span>

        <span class="item" style="--i: 9"></span>
        <img class="item imgAuteurIndex" src="images/abdelFrançoisNadini/abdelFrançoisNadini.png" style="--i: 8" alt="" />
        <span class="item" style="--i: 7"></span>
        <img class="item imgAuteurIndex" src="images/christinekunz/christinekunz.png" style="--i: 6" alt="" />
      </div>
    </section>

    
<!--FIN  PRESENTATION AUTEURS -->

 <?php include("nouveaute.php"); ?>

  .fond-text {
  background-color: #1E3A5F !important;
  color: white;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Ajuster l'image à droite du texte */
.image-container {
  position: relative;
  margin-left: auto;  /* Permet de coller l'image au bord droit */
  width: 100%;        /* Assure que l'image utilise toute la largeur disponible dans la colonne */
}

.image-container img {
  position: absolute;  /* Positionnement absolu par rapport à la colonne */
  right: 0;            /* Collée au bord droit de l'écran */
  top: 0;              /* Collée en haut de la fenêtre */
  width: 100%;         /* Assurez-vous que l'image soit responsive */
  height: 100vh;       /* Hauteur de l'image égale à la hauteur de la fenêtre */
  object-fit: cover;   /* L'image couvre toute la zone sans déformation */
  z-index: -1;         /* Assurez-vous que l'image reste derrière le texte */
}

 
<?php include("promotions.php"); ?>
 <?php include("footer.php"); ?>

 </body>

 </html>