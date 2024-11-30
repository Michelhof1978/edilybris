<?php include("head.php"); ?>

<title></title>
<meta name="description" content="">

<style>
    
</style>
</head>

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
                <img src="images/pierreBrandao/pierreBrandao.png" alt="Jean Dupont" class="bio-image">
                <div class="bio-text">
                    <p>Il n'a pas fallu longtemps à Pierre Brandao pour trouver un attrait particulier au verbe poétique...<br> Six recueils verront le jour, dont certains totalement épuisés... Découvrez-les !</p>
                </div>
            </div>
        </div>
    </section>

    <section class="livres">
        <div class="containerAuteur">
            <h2>Les Livres de Pierre Brandao</h2>

            <!-- Livre 1 -->
            <div class="livre">
                <img src="images/pierreBrandao/leCoeurAsesSaisons.png" alt="Couverture du livre Le Voyage Intérieur">
                <div class="details">
                    <h3 class="h2Jaune">Le Voyage Intérieur</h3>
                    <p class="annee text-white"><strong>Année de publication :</strong> 2005</p>
                    <p><strong>Résumé :</strong> Ce roman suit le parcours de Marc, un jeune homme en quête de sens...</p>
                    <!-- Lien de téléchargement du bon de commande -->
                    <a href="documents/bon_de_commande_voyage_interieur.pdf" class="lien" download>Télécharger le bon de commande</a>
                </div>
            </div>

            <!-- Livre 2 -->
            <div class="livre">
                <img src="images/pierreBrandao/luciolesMagiques.png" alt="Couverture du livre Les Ombres du Passé">
                <div class="details">
                    <h3 class="h2Jaune">Les Ombres du Passé</h3>
                    <p class="annee text-white"><strong>Année de publication :</strong> 2009</p>
                    <p><strong>Résumé :</strong> Ce roman mêle suspense et émotion en suivant une famille marquée par un lourd secret...</p>
                    <!-- Lien de téléchargement du bon de commande -->
                    <a href="documents/bon_de_commande_ombres_du_passe.pdf" class="lien" download>Télécharger le bon de commande</a>
                </div>
            </div>

            <!-- Livre 3 -->
            <div class="livre">
                <img src="images/pierreBrandao/XLlamourafleurdame.png" alt="Couverture du livre Les Mots de l'Amour">
                <div class="details">
                    <h3 class="h2Jaune">Les Mots de l'Amour</h3>
                    <p class="annee text-white"><strong>Année de publication :</strong> 2015</p>
                    <p><strong>Résumé :</strong> Un recueil de nouvelles qui explore diverses facettes de l'amour...</p>
                    <!-- Lien de téléchargement du bon de commande -->
                    <a href="documents/bon_de_commande_mots_de_lamour.pdf" class="lien" download>Télécharger le bon de commande</a>
                </div>
            </div>

            <!-- Livre 4 -->
            <div class="livre">
                <img src="images/pierreBrandao/XLlamuserie.png" alt="Couverture du livre Le Dernier Chapitre">
                <div class="details">
                    <h3 class="h2Jaune">Le Dernier Chapitre</h3>
                    <p class="annee text-white"><strong>Année de publication :</strong> 2020</p>
                    <p><strong>Résumé :</strong> Le Dernier Chapitre raconte l’histoire de Claire...</p>
                    <!-- Lien de téléchargement du bon de commande -->
                    <a href="documents/bon_de_commande_dernier_chapitre.pdf" class="lien" download>Télécharger le bon de commande</a>
                </div>
            </div>

        </div>
    </section>

    <section class="citations text-white">
        <div class="container">
            <h2 class="h2Jaune">Citations</h2>
            <blockquote>
                <p>"Écrire, c'est plonger dans les méandres de l'âme humaine pour en sortir avec des mots qui résonnent comme des vérités universelles." - Jean Dupont</p>
            </blockquote>
            <blockquote>
                <p>"L'amour est un chemin tortueux, mais c'est aussi le seul chemin qui vaille la peine d'être emprunté." - Jean Dupont</p>
            </blockquote>
        </div>
    </section>
</main>

<?php include("footer.php"); ?>
</body>
</html>
