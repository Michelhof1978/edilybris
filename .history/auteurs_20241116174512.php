<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrousel de livres</title>
    <!-- Ajoutez Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Style pour les cartes */
        .book-card {
            width: 200px;
            margin: 10px;
            text-align: center;
        }

        .book-cover {
            width: 100%;
            height: auto;
        }

        .book-details {
            padding: 10px;
        }

        .book-title {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .carousel-navigation {
            text-align: center;
            margin-top: 20px;
        }

        .carousel-navigation button {
            margin: 0 10px;
            padding: 10px 20px;
            font-size: 16px;
        }

        /* Cache les groupes sauf celui affiché */
        .book-group {
            display: none;
        }

        .book-group.active {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        /* Assurez-vous que les boutons sont visibles sur des fonds sombres */
        .carousel-navigation button {
            background-color: #007bff; /* Couleur des boutons */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .carousel-navigation button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="book-carousel-container container vh-100 d-flex justify-content-center align-items-center">
    <div class="book-carousel">
        <!-- Group 1 -->
        <div class="book-group mx-2 active">
            <!-- Card 1 -->
            <div class="book-card">
                <a href="auteurs/pierreBrandao.html">
                    <img src="images/pierreBrandao/luciolesMagiques.png" alt="Lucioles Magiques" class="book-cover">
                    <div class="book-details">
                        <div class="book-title">Lucioles Magiques</div>
                        <div class="book-author">Pierre Brandao</div>
                        <div class="book-description">
                            LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.
                        </div>
                        <div class="book-price">19.99€</div>
                    </div>
                </a>
            </div>
            <!-- Card 2 -->
            <div class="book-card">
                <a href="auteurs/pierreBrandao.html">
                    <img src="images/pierreBrandao/luciolesMagiques.png" alt="Lucioles Magiques" class="book-cover">
                    <div class="book-details">
                        <div class="book-title">Lucioles Magiques</div>
                        <div class="book-author">Pierre Brandao</div>
                        <div class="book-description">
                            LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.
                        </div>
                        <div class="book-price">24.99€</div>
                    </div>
                </a>
            </div>
            <!-- Card 3 -->
            <div class="book-card">
                <a href="auteurs/pierreBrandao.html">
                    <img src="images/pierreBrandao/luciolesMagiques.png" alt="Lucioles Magiques" class="book-cover">
                    <div class="book-details">
                        <div class="book-title">Lucioles Magiques</div>
                        <div class="book-author">Pierre Brandao</div>
                        <div class="book-description">
                            LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.
                        </div>
                        <div class="book-price">15.99€</div>
                    </div>
                </a>
            </div>
            <!-- Card 4 -->
            <div class="book-card">
                <a href="auteurs/pierreBrandao.html">
                    <img src="images/pierreBrandao/luciolesMagiques.png" alt="Lucioles Magiques" class="book-cover">
                    <div class="book-details">
                        <div class="book-title">Lucioles Magiques</div>
                        <div class="book-author">Pierre Brandao</div>
                        <div class="book-description">
                            LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.
                        </div>
                        <div class="book-price">18.50€</div>
                    </div>
                </a>
            </div>
            <!-- Card 5 -->
            <div class="book-card">
                <a href="auteurs/pierreBrandao.html">
                    <img src="images/pierreBrandao/luciolesMagiques.png" alt="Lucioles Magiques" class="book-cover">
                    <div class="book-details">
                        <div class="book-title">Lucioles Magiques</div>
                        <div class="book-author">Pierre Brandao</div>
                        <div class="book-description">
                            LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.
                        </div>
                        <div class="book-price">21.00€</div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Group 2 -->
        <div class="book-group mx-2">
            <!-- Card 6 -->
            <div class="book-card">
                <a href="auteurs/pierreBrandao.html">
                    <img src="images/pierreBrandao/luciolesMagiques.png" alt="Lucioles Magiques" class="book-cover">
                    <div class="book-details">
                        <div class="book-title">Lucioles Magiques</div>
                        <div class="book-author">Pierre Brandao</div>
                        <div class="book-description">
                            LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.
                        </div>
                        <div class="book-price">22.99€</div>
                    </div>
                </a>
            </div>
            <!-- Card 7 -->
            <div class="book-card">
                <a href="auteurs/pierreBrandao.html">
                    <img src="images/pierreBrandao/luciolesMagiques.png" alt="Lucioles Magiques" class="book-cover">
                    <div class="book-details">
                        <div class="book-title">Lucioles Magiques</div>
                        <div class="book-author">Pierre Brandao</div>
                        <div class="book-description">
                            LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.
                        </div>
                        <div class="book-price">16.50€</div>
                    </div>
                </a>
            </div>
            <!-- Card 8 -->
            <div class="book-card">
                <a href="auteurs/pierreBrandao.html">
                    <img src="images/pierreBrandao/luciolesMagiques.png" alt="Lucioles Magiques" class="book-cover">
                    <div class="book-details">
                        <div class="book-title">Lucioles Magiques</div>
                        <div class="book-author">Pierre Brandao</div>
                        <div class="book-description">
                            LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.
                        </div>
                        <div class="book-price">20.00€</div>
                    </div>
                </a>
            </div>
            <!-- Card 9 -->
            <div class="book-card">
                <a href="auteurs/pierreBrandao.html">
                    <img src="images/pierreBrandao/luciolesMagiques.png" alt="Lucioles Magiques" class="book-cover">
                    <div class="book-details">
                        <div class="book-title">Lucioles Magiques</div>
                        <div class="book-author">Pierre Brandao</div>
                        <div class="book-description">
                            LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.
                        </div>
                        <div class="book-price">19.75€</div>
                    </div>
                </a>
            </div>
            <!-- Card 10 -->
            <div class="book-card">
                <a href="auteurs/pierreBrandao.html">
                    <img src="images/pierreBrandao/luciolesMagiques.png" alt="Lucioles Magiques" class="book-cover">
                    <div class="book-details">
                        <div class="book-title">Lucioles Magiques</div>
                        <div class="book-author">Pierre Brandao</div>
                        <div class="book-description">
                            LUCIOLES MAGIQUES est le deuxième fruit d'une rencontre avec Marie, rencontrée sur un des innombrables fils du net.
                        </div>
                        <div class="book-price">25.99€</div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="carousel-navigation">
        <button class="prev btn" onclick="showGroup('prev')">Précédent</button>
        <button class="next btn" onclick="showGroup('next')">Suivant</button>
    </div>
</div>

<!-- Bootstrap JS & jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    let currentGroup = 0;
    const groups = document.querySelectorAll('.book-group');

    function showGroup(direction) {
        groups[currentGroup].classList.remove('active');
        if (direction === 'next') {
            currentGroup = (currentGroup + 1) % groups.length;
        } else {
            currentGroup = (currentGroup - 1 + groups.length) % groups.length;
        }
        groups[currentGroup].classList.add('active');
    }
</script>

</body>
</html>
