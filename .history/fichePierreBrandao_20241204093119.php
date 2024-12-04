<?php include("head.php"); ?>

<title>Pierre Brandao - Auteur</title>
<meta name="description" content="Biographie et livres de Pierre Brandao. Découvrez ses œuvres et téléchargez un bon de commande.">
</head>

<?php
// Nombre de citations par ligne (2 par ligne)
$citationsParLigne = 2;

// Récupérer la page actuelle depuis l'URL (si elle existe), sinon page 1 par défaut
$pageActuelleCitations = isset($_GET['page_citations']) ? (int) $_GET['page_citations'] : 1;

// Tableau de citations (toutes les citations que tu as mentionnées)
$citations = [
    'Belle' => "",
    'Croire en qui?' => "",
    'Lavandière' => "",
    'Le Fou et sa Reine' => "",
    'Une Ampoule Claque' => "",
    'Souffle d\'une plume' => "",
    'FLEUR D\'AUTOMNE' => "",
];

$totalCitations = count($citations);

// Calculer la position de départ des citations pour la page actuelle
$debutCitations = ($pageActuelleCitations - 1) * $citationsParLigne;

// Obtenir les citations pour la page actuelle
$citationsPage = array_slice($citations, $debutCitations, $citationsParLigne, true);

// Calculer le nombre total de pages pour les citations
$totalPagesCitations = ceil($totalCitations / $citationsParLigne);

// Configuration des livres et de la pagination
$livresParPage = 1; // Nombre de livres par page
$livres = [
    [
        'titre' => "L'AMUSERIE (ET PLEURE PARFOIS)",
        'image' => 'images/pierreBrandao/XLlamuserie.png',
        'annee' => '2005',
        'resume' => "Ce septième recueil de poésies regroupe des textes dont le fil conducteur est la musique des mots...",
        'prix' => '15,00 €',
        'lien' => 'images/bulletin-de-commande-2024.pdf',
    ],
    [
        'titre' => "Le coeur a ses saisons",
        'image' => 'images/pierreBrandao/leCoeurAsesSaisons.png',
        'annee' => '2010',
        'resume' => "Il en va du temps comme des sentiments... Les pupilles s’ouvrent au printemps...",
        'prix' => '15,00 €',
        'lien' => 'images/bulletin-de-commande-2024.pdf',
    ],
    [
        'titre' => "Titre du Livre 3",
        'image' => 'images/pierreBrandao/XLlivre3.png',
        'annee' => '2015',
        'resume' => "Résumé du livre 3...",
        'prix' => '15,00 €',
        'lien' => 'images/bulletin-de-commande-2024.pdf',
    ],
    // Ajoutez d'autres livres ici
];

$totalLivres = count($livres);

// Définir la page actuelle et calculer l'index de début pour les livres
$pageActuelleLivres = isset($_GET['page_livres']) ? (int) $_GET['page_livres'] : 1;
$debutLivres = ($pageActuelleLivres - 1) * $livresParPage;

// Extraire les livres pour la page actuelle
$livresPage = array_slice($livres, $debutLivres, $livresParPage, true);

// Calcul pour les boutons de navigation des livres
$totalPagesLivres = ceil($totalLivres / $livresParPage);
?>

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
                    <p>Il n'a pas fallu longtemps à Pierre Brandao pour trouver un attrait particulier au verbe poétique...</p>
                </div>
            </div>
        </div>
    </section>

    <section class="livres">
        <div class="containerAuteur">
            <h2>Les livres de Pierre Brandao</h2>

            <!-- Affichage des livres -->
            <?php foreach ($livresPage as $livre) : ?>
                <div class="livre">
                    <div class="livre-content">
                        <div class="livre-image">
                            <img src="<?php echo $livre['image']; ?>" class="img-fluid" alt="Couverture du livre">
                            <p class="fw-bold coloryellow mt-3 fs-4"><?php echo $livre['prix']; ?></p>
                        </div>
                        <div class="livre-details">
                            <h3 class="h2Jaune"><?php echo $livre['titre']; ?></h3>
                            <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> <?php echo $livre['annee']; ?></p>
                            <p><strong class="h2Jaune">Résumé :</strong> <?php echo $livre['resume']; ?></p>
                            <a href="<?php echo $livre['lien']; ?>" class="lien text-white fw-bold" download>Télécharger le bon de commande</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- Pagination pour les livres -->
            <div class="livre-navigation d-flex justify-content-center mt-4">
                <a href="?page_livres=<?php echo max(1, $pageActuelleLivres - 1); ?>" class="prev">Précédent</a>
                <a href="?page_livres=<?php echo min($totalPagesLivres, $pageActuelleLivres + 1); ?>" class="next">Suivant</a>
            </div>
        </div>
    </section>

    <!-- Section citations -->
    <section class="citations text-white py-4">
        <div class="container">
            <h2 class="h2Jaune text-center mb-4">MAGASIN DE POÈMES À CHANTER</h2>
            <div class="row">
                <?php foreach ($citationsPage as $titre => $citation) : ?>
                    <div class="col-md-6 mb-4">
                        <h3 class="h2Jaune"><?php echo $titre; ?></h3>
                        <blockquote>
                            <p><?php echo nl2br($citation); ?></p>
                        </blockquote>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination des citations -->
            <div class="pagination">
                <a href="?page_citations=<?php echo max(1, $pageActuelleCitations - 1); ?>" class="prev">Précédent</a>
                <?php for ($i = 1; $i <= $totalPagesCitations; $i++) : ?>
                    <a href="?page_citations=<?php echo $i; ?>" class="page-num <?php echo $i == $pageActuelleCitations ? 'active' : ''; ?>"><?php echo $i; ?></a>
                <?php endfor; ?>
                <a href="?page_citations=<?php echo min($totalPagesCitations, $pageActuelleCitations + 1); ?>" class="next">Suivant</a>
            </div>
        </div>
    </section>

</main>

<?php include("footer.php"); ?>

</body>
</html>
