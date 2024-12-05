<?php include("head.php"); ?>

<title>Pierre Brandao - Auteur</title>
<meta name="description" content="Biographie et livres de Pierre Brandao. Découvrez ses œuvres et téléchargez un bon de commande.">

</head>


<?php include("header.php"); ?>

<!-- Diviser l'écran en deux sections principales -->
<div class="content-container">
    <section class="main-section">
        <h2>Mes livres</h2>
        <?php include("fichePierreBrandaoLivres.php"); ?>
    </section>

    <section class="main-section">
        <h2>Citations</h2>
        <?php include("fichePierreBrandaoCitations.php"); ?>
    </section>
</div>


<!-- <?php include("fichePierreBrandaoLivres.php"); ?> -->
    
<?php include("fichePierreBrandaoCitations.php"); ?>


<?php include("footer.php"); ?>

</body>
</html>
