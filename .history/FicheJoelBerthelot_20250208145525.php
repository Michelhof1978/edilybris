<?php include("head.php"); ?>

<title></title>
 <meta name="description" content="">
 <style>
    /* Réduction des espaces globaux */
.biographie {
    padding: 20px 0; /* Ajustez la marge intérieure */
}

/* Ajustement du container principal */
.containerAuteur {
    margin-bottom: 10px; /* Réduction de l'espace sous le titre */
}

/* Suppression de la hauteur excessive sur l'iframe */
.bio-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px; /* Réduction de l'espace entre les éléments */
}

.bio-content iframe {
    max-width: 100%;
    height: auto;
}

/* Ajustement des marges pour les cartes (mobile & desktop) */
.mobile-books-container, .new-card-container {
    margin-top: 10px;
}

.mobile-book-card, .new-card {
    margin-bottom: 10px; /* Réduction de l'espace entre les cartes */
}

/* Suppression des <br> inutiles */
br {
    display: none;
}

/* Mode responsive */
@media (max-width: 768px) {
    .biographie {
        padding: 10px 0;
    }
    
    .bio-content {
        gap: 5px;
    }

    .mobile-books-container {
        margin-top: 5px;
    }

    .mobile-book-card {
        margin-bottom: 5px;
    }
}

 </style>
</head>

 <?php include("header.php"); ?>



 <div class="headerAuteur">
    <div class="containerAuteur">
        <h1>Joël BERTHELOT</h1>
        <img src="images/joelBerthelot/joelBerthelot.webp" alt="Portrait de Joël BERTHELOT" class="img-fluid bio-image">
    </div>
</div>

<main>
    <section class="biographie">
        <div class="containerAuteur">
            <h2 class="h2Jaune">Biographie</h2>

         <!-- Section image et texte -->
<div class="bio-content">
    <div class="bio-text">
    <div class="bio-content d-flex justify-content-center align-items-center" style="height: 100vh;">
    <iframe 
        width="560" 
        height="315" 
        src="https://www.youtube.com/embed/QluMEjVbHe0?si=Yfo3xdjWCcR9pkGn" 
        title="YouTube video player" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
        referrerpolicy="strict-origin-when-cross-origin" 
        allowfullscreen>
    </iframe>
</div>

    </div>
</div>

                </div>
            </div>

            <br>

            <!-- Carte après le texte -->

            <!-- MODE MOBILE -->
            <div class="d-block d-md-none">
                <!-- Groupe 1 - Joel berthelot- j'ai tellement envie de t'écrire-->
                <div id="mobile-group1PierreBrandao" class="mobile-books-container">
                    <div class="mobile-book-card">
                        <a href="fichePatriceBachereau.php">
                            <img src="images/joelBerthelot/couverture-avec-titre-jtedte.webp" class="img-fluid" alt="Couverture de  Le sillage de l'encre">
                            <div class="mobile-book-details">
                                <div class="mobile-book-author"> Joël berthelot</div>
                                <div class="mobile-book-price">20,00 €</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MODE DESKTOP -->
            <div class="d-none d-md-block">
                <div id="desktop-group1PierreBrandao" class="new-card-container">
                    <!-- Carte 1 - Le sillage de l'encre-->
                    <div class="new-card">
                        <a href="FicheJoelBerthelotJaiTellementEnvieDeTecrire.php">
                            <img src="images/joelBerthelot/couverture-avec-titre-jtedte.webp" class="img-fluid" alt="Couverture de  Le sillage de l'encre">
                            <div class="new-card-content">
                                <div class="new-card-author">Joël berthelot</div>
                                <div class="new-card-price">20,00 €</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>



 
 <?php include("footer.php"); ?>
</body>
</html>