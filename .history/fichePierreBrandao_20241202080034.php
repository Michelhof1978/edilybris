<?php include("head.php"); ?>

<title>Pierre Brandao - Auteur</title>
<meta name="description" content="Biographie et livres de Pierre Brandao. Découvrez ses œuvres et téléchargez un bon de commande.">

</head>

<?php
// Nombre de citations par ligne (6 par ligne)
$citationsParLigne = 6;

// Nombre total de citations
$totalCitations = 5; // (puisque nous avons 5 citations dans le tableau)

// Récupérer la page actuelle depuis l'URL (si elle existe), sinon page 1 par défaut
$pageActuelle = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculer la position de départ des citations pour la page actuelle
$debut = ($pageActuelle - 1) * $citationsParLigne;

// Tableau de citations (ajoute les contenus pour chaque citation)
$citations = [
    'Belle' => "                            Plus belle qu'une aurore,<br>
                            Plus tendre qu'un baiser<br>
                            Je chanterai ton corps<br>
                            Jusqu'à en être osé<br>
                            Femme aux cheveux d'or...<br><br>

                            Il faudra me taire le long du chemin<br>
                            L'incroyable vérité de notre destin ;<br>
                            Pourtant notre amour est si pur<br>
                            Que ne peut se conter notre aventure.<br><br>

                            Ton cœur est le journal intime<br>
                            Qui couve notre doux crime.<br><br>

                            Plus belle qu'un printemps,<br>
                            Plus libre que la neige,<br>
                            Je caresserai ton sang<br>
                            D'un tendre sortilège<br>
                            Femme de sentiments...<br><br>

                            Pas à pas le secret charnel demeure<br>
                              Rythme nécessaire du bonheur  <br>
                            Tandis qu'un monde hostile nous importune,<br>
                            Jugeant notre amour d'une tribune.<br><br>

                            Ton cœur devient le joyau précieux<br>
                            Dont la pierre sont tes yeux...<br><br>

                            Plus belle qu'une aurore,<br>
                            Plus tendre qu'un baiser<br>
                            Je chanterai ton corps<br>
                            Jusqu'à en être osé<br>
                            Femme aux cheveux d'or...<br><br>

                            Plus belle qu'un printemps,<br>
                            Plus libre que la neige,<br>
                            Je caresserai ton sang<br>
                            D'un tendre sortilège<br>
                            Femme de sentiments...<br><br>

                            J'irai<br>
                            Cueillir ma tendresse<br>
                            Au pistil de tes lèvres<br>
                            Fleur du plus beau rêve...
",
    'Croire en qui?' => "Je ne suis qu’un enfant, ô mon Dieu... pour que je ne dise plus : pour Qui?",
    'Lavandière' => "J’accompagne ma mère au lavoir du passé... À l’intérieur de ta chaumière !",
    'Le Fou et sa Reine' => "Je suis ton fou, tu es ma reine... Le tour des mots fait que ma peine...",
    'Une Ampoule Claque' => "Une ampoule claque... Au firmament des étincelles..."
];

// Obtenir les citations pour la page actuelle
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

    <!-- Section citations -->
    <section class="citations text-white py-4">
        <div class="container">
            <h2 class="h2Jaune text-center mb-4">MAGASIN DE POÈMES À CHANTER</h2>

            <div class="row">
                <?php foreach ($citationsPage as $titre => $citation) : ?>
                    <div class="col-md-2 mb-4">
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

