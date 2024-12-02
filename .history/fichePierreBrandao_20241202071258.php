<?php include("head.php"); ?>

<title>Pierre Brandao - Auteur</title>
<meta name="description" content="Biographie et livres de Pierre Brandao. Découvrez ses œuvres et téléchargez un bon de commande.">

</head>

<?php include("header.php"); ?>

<header class="headerAuteur">
    <div class="containerAuteur">
        <h1>Pierre Brandao</h1>
        <p class="intro">Un écrivain au cœur de l'âme humaine</p>
    </div>
</header>

<main>
    <section class="biographie">
        <div class="containerAuteur">
            <h2 class="h2Jaune">Biographie</h2>

            <div class="bio-content">
                <img src="images/pierreBrandao/pierreBrandao.png" alt="Pierre Brandao" class="img-fluid bio-image">
                <div class="bio-text">
                    <p>Il n'a pas fallu longtemps à Pierre Brandao pour trouver un attrait particulier au verbe poétique. <br>
                    Dès la primaire, séduit par la musicalité du vers, il rendait ses devoirs en utilisant la rime. <br>
                    À quinze ans, il rencontre un poète, Gilles Sorgel, qui se fait fort de lui montrer la voie en lui enseignant les règles de la versification. <br>
                    En lui demandant de vérifier l'absence de coquilles d'un ouvrage intitulé "Traité de prosodie à l'usage des classiques -et des dissidents", il s'assurait ainsi que le jeune poète acquérait des bases solides. <br>
                    Bases qui lui ont permis, plusieurs années après, de rédiger en "vulgarisant" au mieux son propre traité de prosodie.

                    C'est dans l'essence de la vie que Pierre puise ses sources d'inspiration ; il a une sensibilité à fleur de peau et sa susceptibilité également martèle les poèmes. <br>
                    La poésie est un cri de l'âme, mais elle est également le vase dans lequel repose les soucis de l'existence. <br>
                    Six recueils verront le jour, dont certains totalement épuisés. D'autres naîtront, à n'en pas douter ! Découvrons-les !</p>
                </div>
            </div>
        </div>
    </section>

    <section class="livres">
        <div class="containerAuteur">
            <h2>Les Livres de Pierre Brandao</h2>

            <?php
            // Define books to display in an array
            $livres = [
                [
                    'title' => 'Le Voyage Intérieur',
                    'year' => 2005,
                    'summary' => 'Ce roman suit le parcours de Marc, un jeune homme en quête de sens...',
                    'image' => 'leCoeurAsesSaisons.png',
                    'link' => 'images/bulletin-de-commande-2024.pdf'
                ],
                [
                    'title' => 'Les Ombres du Passé',
                    'year' => 2009,
                    'summary' => 'Ce roman mêle suspense et émotion en suivant une famille marquée...',
                    'image' => 'luciolesMagiques.png',
                    'link' => 'images/bulletin-de-commande-2024.pdf'
                ],
                [
                    'title' => 'Les Mots de l\'Amour',
                    'year' => 2015,
                    'summary' => 'Un recueil de nouvelles qui explore diverses facettes de l\'amour...',
                    'image' => 'XLlamourafleurdame.png',
                    'link' => 'images/bulletin-de-commande-2024.pdf'
                ],
                [
                    'title' => 'L\'AMUSERIE (ET PLEURE PARFOIS)',
                    'year' => 2020,
                    'summary' => 'Ce septième recueil de poésies de Pierre Brandao regroupe des textes...',
                    'image' => 'XLlamuserie.png',
                    'link' => 'images/bulletin-de-commande-2024.pdf'
                ]
            ];

            // Pagination setup
            $itemsPerPage = 2;
            $totalItems = count($livres);
            $totalPages = ceil($totalItems / $itemsPerPage);
            $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $startIndex = ($currentPage - 1) * $itemsPerPage;
            $currentItems = array_slice($livres, $startIndex, $itemsPerPage);

            // Display books for the current page
            foreach ($currentItems as $livre) {
                echo '
                <div class="livre">
                    <img src="images/pierreBrandao/' . $livre['image'] . '" class="img-fluid" alt="Couverture du livre ' . $livre['title'] . '">
                    <div class="details">
                        <h3 class="h2Jaune">' . $livre['title'] . '</h3>
                        <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> ' . $livre['year'] . '</p>
                        <p><strong class="h2Jaune">Résumé :</strong> ' . $livre['summary'] . '</p>
                        <a href="' . $livre['link'] . '" class="lien text-white fw-bold" download>Télécharger le bon de commande</a>
                    </div>
                </div>';
            }
            ?>
            
            <!-- Pagination Buttons -->
            <div class="pagination">
                <?php if ($currentPage > 1): ?>
                    <a href="?page=<?php echo $currentPage - 1; ?>" class="btn btn-primary">Précédent</a>
                <?php endif; ?>
                <?php for ($page = 1; $page <= $totalPages; $page++): ?>
                    <a href="?page=<?php echo $page; ?>" class="btn btn-secondary <?php echo $page == $currentPage ? 'active' : ''; ?>"><?php echo $page; ?></a>
                <?php endfor; ?>
                <?php if ($currentPage < $totalPages): ?>
                    <a href="?page=<?php echo $currentPage + 1; ?>" class="btn btn-primary">Suivant</a>
                <?php endif; ?>
            </div>

        </div>
    </section>

    <section class="citations text-white py-4">
        <div class="container">
            <h2 class="h2Jaune text-center mb-4">MAGASIN DE POÈMES À CHANTER</h2>
            <!-- Citations content -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <h3 class="h2Jaune">BELLE</h3>
                    <blockquote>
                        <p>
                            <!-- Citation text here -->
                        </p>
                    </blockquote>
                </div>
                <div class="col-md-6">
                    <h3 class="h2Jaune">CROIRE EN QUI ?</h3>
                    <blockquote>
                        <p>
                            <!-- Citation text here -->
                        </p>
                    </blockquote>
                </div>
            </div>
            <!-- Additional citation rows... -->
        </div>
    </section>
</main>

<?php include("footer.php"); ?>
</body>
</html>
