<?php
include("head.php");

// Nombre de citations par ligne (2 citations par ligne)
$citationsParLigne = 2;

// Nombre total de citations
$totalCitations = 5; // (puisque nous avons 5 citations dans le tableau)

// Récupérer la page actuelle depuis l'URL (si elle existe), sinon page 1 par défaut
$pageActuelle = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculer la position de départ des citations pour la page actuelle
$debut = ($pageActuelle - 1) * $citationsParLigne;

// Tableau de citations (ajoute les contenus pour chaque citation)
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
                            Au firmament des étincelles..."
];

// Obtenir les citations pour la page actuelle
$citationsPage = array_slice($citations, $debut, $citationsParLigne, true);

// Afficher les livres de Pierre Brandao et les citations
?>
<section class="livres">
    <div class="containerAuteur">
        <h2>Les Livres de Pierre Brandao</h2>

        <!-- Livre 1 -->
        <div class="livre">
            <img src="images/pierreBrandao/XLlamuserie.png" class="img-fluid w-75" alt="Couverture du livre Le Voyage Intérieur">
            <div class="details">
                <h3 class="h2Jaune">L'AMUSERIE (ET PLEURE PARFOIS)</h3>
                <p class="annee text-white"><strong class="h2Jaune">Année de publication :</strong> 2005</p>
                <p><strong class="h2Jaune">Résumé :</strong> Ce septième recueil de poésies de Pierre Brandao regroupe des textes dont le fil conducteur est la musique des mots, la mélodie des émotions, l’inspiration du cœur...</p>
                <a href="images/bulletin-de-commande-2024.pdf" class="lien text-white fw-bold" download>Télécharger le bon de commande</a>
            </div>
        </div>

        <!-- Afficher les citations de la page actuelle -->
        <?php
        foreach ($citationsPage as $titre => $citation) {
            echo "<h2>$titre</h2>";
            echo "<p>$citation</p>";
        }

        // Afficher les liens de pagination
        echo "<div class='pagination'>";
        for ($page = 1; $page <= $totalPages; $page++) {
            if ($page == $pageActuelle) {
                echo "<span class='current'>$page</span>";
            } else {
                echo "<a href='pierreBrandao" . ($page) . ".php'>$page</a>";
            }
        }
        echo "</div>";
        ?>
    </div>
</section>
