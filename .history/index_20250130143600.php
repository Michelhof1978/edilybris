<?php include("head.php"); ?>

<title>Association Edi'lybris</title>
<meta name="description" content="Association d'auteurs passionnés">

<style>
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

/* Pour que le contenu prenne toute la place entre le header et le footer */
.main-content {
    flex-grow: 1;
}
</style>

</head>
<body>

<?php include("header.php"); ?>

<section class="main-content">
    <h1 class="text-white text-center m-5">Association d'Edi'lybris</h1>

    <div class="text-center">
        <img class="img-fluid w-25" src="images/livreIndex.webp" alt="Livres en illustration">
    </div>

    <!-- PRÉSENTATION AUTEURS -->
    <section class="home m-5">
        <div class="description">
            <h2 class="title">
                <span class="gradient-text">ASSOCIATION</span><br>
                <span class="colorLogoIndex">Edi'Lybris</span> 
            </h2>
            <p class="paragraph">
                Une communauté d'auteurs passionnés unis par l'amour des mots et l'envie de partager leurs créations littéraires avec le monde.<br><br>
                Notre association rassemble écrivains confirmés et nouveaux talents pour promouvoir la richesse et la diversité de la littérature contemporaine.
            </p>
        </div>

        <div class="users-color-container">
            <img class="img-fluid item imgAuteurIndex" src="images/annieBrunetot/annieBrunetot.webp" alt="Photo écrivain" />
            <img class="img-fluid item imgAuteurIndex" src="images/pierreBrandao/pierreBrandao.webp" alt="Photo écrivain" />
            <img class="img-fluid item imgAuteurIndex" src="images/gillesHerve/gillesHerve.webp" alt="Photo écrivain" />
            <img class="img-fluid item imgAuteurIndex" src="images/patriciaScharff/patriciaScharff.webp" alt="Photo écrivain" />
            <img class="img-fluid item imgAuteurIndex" src="images/abdelFrançoisNadini/abdelFrançoisNadini.webp" alt="Photo écrivain" />
            <img class="img-fluid item imgAuteurIndex" src="images/christinekunz/christinekunz.webp" alt="Photo écrivain" />
        </div>
    </section>
    <!-- FIN PRÉSENTATION AUTEURS -->

    <?php include("nouveaute.php"); ?>

    <div class="text-center">
        <img class="img-fluid w-75 mt-5" src="images/livresEtagere.webp" alt="Livres en illustration">
    </div>

    <div class="container m-5">
        <div class="row justify-content-center">
            <!-- Texte principal -->
            <div class="col-12 col-md-8">
                <div class="text-center py-5 rounded-4 p-2 fond-text">
                    <h3 class="mb-4">Bienvenue sur le site de notre association</h3>
                    <p class="lead mb-4">
                        Notre association a pour mission de promouvoir la lecture, le partage de connaissances et la découverte d'auteurs talentueux à travers la vente de livres soigneusement sélectionnés. 
                    </p>
                    <h3 class="mt-4 mb-3">Des auteurs pour tous les goûts</h3>
                    <p class="lead mb-4">
                        Nous avons rassemblé des ouvrages d'auteurs émergents et confirmés, dans une multitude de genres : romans, essais, poésies, récits de voyage, ouvrages jeunesse et bien plus encore.
                    </p>
                    <h3 class="mt-4 mb-3">Notre engagement</h3>
                    <p class="lead mb-4">
                        Au-delà de la simple vente, notre association se veut un lieu de rencontre pour les amoureux du livre et de la culture.
                    </p>
                    <h3 class="mt-4 mb-3">Faites partie de l’aventure !</h3>
                    <p class="lead">
                        Nous vous invitons à explorer notre catalogue en ligne, à découvrir de nouveaux auteurs et à rejoindre notre communauté de lecteurs.
                    </p>
                </div>
            </div>

            <!-- Image -->
            <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
                <img src="images/livreIndex2.webp" alt="Livres en illustration" class="img-fluid" />
            </div>
        </div>
    </div>
</section>

<?php include("souscription.php"); ?>
<?php include("footer.php"); ?>

</body>
</html>
