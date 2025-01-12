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
    'L’HOMME ET LA MER?' => "Sur l’eau, le temps s’écoule. L’immensité bleue rejoint toutes les terres. Belle mer, aux rides ondulées, particularités nuancées par les vents.
Le calme amuse nos journées, nous avons tout latitude pour faire le point sur la carte océanique.
Brise marine, ton signal nous éveille, le plan d’eau s’irise, l’ouïe aux aguets. À présent, notre vigilance devient nécessaire et une forme d’appréhension vient à notre écoute.
Souffle frais, le matelot se prépare, scrute le ciel, décèle les précautions à prendre afin de se sentir proche des éléments.
L’océan rit, les moutons épars forment bientôt un véritable troupeau d’humeur chaotique.
Les vagues imitent le vent, leurs forces se joignent, décident de s’ébattre tels des amours de jeunesse fusionnelles. L’écume déferle désormais, crêtes de bave blanche.
Leur union intermittente se dissipe dans les méandres de l’Atlantique… Il en va ainsi lors du quart de nuit : des couleurs inconnues du nuancier apparaissent pour alimenter notre soif et nous relier à l’infini.
De tous les bleus croisés au large, il reste un sentiment d’unité qui se décline à l’infini.
Le bleu de l’âme inconfortée réchauffe lors des nuits étoilées.
Le bleu de l’arc-en-ciel joue avec le vert.
Le bleu de l’eau s’amuse avec l’écume blanche des vagues.
Le bleu du désert marin ramène à l’immensité de nos vies terrestres.",

    'PRIÈRE PATIENTE' => "JSur un voilier, trente-deux jours de navigation, une résonance intérieure frappe à ma porte-poitrine.
Ouvrant celle-ci, je laisse pénétrer en moi des mots, des émotions et un flot de sentiments diffus.
Les tempêtes, les calmes, les désagréments de la vie marine m’apparaissent difficiles, mais sur l’eau, chaque événement apporte son lot de connaissances.
Néanmoins, mon conscient n’absorbe pas cette vérité. Advient alors cette longue prière patiente, ce recueillement dans la nuit en compagnie du vent et des étoiles, cette imploration au levant, sereine et proche des vivants.
Sentiment d’unité avec le tout, la mer me regarde passer dans un sillage éternel. À présent, je suis là au bord de l’océan, les yeux tournés vers un horizon sans cesse en train de se voiler et de se dévoiler. Impermanence de notre parcours terrestre.
Tes heures interminables se liquéfient. Pourtant, après cette expérience, je me sens désormais fidèle à toi.
Méditer, être dans le silence d’une foule panique. La réflexion se loge au creux de chacune de nos vies. Alors, sachons l’entendre et l’attendre.",

    'BLEU ET ARC-EN-CIEL' => "Sur l’océan se trouve le trésor d’éternité, son silence enveloppe nos membres d’un voile humide.
Sur le pont du navire, chaque regard est destiné à cette immensité où l’on perd la notion du temps.
Alors, nous avons le loisir d’ouvrir nos sens aux multiples relations que nous propose ce champ bleu labouré à perte de vue.
Vague perpétuelle, encre de vie répandue, ciel dégagé, mon cœur retourne à la terre et je pense à mes frères.
Du sang de la mer, j’ai noyé mes arrogances, oublié mes certitudes et me suis relié au vivant.
Le vent a dissipé les peurs qui habitent nos carcasses. L’arc-en-ciel orne mes habits d’enfant désormais.",
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
