<?php include("head.php"); ?>

<title>Pierre Brandao - Auteur</title>
<meta name="description" content="Biographie et livres de Pierre Brandao. Découvrez ses œuvres et téléchargez un bon de commande.">

</head>
<?php
// PAGINATION LIVRE-------------------------------------------------------
// Configuration des livres et de la pagination
$livresParPage = 1; // Nombre de livres par page
$livres = [
    [
        'titre' => "L'AMUSERIE (ET PLEURE PARFOIS)",
        'image' => 'images/pierreBrandao/XLlamuserie.png',
        'annee' => '2005',
        'resume' => "Ce septième recueil de poésies regroupe des textes dont le fil conducteur est la musique des mots...",
        'prix' => '15,00 €',
        'lien' => 'images/bulletin-de-commande-2024.pdf',
    ],
    [
        'titre' => "Le coeur a ses saisons",
        'image' => 'images/pierreBrandao/leCoeurAsesSaisons.png',
        'annee' => '2010',
        'resume' => "Il en va du temps comme des sentiments... Les pupilles s’ouvrent au printemps...",
        'prix' => '15,00 €',
        'lien' => 'images/bulletin-de-commande-2024.pdf',
    ],
    [
        'titre' => "Titre du Livre 3",
        'image' => 'images/pierreBrandao/XLlivre3.png',
        'annee' => '2015',
        'resume' => "Résumé du livre 3...",
        'prix' => '15,00 €',
        'lien' => 'images/bulletin-de-commande-2024.pdf',
    ],
    // Ajoutez d'autres livres ici
];

// Définir la page actuelle et calculer l'index de début
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$debut = ($page - 1) * $livresParPage;

// Extraire les livres pour la page actuelle
$livresPage = array_slice($livres, $debut, $livresParPage, true);

// Calcul pour les boutons de navigation
$totalPages = ceil(count($livres) / $livresParPage);

?>


<?php include("header.php"); ?>


<main>
<?php include("fichePierreBrandaoLivres.php"); ?>

<main></main>

<?php include("fichePierreBrandaoCitations.php"); ?>


<?php include("footer.php"); ?>

</body>
</html>
