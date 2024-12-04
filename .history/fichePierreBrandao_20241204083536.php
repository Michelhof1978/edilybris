<?php include("head.php"); ?>

<title>Pierre Brandao - Auteur</title>
<meta name="description" content="Biographie et livres de Pierre Brandao. Découvrez ses œuvres et téléchargez un bon de commande.">

</head>

<?php
// Nombre de citations par page (nombre dynamique)
$citationsParLigne = 2; // Ajustez pour le nombre souhaité

// Tableau de citations
$citations = [
    'Belle' => "            Plus belle qu'une aurore,
                            Plus tendre qu'un baiser
                            Je chanterai ton corps
                            Jusqu'à en être osé
                            Femme aux cheveux d'or...<br>

                            Il faudra me taire le long du chemin
                            L'incroyable vérité de notre destin ;
                            Pourtant notre amour est si pur
                            Que ne peut se conter notre aventure.<br>

                            Ton cœur est le journal intime
                            Qui couve notre doux crime.<br>

                            Plus belle qu'un printemps,
                            Plus libre que la neige,
                            Je caresserai ton sang
                            D'un tendre sortilège
                            Femme de sentiments...<br>

                            Pas à pas le secret charnel demeure
                            Rythme nécessaire du bonheur  
                            Tandis qu'un monde hostile nous importune,
                            Jugeant notre amour d'une tribune.<br>

                            Ton cœur devient le joyau précieux
                            Dont la pierre sont tes yeux...<br>

                            Plus belle qu'une aurore,
                            Plus tendre qu'un baiser
                            Je chanterai ton corps
                            Jusqu'à en être osé
                            Femme aux cheveux d'or...<br>

                            Plus belle qu'un printemps,
                            Plus libre que la neige,
                            Je caresserai ton sang
                            D'un tendre sortilège
                            Femme de sentiments...<br>

                            J'irai
                            Cueillir ma tendresse
                            Au pistil de tes lèvres
                            Fleur du plus beau rêve...
",
    'Croire en qui?' => "   Je ne suis qu’un enfant, ô mon Dieu,
                            Pourtant je ne sais ce qu’on me veut :
                            Ma mère me bat, mon père boit,
                            Et il me faut croire en votre foi ?<br>

                            Dimanche jour sacré de l’église,<br>
                            Je pleure à la vie, à votre emprise !
                            Tous les autres jours de la semaine
                            Je pleure à votre éducation saine !<br>

                            Refrain : Il me faut croire en qui, croire en quoi,
                            Pour que je ne dise plus : pourquoi ?<br>

                            Enfin adolescent ô mon Dieu,
                            Mon cœur se froisse de mieux en mieux :
                            J’entends crier la voix d’un ami
                            Qui malade va perdre la vie !
                            Et qui maudit tout bas ce visage
                            Grave : c’est le curé du village !<br>

                            Refrain : Il me faut croire en qui, croire en quoi,
                            Pour que je ne dise plus : pourquoi ?<br>

                            Quand je serai adulte, ô mon Dieu,
                            Prêt à suivre le chemin radieux
                            Que vous nous avez promis prochain,
                            Que penserai-je de ces humains
                            Cachés dans de profondes cellules ?
                            Est-ce votre foi qui les stimule ?<br>

                            Refrain : Il me faut croire en qui, croire en quoi,
                            Pour que je ne dise plus : pourquoi ?<br>

                            Ridé c’est mon futur ô mon Dieu,
                            À souffrir mon corps trop douloureux !
                            À souffrir chaque jour d’une messe
                            La voix de l’hypocrite promesse.
                            À souffrir dans chaque partition
                            La note aiguë de la confession ;
                            Et à souffrir le dernier voyage
                            D’un compagnon mort de son vieil âge !<br>

                            Refrain : Il me faut croire en quoi, croire en qui,
                            Pour que je ne dise plus : pour Qui ?
",
    'Lavandière' => "       J’accompagne ma mère au lavoir du passé,
                            J’aime à l’entendre rire en compagnie des dames ;
                            Son bac à linge et le jupon retroussé,
                            Elle sert le bébé accroché à sa mamme !<br>

                            Tu nettoies le pleur de son premier cri
                            Tape, tape lavandière,
                            Et cette vie qui te sourit
                            Illuminera ta chaumière !<br>

                            Je l’entends chuchoter au passage d’un gars
                            Et son amie de rire aux éclats de cascade
                            La bulle de savon emporte le mot gras
                            Il était si coquin ce temps de la bravade !<br>

                            Tu nettoies le rire audacieux des draps,
                            Tape, tape lavandière,
                            Et au soleil tu sècheras
                            Le tissu blanc de ta chaumière !<br>

                            Tu racontes ta vie étalant sur le bac<br>
                            Les jupes de ta gosse aux amours délétères ;
                            Elle s’est fait avoir, c’est un vulgaire maqu’<br>
                            Elle ne la croit pas : elle n’est que sa mère !<br>

                            Tu frictionnes la mort en brossant fort !
                            Tape, tape lavandière !<br>
                            Et sourire c’est sans effort
                            À l’intérieur de ta chaumière !
",
    // Ajoutez ici d'autres citations si nécessaire
];

// Calcul automatique du nombre total de citations
$totalCitations = count($citations);

// Récupérer la page actuelle depuis l'URL (défaut : 1)
$pageActuelle = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Calcul de la position de départ des citations pour cette page
$debut = ($pageActuelle - 1) * $citationsParLigne;

// Obtenir les citations pour la page actuelle
$citationsPage = array_slice($citations, $debut, $citationsParLigne, true);

// Calcul du nombre total de pages
$totalPages = ceil($totalCitations / $citationsParLigne);
?>

<p
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
        <h2>Les livres de Pierre Brandao</h2>

       <!-- Carte 1 --> 
<div id="livre-1" class="livre">
    <div class="livre-content">
        <div class="livre-image">
            <img src="images/pierreBrandao/XLlamuserie.png" class="img-fluid w-75" alt="Couverture du livre Le Voyage Intérieur">
            <!-- Ajout du prix sous l'image -->
            <p class=" fw-bold coloryellow mt-3 fs-4">15,00 €</p>
        </div>
        <div class="livre-details">
            <h3 class="h2Jaune">L'AMUSERIE (ET PLEURE PARFOIS)</h3>
            <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2005</p>
            <p><strong class="h2Jaune">Résumé :</strong> Ce septième recueil de poésies de Pierre Brandao regroupe des textes dont le fil conducteur est la musique des mots, la mélodie des émotions, l’inspiration du coeur.

À l’instar d’une épicerie imaginaire, l’Amuserie vous propose cinq rayons qui sauront occuper vos aspirations de liberté : Amour et tendresse – Révolte – C’est la vie ! – Vague à l’âme – Bazar.

Pour vous plaire, l’Amuse-rit (et pleure parfois) évoque les joies des passions, les colères éphémères, les doutes existentiels et les blessures quotidiennes dont on se passerait bien, mais qui font aussi partie de la nécessité de vivre.

L’auteur plagierait bien volontiers Michel Sardou en fredonnant que tout est prétexte à chanson : cet ouvrage l’illustre parfaitement ! Alors, si un air vous trotte dans la tête en lisant, ne vous étonnez pas : c’est voulu !</p>
            <a href="images/bulletin-de-commande-2024.pdf" class="lien text-white fw-bold" download>Télécharger le bon de commande</a>
        </div>
    </div>
</div>

        <!-- Carte 2 -->
        <div id="livre-2" class="livre livre-hidden">
            <div class="livre-content">
                <div class="livre-image">
                    <img src="images/pierreBrandao/leCoeurAsesSaisons.png" class="img-fluid" alt="Couverture du livre 2">
                <!-- Ajout du prix sous l'image -->
            <p class=" fw-bold coloryellow mt-3 fs-4">15,00 €</p>
            <img src="images/ficheAuteurlivres.png" class="img-fluid mt-5" alt="Couverture du livre 6">
            <img src="images/ficheAuteurlivres2.png" class="img-fluid mt-5" alt="Couverture du livre 6">

        </div>
                <div class="livre-details">
                    <h3 class="h2Jaune">Titre du Livre 2</h3>
                    <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2010</p>
                    <p><strong class="h2Jaune">Résumé :</strong> Il en va du temps comme des sentiments... Les pupilles s’ouvrent au printemps, les yeux brillent en été, l’ombre des paupières secoue l’automne et l’humidité du regard regrette l’hiver... et tout recommence... Ainsi, Pierre, par ses textes, et Michel, par ses clichés, révèlent un cycle dans lequel la féminité est omniprésente. Beauté des mots et de l’image, le temps est une femme aux multiples tempéraments : c’est aux deux que cet hommage est rendu !</p>
                    <div class="text-center">
        <img class="img-fluid w-50 mb-3" src="images/pierreBrandao/michel-bourriau-et-pierre-brandao.jpg" alt="Image centrée">
    </div>
    <h3 class="h2Jaune">Présentation Michel Bourriau et Pierre Brandao</h3>
    <p>Le rochelais <span><strong class="h2Jaune">Michel Bourriau</strong></span> n’a pas attendu la retraite pour se consacrer à la photographie. Sa thématique préférée depuis de nombreuses années : la féminité. 

Ses clichés, s’ils déshabillent parfois ses modèles, se drapent de charme, de douceur et d’un zeste de sensualité. Jamais de provocation inutile, il faut que la femme retrouve ce qu’il y a de beau en elle, ce qu’il y a d’intemporel dans ses formes, ce qu’il y a d’exceptionnel dans ses regards, gais, tristes, coquins, mystérieux.

C’est dans son travail que les textes de Pierre ont trouvé un reflet idéal. Au lecteur d’y trouver une part d’âme... et de sa propre existence...

Un an à peine après la sortie du livre, Michel Bourriau est tragiquement décédé à l'occasion d'une plongée dans l'océan Pacifique, près de Cuba.<br>

 

<span><strong class="h2Jaune">Pierre Brandao</strong></span>, s’il est connu du monde littéraire pour ses romans policiers, revient, avec «Le coeur a ses saisons...», à la poésie.

Ainsi, se jouant de la célèbre pensée de Pascal, il évoque les différents sentiments qui conduisent la destinée humaine. Coquins, subtils, tristes, profonds, moqueurs ou sincères, les poèmes se veulent le reflet des instants joyeux et pénibles de l’existence, à travers la symbolique des saisons.

Avec l’oeil averti de Michel, doublons le plaisir de la lecture avec celui du ravissement féminin : un beau mariage et une belle complicité que les deux artistes ont plaisir à vous offrir ! </p>
                    <a href="images/bulletin-de-commande-2024.pdf" class="lien text-white fw-bold" download>Télécharger le bon de commande</a>
                </div>
            </div>
        </div>

        <!-- Carte 3 -->
        <div id="livre-3" class="livre livre-hidden">
            <div class="livre-content">
                <div class="livre-image">
                    <img src="images/pierreBrandao/XLlivre3.png" class="img-fluid" alt="Couverture du livre 3">
                <!-- Ajout du prix sous l'image -->
            <p class=" fw-bold coloryellow mt-3 fs-4">15,00 €</p>
                </div>
                <div class="livre-details">
                    <h3 class="h2Jaune">Titre du Livre 3</h3>
                    <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2015</p>
                    <p><strong class="h2Jaune">Résumé :</strong> Résumé du livre 3...</p>
                    <a href="images/bulletin-de-commande-2024.pdf" class="lien text-white fw-bold" download>Télécharger le bon de commande</a>
                </div>
            </div>
        </div>

        <!-- Carte 4 -->
        <div id="livre-4" class="livre livre-hidden">
            <div class="livre-content">
                <div class="livre-image">
                    <img src="images/pierreBrandao/XLlivre4.png" class="img-fluid" alt="Couverture du livre 4">
                <!-- Ajout du prix sous l'image -->
            <p class=" fw-bold coloryellow mt-3 fs-4">15,00 €</p>
                </div>
                <div class="livre-details">
                    <h3 class="h2Jaune">Titre du Livre 4</h3>
                    <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2020</p>
                    <p><strong class="h2Jaune">Résumé :</strong> Résumé du livre 4...</p>
                    <a href="images/bulletin-de-commande-2024.pdf" class="lien text-white fw-bold" download>Télécharger le bon de commande</a>
                </div>
            </div>
        </div>

        <!-- Carte 5 -->
        <div id="livre-5" class="livre livre-hidden">
            <div class="livre-content">
                <div class="livre-image">
                    <img src="images/pierreBrandao/XLlivre5.png" class="img-fluid" alt="Couverture du livre 5">
               <!-- Ajout du prix sous l'image -->
            <p class=" fw-bold coloryellow mt-3 fs-4">15,00 €</p>
                </div>
                <div class="livre-details">
                    <h3 class="h2Jaune">Titre du Livre 5</h3>
                    <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2018</p>
                    <p><strong class="h2Jaune">Résumé :</strong> Résumé du livre 5...</p>
                    <a href="images/bulletin-de-commande-2024.pdf" class="lien text-white fw-bold" download>Télécharger le bon de commande</a>
                </div>
            </div>
        </div>

        <!-- Carte 6 -->
        <div id="livre-6" class="livre livre-hidden">
            <div class="livre-content">
                <div class="livre-image">
                    <img src="images/pierreBrandao/XLlivre6.png" class="img-fluid" alt="Couverture du livre 6">
                <!-- Ajout du prix sous l'image -->
            <p class=" fw-bold coloryellow mt-3 fs-4">15,00 €</p>
            <img src="images/pierreBrandao/XLlivre6.png" class="img-fluid" alt="Couverture du livre 6">

                </div>
                <div class="livre-details">
                    <h3 class="h2Jaune">Titre du Livre 6</h3>
                    <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2022</p>
                    <p><strong class="h2Jaune">Résumé :</strong> Résumé du livre 6...</p>
                    <a href="images/bulletin-de-commande-2024.pdf" class="lien text-white fw-bold" download>Télécharger le bon de commande</a>
                </div>
            </div>
        </div>

        <!-- Boutons de navigation -->
        <div class="livre-navigation d-flex justify-content-center mt-4">
            <button id="livre-backButton" class="livre-button" disabled>Précédent</button>
            <button id="livre-nextButton" class="livre-button">Suivant</button>
        </div>
    </div>
</section>



    <!-- Section citations -->
    <section class="citations text-white py-4">
        <div class="container">
            <h2 class="h2Jaune text-center mb-4">MAGASIN DE POÈMES À CHANTER</h2>
            <div class="text-center">
        <img class="img-fluid w-25" src="images/poeme.png" alt="Image centrée">
    </div>
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
