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
    'Belle' => "Il y a des personnes qui font naître la lumière là où elles passent.",
    'Croire en qui?' => "Croire en soi, c'est déjà croire en l'autre.",
    'Lavandière' => "Elle lave le monde de ses drames passés, l'éternité se glissant entre ses mains.",
    'Le Fou et sa Reine' => "Le Fou danse, mais c’est la Reine qui mène la danse.",
    'Une Ampoule Claque' => "Une ampoule éclate et le monde se trouve soudainement éclairé d’un autre regard.",
    'Souffle d\'une plume' => "Un poème est une respiration suspendue, un souffle d'une plume d’un autre monde.",
    'FLEUR D\'AUTOMNE' => "Fleur d’automne, qui s’effeuille sous la brise de l’hiver, dans un éclat de lumière fugace.",
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
        'resume' => "Ce septième recueil de poésies regroupe des textes dont le fil conducteur est la musique des mots. Les vers s’entrelacent et s’épanouissent dans une quête de lumière et d’espérance, une réflexion poétique sur le monde moderne et ses paradoxes.",
        'prix' => '15,00 €',
        'lien' => 'images/bulletin-de-commande-2024.pdf',
    ],
    [
        'titre' => "Le coeur a ses saisons",
        'image' => 'images/pierreBrandao/leCoeurAsesSaisons.png',
        'annee' => '2010',
        'resume' => "Il en va du temps comme des sentiments... Les pupilles s’ouvrent au printemps, mais l’automne arrive à pas feutrés, et chaque mot devient alors une couleur, une note qui compose la symphonie de la vie. Ce recueil explore la beauté éphémère des saisons et les nuances du cœur humain.",
        'prix' => '15,00 €',
        'lien' => 'images/bulletin-de-commande-2024.pdf',
    ],
    [
        'titre' => "Titre du Livre 3",
        'image' => 'images/pierreBrandao/XLlivre3.png',
        'annee' => '2015',
        'resume' => "Résumé du livre 3... Ce livre est un voyage au cœur des émotions humaines, une exploration poétique de l’âme et des mystères qui nous entourent. À travers des vers touchants et introspectifs, l’auteur nous invite à repenser la beauté et la douleur de l’existence.",
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
                    <p>Il n'a pas fallu longtemps à Pierre Brandao pour trouver un attrait particulier au verbe poétique. Dès sa jeunesse, il s'illustre par des écrits qui dévoilent une profonde réflexion sur les contours de la vie humaine. Sensible aux rythmes du monde, il capture ses émotions à travers des mots soigneusement choisis, les réarrangeant pour en faire naître des vers parfois incisifs, parfois rêveurs, mais toujours empreints d’une rare intensité.</p>

                    <p>Son œuvre est le reflet d’une époque et d’un monde en mutation. Par son engagement à rendre l’indicible perceptible, il invite ses lecteurs à se poser des questions profondes sur le sens de la vie, la nature humaine et la condition de l’artiste dans un monde contemporain. Pierre Brandao a plusieurs recueils à son actif et ses poèmes se distinguent par leur capacité à allier musicalité du langage et exploration psychologique, dans un souffle poétique unique.</p>
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
                <span class="page-number">Page <?php echo $pageActuelleCitations; ?> sur <?php echo $totalPagesCitations; ?></span>
                <a href="?page_citations=<?php echo min($totalPagesCitations, $pageActuelleCitations + 1); ?>" class="next">Suivant</a>
            </div>
        </div>
    </section>
</main>

<?php include("footer.php"); ?>
