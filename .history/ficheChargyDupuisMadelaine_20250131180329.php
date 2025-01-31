<?php include("head.php"); ?>

<title></title>
<meta name="description" content="Biographie et livres de Madelaine Chargy Dupuis. Découvrez ses œuvres et téléchargez un bon de commande.">

<style>
body {
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    background-image: url('images/fondBleu.webp') !important;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;   
}
</style>
</head>

<body>
<?php include("header.php"); ?>

<div class="headerAuteur">
    <div class="containerAuteur">
        <h1>Madelaine Chargy Dupuis</h1>
        <img src="images/ChargyDupuisMadelaine/ChargyDupuisMadelaine.webp" alt="Christine Kunz" class="img-fluid bio-image">
    </div>
</div>

<main>
    <!-- MODE MOBILE Essen-ciel Destin -->
    <div class="d-block d-md-none mt-5">
        <div id="mobile-group1PierreBrandao" class="mobile-books-container">
            <div class="mobile-book-card">
                <a href="ficheChargyDupuisMadelaineEsse-cieklDestin.php">
                    <img src="images/ChargyDupuisMadelaine/COUV RECTO ESSEN CIELS DESTINS _ MCD_11zon.webp" class="img-fluid" alt="Couverture de livre Abreuver le fou qui dort en nos déserts">
                    <div class="mobile-book-details">
                        <div class="mobile-book-author">Madelaine Chargy Dupuis</div>
                        <div class="mobile-book-price">12,00 €</div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- MODE DESKTOP -->
    <div class="d-none d-md-block mt-5">
        <div id="desktop-group1PierreBrandao" class="new-card-container">
            <div class="new-card">
                <a href="ficheChargyDupuisMadelaineEsse-cieklDestin.php">
                    <img src="images/ChargyDupuisMadelaine/COUV RECTO ESSEN CIELS DESTINS _ MCD_11zon.webp" class="img-fluid" alt="Couverture de livre Abreuver le fou qui dort en nos déserts">
                    <div class="new-card-content">
                        <div class="new-card-author">Madelaine Chargy Dupuis</div>
                        <div class="new-card-price">12,00 €</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>

<?php include("footer.php"); ?>
</body>
</html>