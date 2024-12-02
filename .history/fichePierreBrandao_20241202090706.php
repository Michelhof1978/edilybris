<?php include("head.php"); ?>

<title>Pierre Brandao - Auteur</title>
<meta name="description" content="Biographie et livres de Pierre Brandao. Découvrez ses œuvres et téléchargez un bon de commande.">
</head>

<?php
// Tableau de citations
$citations = [
    'Belle' => "...",
    'Croire en qui?' => "...",
    'Lavandière' => "...",
    'Le Fou et sa Reine' => "...",
    'Une Ampoule Claque' => "..."
];
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
                <?php foreach ($citations as $titre => $citation) : ?>
                    <div class="col-md-6 mb-4">
                        <h3 class="h2Jaune"><?php echo $titre; ?></h3>
                        <blockquote>
                            <p><?php echo nl2br($citation); ?></p>
                        </blockquote>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</main>

<?php include("footer.php"); ?>

</body>
</html>
