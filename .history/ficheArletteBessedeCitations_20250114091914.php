<?php include("head.php"); ?>

<title>Pierre Brandao - Auteur</title>
<meta name="description" content="Les livres d'Arlette Bessède. Découvrez ses œuvres et téléchargez un bon de commande.">

</head>

<?php include("header.php"); ?>

<?php
// Nombre de citations par ligne (2 par ligne)
$nombreCitationsParLigne = 2;

// Récupérer la page actuelle depuis l'URL (si elle existe), sinon page 1 par défaut
$pageCourante = isset($_GET['page']) ? (int) $_GET['page'] : 1;

// Tableau de citations
$tableauCitations = [
    '' => "",

    '' => "",

    'PRIÈRE PATIENTE' => "Sur un voilier, trente-deux jours de navigation, une résonance intérieure frappe à ma porte-poitrine.
Ouvrant celle-ci, je laisse pénétrer en moi des mots, des émotions et un flot de sentiments diffus.
Les tempêtes, les calmes, les désagréments de la vie marine m’apparaissent difficiles, mais sur l’eau, chaque événement apporte son lot de connaissances.",

    'BLEU ET ARC-EN-CIEL' => "Sur l’océan se trouve le trésor d’éternité, son silence enveloppe nos membres d’un voile humide.
Sur le pont du navire, chaque regard est destiné à cette immensité où l’on perd la notion du temps.
Alors, nous avons le loisir d’ouvrir nos sens aux multiples relations que nous propose ce champ bleu labouré à perte de vue.
Du sang de la mer, j’ai noyé mes arrogances, oublié mes certitudes et me suis relié au vivant.",


];

// Tableau des images associées aux titres
$imagesParTitre = [
    'ORAGE' => 'images/davidBeaulieu/orage_11zon.webp',
    'L’HOMME ET LA MER?' => 'images/davidBeaulieu/HOMMEaLaMer_11zon.webp',
    'PRIÈRE PATIENTE' => 'images/davidBeaulieu/prierepatiente_11zon.webp',
    'BLEU ET ARC-EN-CIEL' => 'images/davidBeaulieu/bleueetarcenciel_11zon.webp',
 
];

// Calcul des pages
$totalCitations = count($tableauCitations);
$positionDepart = ($pageCourante - 1) * $nombreCitationsParLigne;
$citationsPourPage = array_slice($tableauCitations, $positionDepart, $nombreCitationsParLigne, true);
$nombreTotalPages = ceil($totalCitations / $nombreCitationsParLigne);
?>

<!-- Section citations -->
<section id="section-citations" class="citations text-white py-4">
    <div class="container">
        <h2 class="h2Jaune text-center mt-4 mb-4">EXTRAITS DU LIVRE</h2>
        <div class="text-center">
            <img class="img-fluid w-25" src="images/poeme.webp" alt="Image centrée">
        </div>
        <div class="row" id="conteneur-citations">
            <?php foreach ($citationsPourPage as $titreCitation => $texteCitation) : ?>
                <div class="col-md-6 mb-4">
                    <h3 class="h2Jaune"><?php echo $titreCitation; ?></h3>
                    <div class="text-center mb-3">
                        <?php if (isset($imagesParTitre[$titreCitation])) : ?>
                            <img class="img-fluid w-75" src="<?php echo $imagesParTitre[$titreCitation]; ?>" alt="Image pour <?php echo $titreCitation; ?>">
                        <?php else : ?>
                            <p>Aucune image disponible</p>
                        <?php endif; ?>
                    </div>
                    <blockquote>
                        <p><?php echo nl2br($texteCitation); ?></p>
                    </blockquote>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="pagination" id="bouton-pagination">
            <!-- Bouton Précédent -->
            <a href="?page=<?php echo max(1, $pageCourante - 1); ?>" class="prev" data-page="<?php echo max(1, $pageCourante - 1); ?>">Précédent</a>

            <!-- Numéros de page -->
            <?php for ($i = 1; $i <= $nombreTotalPages; $i++) : ?>
                <a href="?page=<?php echo $i; ?>" class="page-num <?php echo $i == $pageCourante ? 'active' : ''; ?>" data-page="<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endfor; ?>

            <!-- Bouton Suivant -->
            <a href="?page=<?php echo min($nombreTotalPages, $pageCourante + 1); ?>" class="next" data-page="<?php echo min($nombreTotalPages, $pageCourante + 1); ?>">Suivant</a>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>

</body>
</html>
