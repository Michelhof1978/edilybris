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

// Tableau de citations (ajoute les contenus pour chaque citation)
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
                            Elle s’est fait avoir, c’est un vulgaire maqu’
                            Elle ne la croit pas : elle n’est que sa mère !<br>

                            Tu frictionnes la mort en brossant fort !
                            Tape, tape lavandière !<br>
                            Et sourire c’est sans effort
                            À l’intérieur de ta chaumière !",
    'Le Fou et sa Reine' => "Je suis ton fou, tu es ma reine
                            Me ferai plus cavalier que ton roi
                            Le tour des mots fait que ma peine
                            A meurtri le pion de mon désarroi<br>

                            J’épouse à l’orée des silences
                            Le châtiment d’un poète maudit
                            Toi sur les blanches tu t’élances
                            Oubliant la passion et l’interdit<br>

                            Si ma défaite se déchaîne
                            Au risque de provoquer ton effroi
                            Supplie qu’un soleil de phalènes
                            Adoucisse le feu de mes pourquoi
                            Je suis ton fou, tu es ma reine
                            Me ferai plus cavalier que ton roi.<br>

                            Je me bats sur un territoire
                            Mais je sais le combat déjà perdu
                            Il reste cette belle histoire
                            Sur l’échiquier le fou est descendu<
                            Je suis échec et mat,
                            Je suis échec et mat…<br>

                            Au jeu d’ouvertures tu mènes,
                            Stratège remarquable au regard froid
                            Tu abats les pions dans tes chaînes
                            Pour le plaisir de terminer par moi
                            Je suis ton fou, tu es ma reine
                            Me ferai plus cavalier que ton roi.<br>

                            Rangeons le plateau dans l’armoire
                            Afin que les regrets soient moins amers
                            Ton fou à l’haubert dérisoire
                            N’écoutera pas l’appel de la mer…
                            La folie c’est aimer,
                            La folie c’est aimer…<br>

                            Je suis ton fou, tu es ma reine
                            Me ferai plus cavalier que ton roi
                            Le tour des mots fait que ma peine
                            A meurtri le pion de mon désarroi
                            Je suis ton fou, tu es ma reine
                            Me ferai plus cavalier que ton roi.
",
    'Une Ampoule Claque' => "Une ampoule claque
                            Tu titubes dans le noir
                            Face à tes peurs face à tes doutes
                            Et ton cœur de désespoir
                            Chamboule tout et se déroute…<br>

                            Une ampoule claque<br>
                            Tombe en verdict sans appel
                            L’horizon de tes certitudes
                            S’abime dans l’abîme irréel
                            Des lendemains sans habitude…<br>

                            Refrain : Je ne sais où se trouve le fusible
                            Tant je tâtonne trébuchant
                            Derrière quelle porte quelle cible
                            L’éclaircie supporte le chant ?<br>

                            Une ampoule claque
                            Tu chancelles dans le néant
                            Face au chambranle des larmes
                            Ton existence de géant
                            N’est plus qu’un champ de vacarmes…<br>

                            Une ampoule claque
                            Tu saisis prestement le loquet
                            Il tourne dans le vide en silence
                            Laissant ton regard hébété
                            D’un avenir en souffrance…<br>

                            Refrain : Je ne sais où se trouve le fusible
                            Tant je tâtonne trébuchant
                            Derrière quelle porte quelle cible
                            L’éclaircie supporte le chant ?<br>

                            Une ampoule neuve<br>
                            Dans la paume se fait jour
                            Ce sourire qui chancelle
                            Est un beau signe d’amour
                            Au firmament des étincelles...
"
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
                <img src="images/pierreBrandao/XLlamuserie.png" class="img-fluid" alt="Couverture du livre Le Voyage Intérieur">
                <div class="details">
                    <h3 class="h2Jaune">L'AMUSERIE (ET PLEURE PARFOIS)</h3>
                    <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2005</p>
                    <p><strong class="h2Jaune">Résumé :</strong> Ce septième recueil de poésies de Pierre Brandao regroupe des textes dont le fil conducteur est la musique des mots, la mélodie des émotions, l’inspiration du coeur.

À l’instar d’une épicerie imaginaire, l’Amuserie vous propose cinq rayons qui sauront occuper vos aspirations de liberté : Amour et tendresse – Révolte – C’est la vie ! – Vague à l’âme – Bazar.

Pour vous plaire, l’Amuse-rit (et pleure parfois) évoque les joies des passions, les colères éphémères, les doutes existentiels et les blessures quotidiennes dont on se passerait bien, mais qui font aussi partie de la nécessité de vivre.

L’auteur plagierait bien volontiers Michel Sardou en fredonnant que tout est prétexte à chanson : cet ouvrage l’illustre parfaitement ! Alors, si un air vous trotte dans la tête en lisant, ne vous étonnez pas : c’est voulu !</p>
                    <a href="images/bulletin-de-commande-2024.pdf" class="lien text-white fw-bold" download>Télécharger le bon de commande</a>
                </div>
            </div>
  <!-- Livre 2 -->
  <div class="livre">
    <!-- Couverture du livre -->
    <img src="images/pierreBrandao/leCoeurAsesSaisons.png" class="img-fluid" alt="Couverture du livre Le Voyage Intérieur">

    <!-- Détails du livre -->
    <div class="details">
        <h3 class="h2Jaune">LE COEUR A SES SAISONS</h3>
        <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2005</p>
        <p><strong class="h2Jaune">Résumé :</strong> Il en va du temps comme des sentiments... Les pupilles s’ouvrent au printemps, les yeux brillent en été, l’ombre des paupières secoue l’automne et l’humidité du regard regrette l’hiver... et tout recommence... Ainsi, Pierre, par ses textes, et Michel, par ses clichés, révèlent un cycle dans lequel la féminité est omniprésente. Beauté des mots et de l’image, le temps est une femme aux multiples tempéraments : c’est aux deux que cet hommage est rendu !</p>

        <!-- Lien pour télécharger le bon de commande -->
        <a href="images/bulletin-de-commande-2024.pdf" class="lien text-white fw-bold" download>Télécharger le bon de commande</a>
    </div>
</div>

<!-- Image centrée à la fin -->
<div class="text-center">
    <img src="images/pierreBrandao/michel-bourriau-et-pierre-brandao.jpg" alt="Image centrée" class="img-fluid mx-auto d-block">
</div>

<!-- Texte supplémentaire -->
<div class="extraits">
    <h4 class="text-center text-white mt-4">Extraits du livre :</h4>

    <!-- Premier extrait -->
    <p class="text-white text-center mt-2">« Le temps, comme un voile, se pose sur nos épaules, invisible mais pesant, doux mais cruel… »</p>

    <!-- Deuxième extrait -->
    <p class="text-white text-center mt-2">« Chaque saison porte en elle un souvenir, chaque saison est une femme qui nous apprend à aimer et à souffrir… »</p>
</div>


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
