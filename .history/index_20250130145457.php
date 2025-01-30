<?php include("head.php"); ?>
<title>Association Edi'lybris</title>
<meta name="description" content="Association d'auteurs passionnés unis par l'amour des mots">

<style>
/* Styles de base pour tous les écrans */
.fond {
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    background-image: url('images/fondBleu.webp');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    min-height: 100vh;
}

/* Media queries pour la gestion responsive */
@media (max-width: 768px) {
    .fond {
        background-size: cover;
        background-position: center top;
    }
    
    .fond-mobile {
        padding: 1rem;
    }
    
    .w-25 {
        width: 50% !important;
    }
}

/* Styles pour le contenu */
.fond-text {
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    padding: 2rem;
    margin: 1rem 0;
}

.gradient-text {
    background: linear-gradient(45deg, #1e3c72, #2a5298);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.colorLogoIndex {
    color: #1e3c72;
}

.users-color-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1rem;
    padding: 2rem 0;
}

.imgAuteurIndex {
    max-width: 150px;
    border-radius: 50%;
    transition: transform 0.3s ease;
}

.imgAuteurIndex:hover {
    transform: scale(1.1);
}
</style>
</head>

<?php include("header.php"); ?>

<main class="fond">
    <h1 class="text-white text-center m-5">Association d'Edi'lybris</h1>
    
    <!-- Image d'en-tête -->
    <div class="text-center">
        <img class="img-fluid w-25" src="images/livreIndex.webp" alt="Livres en illustration">
    </div>
    
    <!-- Section PRESENTATION AUTEURS -->
    <section class="home m-5">
        <div class="description">
            <h2 class="title">
                <span class="gradient-text">ASSOCIATION</span><br>
                <span class="colorLogoIndex">Edi'Lybris</span> 
            </h2>
            <p class="paragraph">
                Une communauté d'auteurs passionnés unis par l'amour des mots et l'envie de partager leurs créations littéraires avec le monde.<br><br>
                Notre association rassemble écrivains confirmés et nouveaux talents pour promouvoir la richesse et la diversité de la littérature contemporaine.<br>
            </p>
        </div>

        <div class="users-color-container">
            <span class="item" style="--i: 1"></span>
            <img class="img-fluid item imgAuteurIndex" src="images/annieBrunetot/annieBrunetot.webp" style="--i: 2" alt="Photo Annie Brunetot" />
            <span class="item" style="--i: 3"></span>
            <img class="img-fluid item imgAuteurIndex" src="images/pierreBrandao/pierreBrandao.webp" style="--i: 4" alt="Photo Pierre Brandao" />
            <img class="img-fluid item imgAuteurIndex" src="images/gillesHerve/gillesHerve.webp" style="--i: 10" alt="Photo Gilles Hervé" />
            <span class="item" style="--i: 11"></span>
            <img class="img-fluid item imgAuteurIndex" src="images/patriciaScharff/patriciaScharff.webp" style="--i: 12" alt="Photo Patricia Scharff" />
            <span class="item" style="--i: 5"></span>
            <span class="item" style="--i: 9"></span>
            <img class="img-fluid item imgAuteurIndex" src="images/abdelFrançoisNadini/abdelFrançoisNadini.webp" style="--i: 8" alt="Photo Abdel François Nadini" />
            <span class="item" style="--i: 7"></span>
            <img class="img-fluid item imgAuteurIndex" src="images/christinekunz/christinekunz.webp" style="--i: 6" alt="Photo Christine Kunz" />
        </div>
    </section>

    <?php include("nouveaute.php"); ?>

    <!-- MODE MOBILE -->
    <div class="d-block d-md-none">
        <div class="fond-mobile">
            <div class="text-center">
                <img class="img-fluid w-75 mt-5" src="images/livresEtagere.webp" alt="Livres en étagère">
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="text-center py-5 rounded-4 p-2 fond-text">
                            <div class="text-center">
                                <img class="img-fluid w-50 mb-4" src="images/livres2.webp" alt="Livres en illustration">
                            </div>
                            <h3 class="mb-4">Bienvenue sur le site de notre association</h3>
                            <p class="lead mb-4">
                                Notre association a pour mission de promouvoir la lecture...
                            </p>
                            <h3 class="mt-4 mb-3">Des auteurs pour tous les goûts</h3>
                            <p class="lead mb-4">
                                Nous avons rassemblé des ouvrages d'auteurs émergents...
                            </p>
                            <h3 class="mt-4 mb-3">Notre engagement</h3>
                            <p class="lead mb-4">
                                Au-delà de la simple vente, notre association se veut un lieu...
                            </p>
                            <h3 class="mt-4 mb-3">Faites partie de l'aventure !</h3>
                            <p class="lead">
                                Nous vous invitons à explorer notre catalogue en ligne...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODE DESKTOP -->
    <div class="d-none d-md-block">
        <div class="container m-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="text-center py-5 rounded-4 p-2 fond-text">
                        <h3 class="mb-4">Bienvenue sur le site de notre association</h3>
                        <p class="lead mb-4">
                            Notre association a pour mission de promouvoir la lecture, le partage de connaissances et la découverte d'auteurs talentueux à travers la vente de livres soigneusement sélectionnés. Que vous soyez passionné de littérature, amateur de récits inspirants ou en quête de nouvelles découvertes, vous trouverez chez nous une offre variée de livres issus de plumes diversifiées.
                        </p>

                        <h3 class="mt-4 mb-3">Des auteurs pour tous les goûts</h3>
                        <p class="lead mb-4">
                            Nous avons rassemblé des ouvrages d'auteurs émergents et confirmés, dans une multitude de genres : romans, essais, poésies, récits de voyage, ouvrages jeunesse et bien plus encore. Chaque livre est une invitation à explorer des univers uniques et à échanger des idées.
                        </p>

                        <h3 class="mt-4 mb-3">Notre engagement</h3>
                        <p class="lead mb-4">
                            Au-delà de la simple vente, notre association se veut un lieu de rencontre pour les amoureux du livre et de la culture. En achetant chez nous, vous soutenez non seulement des auteurs, mais également une démarche collective dédiée à la valorisation de la littérature sous toutes ses formes.
                        </p>

                        <h3 class="mt-4 mb-3">Faites partie de l'aventure !</h3>
                        <p class="lead">
                            Nous vous invitons à explorer notre catalogue en ligne, à découvrir de nouveaux auteurs et à rejoindre notre communauté de lecteurs. Ensemble, partageons notre passion pour les livres et soutenons la création littéraire.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
                    <img src="images/livreIndex2.webp" alt="Livres en illustration" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <?php include("souscription.php"); ?>
</main>

<?php include("footer.php"); ?>
</html>