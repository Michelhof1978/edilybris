<?php include("head.php"); ?>

<title>Pierre Brandao - Auteur</title>
<meta name="description" content="Biographie et livres de Pierre Brandao. Découvrez ses œuvres et téléchargez un bon de commande.">

</head>

<?php
// Nombre de citations par page
$citationsParPage = 3;

// Récupérer la page actuelle depuis l'URL (si elle existe), sinon page 1 par défaut
$pageActuelle = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculer la position de départ des citations pour la page actuelle
$debut = ($pageActuelle - 1) * $citationsParPage;

// Tableau de citations (à remplacer par des données dynamiques ou une base de données)
$citations = [
    'Belle', 'Croire en qui?', 'Lavandière', 'Le Fou et sa Reine', 'Une Ampoule Claque'
];

// Obtenir les citations pour la page actuelle
$citationsPage = array_slice($citations, $debut, $citationsParPage);

// Calculer le nombre total de pages
$totalPages = ceil(count($citations) / $citationsParPage);
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

            <!-- Section image et texte -->
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

            <!-- Livre 1 -->
            <div class="livre">
                <img src="images/pierreBrandao/leCoeurAsesSaisons.png" class="img-fluid" alt="Couverture du livre Le Voyage Intérieur">
                <div class="details">
                    <h3 class="h2Jaune">Le Voyage Intérieur</h3>
                    <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2005</p>
                    <p><strong class="h2Jaune">Résumé :</strong> Ce roman suit le parcours de Marc, un jeune homme en quête de sens. À travers une série de rencontres et de révélations, il entreprend un voyage initiatique qui l'amène à se découvrir lui-même et à explorer les différentes facettes de l'existence humaine. Entre philosophie et fiction, ce livre est une réflexion poignante sur la quête de vérité et d'identité.</p>
                    <a href="images/bulletin-de-commande-2024.pdf" class="lien text-white fw-bold" download>Télécharger le bon de commande</a>
                </div>
            </div>

        </div>
    </section>

    <main>
    <section class="citations text-white py-4">
    <div class="container">
        <h2 class="h2Jaune text-center mb-4">MAGASIN DE POÈMES À CHANTER</h2>

        <?php foreach ($citationsPage as $citation) : ?>
            <div class="row mb-4">
                <div class="col-md-6">
                    <h3 class="h2Jaune"><?php echo $citation; ?></h3>
                    <blockquote>
                        <p> <!-- Ajoute ici le contenu de ta citation --> </p>
                    </blockquote>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Pagination -->
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