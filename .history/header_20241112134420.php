<?php
    // Constantes pour les URLs
    define('', '');
    ?>

<header>
        <div class="bg-dark">
            <div class="navbar-brand">
                <div class="container-fluid">
                    <!-- Logo et titre -->
                    <a class="navbar-brand ms-2" href="index.php">
                        <strong class="text-white nav-brand-logo">
                            <span class="">Edi'lybris 
                        </strong>
                        
                    </a>
                </div>
            </div>

            <nav class="navbar navbar-expand-md bg-dark">
                <div class="container-fluid">
                    <!-- Bouton hamburger -->
                    <button class="navbar-toggler custom-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Menu collapsé -->
                    <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto text-center me-3">
                            <li class="nav-item">
                                <a class="nav-link fs-5"  href="index.php"><strong>Accueil</strong></a>
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
            <video autoplay muted loop id="video-bg" playsinline>
                <source src="videos/.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la vidéo.
            </video>
            
        </div>
        
    </header>