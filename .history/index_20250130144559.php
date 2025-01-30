<?php include("head.php"); ?>

<title>Association Edi'lybris</title>
<meta name="description" content="Association d'auteurs passionnés">

<style>
/* Style général pour couvrir toute la page */
body {
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    background-image: url('images/fondBleu.webp') !important;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

/* Contenu principal entre header et footer */
.main-content {
    flex-grow: 1;
    padding: 20px;
}

/* Ajustement des images pour éviter qu'elles soient trop grandes en mobile */
.img-fluid {
    max-width: 100%;
    height: auto;
}

/* Centrer les éléments sur mobile */
.text-center img {
    width: 60%; /* Taille réduite sur petits écrans */
}

/* Ajustement des textes */
h1, h2, h3 {
    font-size: 1.5rem; /* Réduction de la taille des titres sur mobile */
}

/* Espacement pour éviter un affichage trop serré */
section {
    padding: 10px;
}

/* Layout spécifique pour mobile */
@media (max-width: 768px) {
    .users-color-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .users-color-container img {
        width: 80px; /* Images des auteurs plus petites en mobile */
        margin: 5px;
    }

    .description {
        text-align: center;
    }

    .fond-text {
        padding: 15px;
    }

    .text-center img {
        width: 80%; /* Augmenter légèrement les images sur mobile */
    }
}
</style>

</head>
<body>

<?php include("header.php"); ?>

<section class="main-content">
    <h1 class="text-white text-center">Association d'Edi'lybris</h1>

    <div class="text-center">
        <img class="img-fluid" src="images/livreIndex.webp" alt="Livres en illustration">
    </div>

    <!-- PRÉSENTATION AUTEURS -->
    <section class="home">
        <div class="description">
            <h2 class="title">
                <span class="gradient-text">ASSOCIATION</span><br>
                <span class="colorLogoIndex">Edi'Lybris</span> 
            </h2>
            <p class="paragraph">
                Une communauté d'auteurs passionnés unis par l'amour des mots et l'envie de partager leurs créations littéraires avec le monde.
            </p>
        </div>

        <div class="users-color-container">
            <img class="img-fluid imgAuteurIndex" src="images/annieBrunetot/annieBrunetot.webp" alt="Photo écrivain" />
            <img class="img-fluid imgAuteurIndex" src="images/pierreBrandao/pierreBrandao.webp" alt="Photo écrivain" />
            <img class="img-fluid imgAuteurIndex" src="images/gillesHerve/gillesHerve.webp" alt="Photo écrivain" />
            <img class="img-fluid imgAuteurIndex" src="images/patriciaScharff/patriciaScharff.webp" alt="Photo écrivain" />
            <img class="img-fluid imgAuteurIndex" src="images/abdelFrançoisNadini/abdelFrançoisNadini.webp" alt="Photo écrivain" />
            <img class="img-fluid imgAuteurIndex" src="images/christinekunz/christinekunz.webp" alt="Photo écrivain" />
        </div>
    </section>
    <!-- FIN PRÉSENTATION AUTEURS -->

    <?php include("nouveaute.php"); ?>

    <div class="text-center">
        <img class="img-fluid" src="images/livresEtagere.webp" alt="Livres en illustration">
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <!-- Texte principal -->
            <div class="col-12 col-md-8">
                <div class="text-center py-5 rounded-4 fond-text">
                    <h3>Bienvenue sur le site de notre association</h3>
                    <p class="lead">
                        Notre association a pour mission de promouvoir la lecture et la découverte d'auteurs talentueux.
                    </p>

                    <h3>Des auteurs pour tous les goûts</h3>
                    <p class="lead">
                        Nous avons rassemblé des ouvrages d'auteurs émergents et confirmés, dans divers genres.
                    </p>

                    <h3>Notre engagement</h3>
                    <p class="lead">
                        Un lieu de rencontre pour les amoureux du livre et de la culture.
                    </p>

                    <h3>Faites partie de l’aventure !</h3>
                    <p class="lead">
                        Explorez notre catalogue en ligne et rejoignez notre communauté de lecteurs.
                    </p>
                </div>
            </div>

            <!-- Image -->
            <div class="col-12 col-md-4 d-flex justify-content-center">
                <img src="images/livreIndex2.webp" alt="Livres en illustration" class="img-fluid" />
            </div>
        </div>
    </div>
</section>

<?php include("souscription.php"); ?>
<?php include("footer.php"); ?>

</body>
</html>
