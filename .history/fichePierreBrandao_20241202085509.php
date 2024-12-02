<?php include("head.php"); ?>

<title>Pierre Brandao - Auteur</title>
<meta name="description" content="Biographie et livres de Pierre Brandao. Découvrez ses œuvres et téléchargez un bon de commande.">

</head>

<?php
// Nombre de citations par ligne (1 citation par ligne sur la première page)
$citationsParLigne = 1;

// Nombre total de citations
$totalCitations = 5; // (puisque nous avons 5 citations dans le tableau)

// Récupérer la page actuelle depuis l'URL (si elle existe), sinon page 1 par défaut
$pageActuelle = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculer la position de départ des citations pour la page actuelle
$debut = ($pageActuelle - 1) * $citationsParLigne;

// Tableau de citations
$citations = [
    'Belle' => "            Plus belle qu'une aurore,
                            Plus tendre qu'un baiser
                            Je chanterai ton corps
                            Jusqu'à en être osé
                            Femme aux cheveux d'or...<br>
                            ...",
    'Croire en qui?' => "   Je ne suis qu’un enfant, ô mon Dieu,
                            Pourtant je ne sais ce qu’on me veut : 
                            Ma mère me bat, mon père boit,
                            Et il me faut croire en votre foi ?<br>
                            ...",
    'Lavandière' => "       J’accompagne ma mère au lavoir du passé,
                            J’aime à l’entendre rire en compagnie des dames ;
                            Son bac à linge et le jupon retroussé,
                            Elle sert le bébé accroché à sa mamme !<br>
                            ...",
    'Le Fou et sa Reine' => "Je suis ton fou, tu es ma reine
                            Me ferai plus cavalier que ton roi
                            Le tour des mots fait que ma peine
                            A meurtri le pion de mon désarroi<br>
                            ...",
    'Une Ampoule Claque' => "Une ampoule claque
                            Tu titubes dans le noir
                            Face à tes peurs face à tes doutes
                            Et ton cœur de désespoir
                            Chamboule tout et se déroute…<br>
                            ...",
];

// Obtenir les citations pour la page actuelle (une seule citation par page)
$citationsPage = array_slice($citations, $debut, $citationsParLigne, true);

// Calculer le nombre total de pages
$totalPages = ceil($totalCitations / $citationsParLigne);
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
            <h2>Les Livres de Pierre Brandao</h2>
            <div class="livre">
                <img src="images/pierreBrandao/XLlamuserie.png" class="img-fluid w-75" alt="Couverture du livre Le Voyage Intérieur">
                <div class="details">
                    <h3 class="h2Jaune">L'AMUSERIE (ET PLEURE PARFOIS)</h3>
                    <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2005</p>
                    <p><strong class="h2Jaune">Résumé :</strong> Ce septième recueil de poésies...</p>
                    <a href="images/bulletin-de-commande-2024.pdf" class="lien text-white fw-bold" download>Télécharger le bon de commande</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section citations -->
    <section class="citations text-white py-4">
        <div class="container">
            <h2 class="h2Jaune text-center mb-4">MAGASIN DE POÈMES À CHANTER</h2>

            <div class="row">
                <?php foreach ($citationsPage as $titre => $citation) : ?>
                    <div class="col-md-12 mb-4">
                        <h3 class="h2Jaune"><?php echo $titre; ?></h3>
                        <blockquote>
                            <p><?php echo nl2br($citation); ?></p>
                        </blockquote>
                    </div>
                <?php endforeach; ?>
            </div>

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
