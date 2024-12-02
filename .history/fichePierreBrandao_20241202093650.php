<?php include("head.php"); ?>

<title>Pierre Brandao - Auteur</title>
<meta name="description" content="Biographie et livres de Pierre Brandao. Découvrez ses œuvres et téléchargez un bon de commande.">

</head>

<?php
// Récupérer la page actuelle depuis l'URL (si elle existe), sinon page 1 par défaut
$pageActuelle = isset($_GET['page']) ? $_GET['page'] : 1;

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
];

// Calculer la position de la section à afficher
$sectionsAffichees = array_keys($sections);
$sectionActuelle = $sectionsAffichees[$pageActuelle - 1];

// Calculer le nombre total de pages (sections)
$totalSections = count($sections);

// Afficher la section en cours
$contenu = $sections[$sectionActuelle];
?>

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
        <a href="?page=<?php echo max(1, $pageActuelle - 1); ?>" class="prev">Précédent</a>

        <!-- Numéros de page -->
        <?php for ($i = 1; $i <= $totalSections; $i++) : ?>
            <a href="?page=<?php echo $i; ?>" class="page-num <?php echo $i == $pageActuelle ? 'active' : ''; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>

        <!-- Bouton Suivant -->
        <a href="?page=<?php echo min($totalSections, $pageActuelle + 1); ?>" class="next">Suivant</a>
    </div>
</main>

<?php include("footer.php"); ?>

</body>
</html>
