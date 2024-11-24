<?php
    // Constantes pour les URLs
    define('', '');
?>

<header>
    <div class="">
        <div class="navbar-brand">
            <div class="container-fluid">
                <!-- Logo et titre -->
                <a class="navbar-brand ms-2" href="index.php">
                    <img src="images/logo." alt="Logo Edi'lybris" class="logo" style="height: 50px; width: auto;">
                    <strong class="text-white nav-brand-logo">
                        <span class="">Edi'lybris</span>
                    </strong>
                </a>
            </div>
        </div>

        <nav class="navbar navbar-expand-md">
            <div class="container-fluid">
                <!-- Bouton hamburger -->
                <button class="navbar-toggler custom-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menu collapsé -->
                <div class="collapse navbar-collapse mt-2 background-navbar" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto text-center me-3">
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="index.php"><strong>Accueil</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="auteurs.php"><strong>Les Auteurs</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="actualite.php"><strong>L'actualité</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="formulaireDeContact.php"><strong>Nous Contactez !</strong></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div id="special-header">
        <video autoplay muted id="video-bg" playsinline>
            <source src="videos/banner.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la vidéo.
        </video>
    </div>
</header>
