<?php
// Nombre de citations par ligne (2 par ligne)
$citationsParLigne = 2;

// Récupérer la page actuelle depuis l'URL (si elle existe), sinon page 1 par défaut
$pageActuelle = isset($_GET['page']) ? (int) $_GET['page'] : 1;

// Tableau de citations (toutes les citations que tu as mentionnées)
$citations = [
    'Belle' => "Plus belle qu'une aurore,
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
                Fleur du plus beau rêve...",

    'Croire en qui?' => "Je ne suis qu’un enfant, ô mon Dieu,
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
                        Pour que je ne dise plus : pour Qui ?",

    'Lavandière' => "J’accompagne ma mère au lavoir du passé,
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
                             Sur l’échiquier le fou est descendu<br>
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
                             Me ferai plus cavalier que ton roi.",

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
                             Au firmament des étincelles...",

    'Souffle d\'une plume' => "Plus belle qu'une aurore,
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
                               Fleur du plus beau rêve...",
                               
    'FLEUR D\'AUTOMNE' => "Moi, j’ai saisi sur son dos dénudé
                            Une coque de gland tombée du chêne
                            Un vent plus froid qu’une brise d’été
                            L’avait portée comme une aubaine
                            J’adore la force de ces transports
                            Qui font du mouvement un beau support !<br>

                            Moi, j’avoue avoir beaucoup frissonné
                            Sur cette chute de rien en cascade
                            Patchwork d’été indien désordonné
                            Mêlant les couleurs ocre, miel et jade.
                            J’attise le feu offert par ce corps
                            Qui délivrerait les plus beaux accords !<br>

                            Moi, à la naissance de son regard,
                            J’ai remarqué sa gabardine sombre
                            Reste de rosée d’un matin blafard
                            Une goutte de rire choit dans l’ombre.
                            Ah ! ces instants où la raison a tort
                            Rendent à la passion un bel essor !<br>

                            Moi, j’ai vu sur son sein abandonné
                            Se poser une feuille de platane
                            Un frimas d’automne l’a condamnée
                            À mourir sur son ventre diaphane
                            J’aime ces départs en contraste fort
                            Ils respirent la vie plutôt que la mort !",
];

$totalCitations = count($citations);

// Calculer la position de départ des citations pour la page actuelle
$debut = ($pageActuelle - 1) * $citationsParLigne;

// Obtenir les citations pour la page actuelle
$citationsPage = array_slice($citations, $debut, $citationsParLigne, true);

// Calculer le nombre total de pages
$totalPages = ceil($totalCitations / $citationsParLigne);
?>

<!-- Section citations -->
<section id="citations-section" class="citations text-white py-4">
    <div class="container">
        <h2 class="h2Jaune text-center mb-4">MAGASIN DE POÈMES À CHANTER</h2>
        <div class="text-center">
            <img class="img-fluid w-25" src="images/poeme.png" alt="Image centrée">
        </div>
        <div class="row" id="citations-container">
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
        <div class="pagination" id="monBouton">
            <!-- Bouton Précédent -->
            <a href="?page=<?php echo max(1, $pageActuelle - 1); ?>" class="prev" data-page="<?php echo max(1, $pageActuelle - 1); ?>">Précédent</a>

            <!-- Numéros de page -->
            <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                <a href="?page=<?php echo $i; ?>" class="page-num <?php echo $i == $pageActuelle ? 'active' : ''; ?>" data-page="<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endfor; ?>

            <!-- Bouton Suivant -->
            <a href="?page=<?php echo min($totalPages, $pageActuelle + 1); ?>" class="next" data-page="<?php echo min($totalPages, $pageActuelle + 1); ?>">Suivant</a>
        </div>
    </div>
</section>
