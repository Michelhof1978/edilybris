<?php include("head.php"); ?>

<title>Pierre Brandao - Auteur</title>
<meta name="description" content="Biographie et livres de Pierre Brandao. Découvrez ses œuvres et téléchargez un bon de commande.">
</head>

<?php
// Nombre de citations par ligne (2 par ligne)
$citationsParLigne = 2;

// Nombre total de citations
$totalCitations = 5; // (puisque nous avons 5 citations dans le tableau)

// Récupérer la page actuelle depuis l'URL (si elle existe), sinon page 1 par défaut
$pageActuelle = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculer la position de départ des citations pour la page actuelle
$debut = ($pageActuelle - 1) * $citationsParLigne;

// Tableau de citations
$citations = [
    'Belle' => "Plus belle qu'une aurore, ...",  // Remplir le texte des citations
    'Croire en qui?' => "Je ne suis qu’un enfant, ô mon Dieu,...", 
    'Lavandière' => "J’accompagne ma mère au lavoir du passé, ...", 
    'Le Fou et sa Reine' => "Je suis ton fou, tu es ma reine...", 
    'Une Ampoule Claque' => "Une ampoule claque, ...",
];

// Obtenir les citations pour la page actuelle
$citationsPage = array_slice($citations, $debut, $citationsParLigne, true);

// Calculer le nombre total de pages
$totalPages = ceil($totalCitations / $citationsParLigne);

// PAGINATION LIVRE-------------------------------------------------------
$livresParPage = 1;  // 1 livre par page
$totalLivres = 1;    // Ajuster en fonction du nombre de livres
$livres = [
    'L\'AMUSERIE (ET PLEURE PARFOIS)' => [
        'image' => 'images/pierreBrandao/XLlamuserie.png',
        'annee' => '2005',
        'resume' => 'Ce septième recueil de poésies...',
        'lien' => 'images/bulletin-de-commande-2024.pdf'
    ],
    // Ajouter d'autres livres ici si nécessaire
];
$livresPage = array_slice($livres, $debut, $livresParPage, true);

?>

<?php include("header.php"); ?>

<header class="headerAuteur">
    <div class="containerAuteur">
        <h1>Pierre Brandao</h1>
        <p class="intro">Un écrivain au cœur de l'âme humaine</p>
    </div>
</header>

<main>
    <!-- Section biographie -->
    <section class="biographie">
        <div class="containerAuteur">
            <h2 class="h2Jaune">Biographie</h2>

            <!-- Section image et texte -->
            <div class="bio-content">
                <img src="images/pierreBrandao/pierreBrandao.png" alt="Pierre Brandao" class="img-fluid bio-image">
                <div class="bio-text">
                    <p>Il n'a pas fallu longtemps à Pierre Brandao pour trouver un attrait particulier au verbe poétique. 
                    Dès la primaire, séduit par la musicalité du vers, il rendait ses devoirs en utilisant la rime. 
                    À quinze ans, il rencontre un poète, Gilles Sorgel, qui se fait fort de lui montrer la voie en lui enseignant les règles de la versification. 
                    En lui demandant de vérifier l'absence de coquilles d'un ouvrage intitulé "Traité de prosodie à l'usage des classiques -et des dissidents", il s'assurait ainsi que le jeune poète acquérait des bases solides. 
                    Bases qui lui ont permis, plusieurs années après, de rédiger en "vulgarisant" au mieux son propre traité de prosodie.</p>
                    <p>C'est dans l'essence de la vie que Pierre puise ses sources d'inspiration ; il a une sensibilité à fleur de peau et sa susceptibilité également martèle les poèmes. 
                    La poésie est un cri de l'âme, mais elle est également le vase dans lequel reposent les soucis de l'existence. 
                    Six recueils verront le jour, dont certains totalement épuisés. D'autres naîtront, à n'en pas douter ! Découvrons-les !</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section livres -->
    <section class="livres py-4">
        <div class="container">
            <h2 class="h2Jaune text-center mb-4">Livres de Pierre Brandao</h2>

            <div class="row">
                <?php foreach ($livresPage as $titre => $livre) : ?>
                    <div class="col-md-12 mb-4">
                        <h3 class="h2Jaune"><?php echo $titre; ?></h3>
                        <div class="livre-info">
                            <img src="<?php echo $livre['image']; ?>" alt="<?php echo $titre; ?>" class="img-fluid" />
                            <p><strong>Année :</strong> <?php echo $livre['annee']; ?></p>
                            <p><strong>Résumé :</strong> <?php echo $livre['resume']; ?></p>
                            <p><a href="<?php echo $livre['lien']; ?>" target="_blank" class="btn btn-primary">Télécharger le bon de commande</a></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination livres -->
            <div class="pagination">
                <a href="?page=<?php echo max(1, $pageActuelle - 1); ?>" class="prev">Précédent</a>
                <?php for ($i = 1; $i <= $totalLivres; $i++) : ?>
                    <a href="?page=<?php echo $i; ?>" class="page-num <?php echo $i == $pageActuelle ? 'active' : ''; ?>"><?php echo $i; ?></a>
                <?php endfor; ?>
                <a href="?page=<?php echo min($totalLivres, $pageActuelle + 1); ?>" class="next">Suivant</a>
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

            <!-- Pagination citations -->
            <div class="pagination">
                <!-- Bouton Précédent -->
                <a href="?page=<?php echo max(1, $pageActuelle - 1); ?>" class="prev">Précédent</a>

                <!-- Numéros de page -->
                <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                    <a href="?page=<?php echo $i; ?>" class="page-num <?php echo $i == $pageActuelle ? 'active' : ''; ?>"><?php echo $i; ?></a>
                <?php endfor; ?>

                <!-- Bouton Suivant -->
                <a href="?page=<?php echo min($totalPages, $pageActuelle + 1); ?>" class="next">Suivant</a>
            </div>
        </div>
    </section>

</main>

<?php include("footer.php"); ?>

</body>
</html>
