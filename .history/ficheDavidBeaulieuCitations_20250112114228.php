<?php include("head.php"); ?>

<title>Pierre Brandao - Auteur</title>
<meta name="description" content="Biographie et livres de Pierre Brandao. Découvrez ses œuvres et téléchargez un bon de commande.">

</head>

<?php include("header.php"); ?>

<?php
// Nombre de citations par ligne (2 par ligne)
$nombreCitationsParLigne = 2;

// Récupérer la page actuelle depuis l'URL (si elle existe), sinon page 1 par défaut
$pageCourante = isset($_GET['page']) ? (int) $_GET['page'] : 1;

// Tableau de citations (toutes les citations que tu as mentionnées)
$tableauCitations = [
    'ORAGE' => "Atlantique Nord, le 24 avril 1999,
en route pour les Bermudes depuis vingt jours

     (écrit pendant un fort coup de vent)



 

Fracas, choc d'appendices en continu, rien de calme ici… Le chaos frappe nos corps de part et d’autre.


Roulement de grosse caisse, le tambour du vent monte d’un cran, la tension aussi. Les décibels s’amplifient, les cymbales s’emballent, s’entrechoquent avec frénésie.


Le bruit s’engouffre directement dans le bateau, l’intérieur n’est que résonance et vacarme.


Mon âme gémit, j’ai envie de crier sous cette étreinte, aucun son ne parvient à sortir de mes profondeurs.


Juste ce bruit qui domine, tout en est recouvert, sous un voile opaque, d’une lourdeur qui habille nos membres, une moiteur qui sent la peur.

Transat 2002
Se ancetravaildavidbeaulieu270122 14

",
    'Croire en qui?' => "Je ne suis qu’un enfant, ô mon Dieu,
                        Pourtant je ne sais ce qu’on me veut :
                        ...",
    'Lavandière' => "J’accompagne ma mère au lavoir du passé,
                     J’aime à l’entendre rire en compagnie des dames ;
                     ...",
    'Le Fou et sa Reine' => "Je suis ton fou, tu es ma reine
                             Me ferai plus cavalier que ton roi
                             ...",
    'Une Ampoule Claque' => "Une ampoule claque
                             Tu titubes dans le noir
                             ...",
    'Souffle d\'une plume' => "Plus belle qu'une aurore,
                               Plus tendre qu'un baiser
                               ...",
    'FLEUR D\'AUTOMNE' => "Moi, j’ai saisi sur son dos dénudé
                           Une coque de gland tombée du chêne
                           ...",
    'Je nourris une larme…' => "Je nourris une larme…
                               ...
                               ",
    'Miroir de mes saisons ' => "Je nourris une larme…
                                ...
                                ",
    'Crime céleste' => "Le pers de ta souffrance ignore l’horizon.
                        ...
                        ",
];

$totalCitations = count($tableauCitations);

// Calculer la position de départ des citations pour la page actuelle
$positionDepart = ($pageCourante - 1) * $nombreCitationsParLigne;

// Obtenir les citations pour la page actuelle
$citationsPourPage = array_slice($tableauCitations, $positionDepart, $nombreCitationsParLigne, true);

// Calculer le nombre total de pages
$nombreTotalPages = ceil($totalCitations / $nombreCitationsParLigne);
?>

<!-- Section citations -->
<section id="section-citations" class="citations text-white py-4">
    <div class="container">
        <h2 class="h2Jaune text-center mt-4 mb-4">MAGASIN DE POÈMES À CHANTER</h2>
        <div class="text-center">
            <img class="img-fluid w-25" src="images/poeme.webp" alt="Image centrée">
        </div>
        <div class="row" id="conteneur-citations">
            <?php foreach ($citationsPourPage as $titreCitation => $texteCitation) : ?>
                <div class="col-md-6 mb-4">
                    <h3 class="h2Jaune"><?php echo $titreCitation; ?></h3>
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
