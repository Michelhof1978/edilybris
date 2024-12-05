<?php
// PAGINATION LIVRE-------------------------------------------------------
// Configuration des livres et de la pagination
// $livresParPage = 1; // Nombre de livres par page
// $livres = [
//     [
//         'titre' => "L'AMUSERIE (ET PLEURE PARFOIS)",
//         'image' => 'images/pierreBrandao/XLlamuserie.png',
//         'annee' => '2005',
//         'resume' => "Ce septième recueil de poésies regroupe des textes dont le fil conducteur est la musique des mots...",
//         'prix' => '15,00 €',
//         'lien' => 'images/bulletin-de-commande-2024.pdf',
//     ],
//     [
//         'titre' => "Le coeur a ses saisons",
//         'image' => 'images/pierreBrandao/leCoeurAsesSaisons.png',
//         'annee' => '2010',
//         'resume' => "Il en va du temps comme des sentiments... Les pupilles s’ouvrent au printemps...",
//         'prix' => '15,00 €',
//         'lien' => 'images/bulletin-de-commande-2024.pdf',
//     ],
//     [
//         'titre' => "Titre du Livre 3",
//         'image' => 'images/pierreBrandao/XLlivre3.png',
//         'annee' => '2015',
//         'resume' => "Résumé du livre 3...",
//         'prix' => '15,00 €',
//         'lien' => 'images/bulletin-de-commande-2024.pdf',
//     ],
//     // Ajoutez d'autres livres ici
// ];

// // Définir la page actuelle et calculer l'index de début
// $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
// $debut = ($page - 1) * $livresParPage;

// // Extraire les livres pour la page actuelle
// $livresPage = array_slice($livres, $debut, $livresParPage, true);

// // Calcul pour les boutons de navigation
// $totalPages = ceil(count($livres) / $livresParPage);

// ?>




<div class="headerAuteur">
    <div class="containerAuteur">
        <h1>Pierre Brandao</h1>
        <p class="intro">Un écrivain au cœur de l'âme humaine</p>
    </div>
</div>

<main>
<section class="biographie">
    <div class="containerAuteur">
        <h2 class="h2Jaune">Biographie</h2>

        <!-- Section image et texte -->
        <div class="bio-content">
            <img src="images/pierreBrandao/pierreBrandao.png" alt="Pierre Brandao" class="img-fluid bio-image">
            <div class="bio-text">
                <p class="lead text-white">
                    Il n'a pas fallu longtemps à Pierre Brandao pour trouver un attrait particulier au verbe poétique. <br>
                    Dès la primaire, séduit par la musicalité du vers, il rendait ses devoirs en utilisant la rime. <br>
                    À quinze ans, il rencontre un poète, Gilles Sorgel, qui se fait fort de lui montrer la voie en lui enseignant les règles de la versification. <br>
                    En lui demandant de vérifier l'absence de coquilles d'un ouvrage intitulé "Traité de prosodie à l'usage des classiques -et des dissidents", il s'assurait ainsi que le jeune poète acquérait des bases solides. <br>
                    Bases qui lui ont permis, plusieurs années après, de rédiger en "vulgarisant" au mieux son propre traité de prosodie. <br>

                    C'est dans l'essence de la vie que Pierre puise ses sources d'inspiration ; il a une sensibilité à fleur de peau et sa susceptibilité également martèle les poèmes. <br>
                    La poésie est un cri de l'âme, mais elle est également le vase dans lequel repose les soucis de l'existence. <br>
                    Six recueils verront le jour, dont certains totalement épuisés. D'autres naîtront, à n'en pas douter ! Découvrons-les !
                </p>

                <!-- Bouton centré et plus grand -->
                <div class="text-center">
                    <a href="fichePierreBrandaoCitations.php" class="btnCitations">Découvrir les citations</a>
                </div>
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
            <p class=" fw-bold coloryellow mt-3 fs-4 lead ">15,00 €</p>
        </div>
        <div class="livre-details ">
            <h3 class="h2Jaune">L'AMUSERIE (ET PLEURE PARFOIS)</h3>
            <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2005</p>
            <p class="lead text-white"><strong class="h2Jaune">Résumé :</strong> Ce septième recueil de poésies de Pierre Brandao regroupe des textes dont le fil conducteur est la musique des mots, la mélodie des émotions, l’inspiration du coeur.

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
            <p class=" fw-bold coloryellow mt-3 fs-4 lead ">15,00 €</p>
            <img src="images/ficheAuteurlivres.png" class="img-fluid mt-5" alt="Couverture du livre 6">
            <img src="images/ficheAuteurlivres2.png" class="img-fluid mt-5" alt="Couverture du livre 6">

        </div>
                <div class="livre-details">
                    <h3 class="h2Jaune">LE COEUR A SES SAISONS</h3>
                    <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2010</p>
                    <p><strong class="h2Jaune">Résumé :</strong> Il en va du temps comme des sentiments... Les pupilles s’ouvrent au printemps, les yeux brillent en été, l’ombre des paupières secoue l’automne et l’humidité du regard regrette l’hiver... et tout recommence... Ainsi, Pierre, par ses textes, et Michel, par ses clichés, révèlent un cycle dans lequel la féminité est omniprésente. Beauté des mots et de l’image, le temps est une femme aux multiples tempéraments : c’est aux deux que cet hommage est rendu !</p>
                    <div class="text-center">
        <img class="img-fluid w-50 mb-3" src="images/pierreBrandao/michel-bourriau-et-pierre-brandao.jpg" alt="Image centrée">
    </div>
    <h3 class="h2Jaune">Présentation Michel Bourriau et Pierre Brandao</h3>
    <p class="lead text-white">Le rochelais <span><strong class="h2Jaune">Michel Bourriau</strong></span> n’a pas attendu la retraite pour se consacrer à la photographie. Sa thématique préférée depuis de nombreuses années : la féminité. 

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
                    <img src="images/pierreBrandao/luciolesMagiques.png" class="img-fluid" alt="Couverture du livre 3">
                <!-- Ajout du prix sous l'image -->
            <p class=" fw-bold coloryellow mt-3 fs-4 lead">15,00 €</p>
                </div>
                <div class="livre-details">
                    <h3 class="h2Jaune">LUCIOLES MAGIQUES</h3>
                    <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2015</p>
                    <p class="lead text-white"><strong class="h2Jaune">Résumé :</strong> LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net. De la passion des mots et des images ce recueil emporte le lecteur dans les sentiments troubles de la vie ; plutôt d'écriture libre, les thèmes évoqués ne pourront pas laisser indifférent. 

Recueil au format 21x29,7, totalement en couleurs, 26 pages de rêves poétiques. </p>
                    <a href="images/bulletin-de-commande-2024.pdf" class="lien text-white fw-bold" download>Télécharger le bon de commande</a>
                </div>
            </div>
        </div>

        <!-- Carte 4 -->
        <div id="livre-4" class="livre livre-hidden">
            <div class="livre-content">
                <div class="livre-image">
                    <img src="images/pierreBrandao/XLquesavonsnousdumonde.png" class="img-fluid" alt="Couverture du livre 4">
                <!-- Ajout du prix sous l'image -->
            <p class=" fw-bold coloryellow mt-3 fs-4 lead ">15,00 €</p>
                </div>
                <div class="livre-details">
                    <h3 class="h2Jaune">Pierre BRANDAO, SES RECUEILS DE POÉSIES</h3>
                    <h3 class="h2Jaune">QUE SAVONS-NOUS DU MONDE ?</h3>
                    <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2020</p>
                    <p class="lead text-white"><strong class="h2Jaune">Résumé :</strong> Ce recueil de poésies est le premier fruit d'une collaboration avec Marie, poète rencontrée sur le Net. Les interrogations posées interpellent chacun d'entre nous, et les réponses sont motivées par nos expériences personnelles mais aussi par l'espoir.

Bonne lecture des extraits ci-dessous !

Attention : ce recueil n'est plus disponible en version papier, uniquement en numérique.</p>
                    <a href="images/bulletin-de-commande-2024.pdf" class="lien text-white fw-bold" download>Télécharger le bon de commande</a>
                </div>
            </div>
        </div>

       <!-- Carte 5 -->
<div id="livre-5" class="livre livre-hidden">
    <div class="livre-content">
        <div class="livre-image">
            <img src="images/pierreBrandao/XLlamourafleurdame.png" class="img-fluid" alt="Couverture du livre 5">
            <p class="fw-bold coloryellow mt-3 fs-4 lead">15,00 €</p>
        </div>
        <div class="livre-details">
            <h3 class="h2Jaune">L'AMOUR À FLEUR D'ÂME</h3>
            <p><strong>ATTENTION : OUVRAGE ÉPUISÉ EN VERSION PAPIER <br>IL EXISTE UNE VERSION NUMÉRIQUE DES TEXTES SEULS ( PAS DE PARTITION NI DE CD)</strong></p>
            <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2018</p>
            <p class="lead text-white"><strong class="h2Jaune">Résumé :</strong> Cet ouvrage a été publié en 2001, par les éditions Cléa à Dijon. Une cinquantaine de textes a fait l'objet d'une interprétation musicale à l'occasion d'un spectacle donné à Surgères, par Music Art Diffusion (association présidée par Christian Méchin, directeur de l'école de musique de Surgères).<br><br>Bonne découverte !</p>

            <!-- Colonnes de texte -->
            <div class="row">
                <div class="col-md-6">
                    <h2>L'AMOUR A FLEUR D'AME : EXTRAITS</h2>
                    <h4 class="h2Jaune">Extrait 1</h4>
                    <p class="text-white">Voici un extrait du livre. Le texte s'étend sur plusieurs pages et explore des thèmes complexes de l'amour, des émotions et de la connexion humaine. L'écriture est poétique, profonde et remplie de sens, créant une atmosphère unique et captivante pour le lecteur.</p>
                </div>
                <div class="col-md-6">
                    <h4 class="h2Jaune">Extrait 2</h4>
                    <p class="text-white">Un autre extrait montre comment l'auteur utilise la musique et la poésie pour exprimer l'essence des relations humaines. Chaque texte est accompagné d'une réflexion qui invite à la contemplation, avec une fusion subtile entre les mots et la mélodie.</p>
                </div>
            </div>

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
            <p class=" fw-bold coloryellow mt-3 fs-4 lead ">15,00 €</p>
            <img src="images/pierreBrandao/XLlivre6.png" class="img-fluid" alt="Couverture du livre 6">

                </div>
                <div class="livre-details">
                    <h3 class="h2Jaune">Titre du Livre 6</h3>
                    <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2022</p>
                    <p class="lead text-white"><strong class="h2Jaune">Résumé :</strong> Résumé du livre 6...</p>
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
