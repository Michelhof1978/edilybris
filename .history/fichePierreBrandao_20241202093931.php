<?php include("head.php"); ?>

<title>Pierre Brandao - Auteur</title>
<meta name="description" content="Biographie et livres de Pierre Brandao. Découvrez ses œuvres et téléchargez un bon de commande.">
</head>

<?php
// Nombre de citations par ligne (2 par ligne)
$citationsParLigne = 2;

// Nombre total de citations
$totalCitations = 5;

// Récupérer la page actuelle depuis l'URL (si elle existe), sinon page 1 par défaut
$pageActuelle = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculer la position de départ des citations pour la page actuelle
$debut = ($pageActuelle - 1) * $citationsParLigne;

// Tableau de citations (ajoute les contenus pour chaque citation)
$citations = [
    'Belle' => "Plus belle qu'une aurore... [texte complet]",
    'Croire en qui?' => "Je ne suis qu’un enfant, ô mon Dieu... [texte complet]",
    'Lavandière' => "J’accompagne ma mère au lavoir du passé... [texte complet]",
    'Le Fou et sa Reine' => "Je suis ton fou, tu es ma reine... [texte complet]",
    'Une Ampoule Claque' => "Une ampoule claque... [texte complet]",
];

// Obtenir les citations pour la page actuelle
$citationsPage = array_slice($citations, $debut, $citationsParLigne, true);

// Calculer le nombre total de pages
$totalPages = ceil($totalCitations / $citationsParLigne);

// Définir les sections
$sections = [
    'biographie' => '<h2 class="h2Jaune">Biographie</h2>
                    <div class="bio-content">
                        <img src="images/pierreBrandao/pierreBrandao.png" alt="Pierre Brandao" class="img-fluid bio-image">
                        <div class="bio-text">
                            <p>Il n\'a pas fallu longtemps à Pierre Brandao pour trouver un attrait particulier au verbe poétique... [texte complet]</p>
                        </div>
                    </div>',
    
    'livres' => '<h2 class="h2Jaune">Les Livres de Pierre Brandao</h2>
                <div class="livre">
                    <img src="images/pierreBrandao/XLlamuserie.png" class="img-fluid w-75" alt="Couverture du livre Le Voyage Intérieur">
                    <div class="details">
                        <h3 class="h2Jaune">L\'AMUSERIE (ET PLEURE PARFOIS)</h3>
                        <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2005</p>
                        <p><strong class="h2Jaune">Résumé :</strong> Ce septième recueil de poésies de Pierre Brandao... [texte complet]</p>
                        <a href="images/bulletin-de-commande-2024.pdf" class="lien text-white fw-bold" download>Télécharger le bon de commande</a>
                    </div>
                </div>',
    
    'citations' => '<h2 class="h2Jaune">MAGASIN DE POÈMES À CHANTER</h2>
                    <div class="citations-content">
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
                    </div>',
];

// Calculer le nombre total de sections
$totalSections = count($sections);

// Calculer la section active
$sectionActuelle = isset($sections[$_GET['section']]) ? $_GET['section'] : 'biographie';

// Afficher la section actuelle
$contenu = $sections[$sectionActuelle];
?>

<?php include("header.php"); ?>

<header class="headerAuteur">
    <div class="containerAuteur">
        <h1>Pierre Brandao</h1>
        <p class="intro">Un écrivain au cœur de l'âme humaine</p>
    </div>
</header>

<main>
    <section class="contenu">
        <div class="containerAuteur">
            <?php echo $contenu; ?>
        </div>
    </section>

    <!-- Pagination -->
    <div class="pagination">
        <!-- Bouton Précédent -->
        <a href="?section=<?php echo $sectionActuelle; ?>&page=<?php echo max(1, $pageActuelle - 1); ?>" class="prev">Précédent</a>

        <!-- Numéros de page -->
        <?php for ($i = 1; $i <= $totalSections; $i++) : ?>
            <a href="?section=<?php echo $sectionActuelle; ?>&page=<?php echo $i; ?>" class="page-num <?php echo $i == $pageActuelle ? 'active' : ''; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>

        <!-- Bouton Suivant -->
        <a href="?section=<?php echo $sectionActuelle; ?>&page=<?php echo min($totalSections, $pageActuelle + 1); ?>" class="next">Suivant</a>
    </div>
</main>

<?php include("footer.php"); ?>

</body>
</html>
