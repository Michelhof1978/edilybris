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
    'Préface de Josyane de Jesus-Bergey' => "Josyane de Jesus-Bergey, poète renommée, vice-présidente de l'association Larochellivre, organisatrice de rencontres littéraires en Charente-Maritime et découvreuse de talents à l'occasion d'ateliers d'écriture, n'a pas hésité à préfacer l'ouvrage d'Arlette Bessede. Extrait de la préface :
    \"Arlette Bessede nous fait entrer avec « Mes mots sont des paysages » dans un partage qui ne nous laisse pas indifférents. Elle le fait avec une simplicité qui rejoint l’écriture du poème. Dire ou essayer de dire sans jamais imposer ni rejeter.\"

    Pour en savoir plus sur Josyane de Jesus-Bergey : http://fr.wikipedia.org/wiki/Josyane_De_Jesus-Bergey",

    'Extrait de "Saintonge"' => "Ici mon pays
Et là ma maison

 Blanches pierres de cathédrales

 Au milieu des vignes
Et des églises romanes

 Splendeurs d’automne
Sur les coteaux dorés
Avec
Comme sentinelles
Des moulins dans le vent
Jusqu’à la mer",

    'La part des anges' => "Dans la lenteur du temps

Sommeillent
Si bien cachées
Dans les vieux murs
Les eaux de vie subtiles
Au parfum mêlé de chêne",

    'Le petit jour' => "Le petit jour
Pose un œil
Sur la table du jardin",
'Extrait de "Ma ville"' => "Fille du sud-ouest tu es née de la vigne
Il flotte dans tes murs
Des relents de barrique
De crus et de châteaux.",
'Pays de la colère' => " On ne savait pas quand
On ne savait pas d’où
Elle était partie
Mais elle avait envahi l’espace
Elle avait obscurci le temps
Jusqu’aux pleurs
Jusqu’aux cris
Jusqu’à l’embrasement des montagnes
Jusqu’à voir d’étranges fleurs rouges
Sortir de la terre 

Enivrée

 ",

];

// Tableau des images associées aux titres
$imagesParTitre = [
    'Préface de Josyane de Jesus-Bergey' => 'images/arletteBessede/arlette-bessede-6_11zon.webp',
    'L’HOMME ET LA MER?' => 'images/davidBeaulieu/HOMMEaLaMer_11zon.webp',
   
 
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
