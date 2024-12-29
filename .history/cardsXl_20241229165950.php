<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Cards Navigation</title>
    <style>
        /* Styles communs */
        .new-card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin: 20px 0;
            flex-wrap: wrap;
        }

        .new-card {
            width: 200px;
            background-color: #1E3A5F;
            color: #FFF;
            border-radius: 8px;
            overflow: hidden;
            text-align: center;
        }

        .new-card img {
            width: 100%;
            height: auto;
        }

        .new-card-content {
            padding: 10px;
        }

        /* Mobile spécifique */
        @media (max-width: 768px) {
            .new-card {
                width: 180px;
            }

            .new-navigation {
                display: flex;
                justify-content: space-between;
                margin-top: 10px;
            }
        }

        /* Desktop spécifique */
        @media (min-width: 769px) {
            .new-card-container {
                justify-content: space-between;
            }

            .new-navigationDesktop {
                display: flex;
                justify-content: flex-end;
                margin-top: 10px;
            }
        }

        /* Hidden class */
        .new-hidden {
            display: none;
        }
    </style>
</head>
<body>
    <!-- CARDS XL Mobile -->
    <div class="d-block d-md-none mb-3">
        <!-- Groupes de livres - Mobile -->
        <div id="mobile-groups">
            <!-- Groupe 1 -->
            <div id="new-group1" class="new-card-container">
                <div class="new-card">
                    <a href="link_to_book_A.html">
                        <img src="images/pierreBrandao/XLlamuserie.webp" class="img-fluid" alt="Couverture de livre L'amuserie">
                        <div class="new-card-content">
                            <div class="new-card-author">Brandao Pierre</div>
                            <div class="new-card-price">15,00 €</div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Ajoutez d'autres groupes ici -->
        </div>

        <!-- Navigation Mobile -->
        <div class="new-navigation">
            <button id="new-mobile-backButton" class="new-button xl-button text-white" disabled>Précédent</button>
            <button id="new-mobile-nextGroupButton" class="new-button xl-button text-white">Suivant</button>
        </div>
    </div>

    <!-- CARDS XL Desktop -->
    <div class="d-none d-md-block">
        <!-- Groupes de livres - Desktop -->
        <div id="desktop-groups">
            <!-- Groupe 1 -->
            <div id="desktop-group1" class="new-card-container">
                <div class="new-card">
                    <a href="link_to_book_B.html">
                        <img src="images/anotherAuthor/XLanotherbook.webp" class="img-fluid" alt="Couverture de livre Another Book">
                        <div class="new-card-content">
                            <div class="new-card-author">Another Author</div>
                            <div class="new-card-price">20,00 €</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Navigation Desktop -->
        <div class="new-navigationDesktop">
            <button id="new-desktop-backButton" class="new-button xl-button text-white" disabled>Précédent</button>
            <button id="new-desktop-nextGroupButton" class="new-button xl-button text-white">Suivant</button>
        </div>
    </div>

    <script>
        // Mobile navigation
        const mobileGroups = document.querySelectorAll('.d-block.d-md-none .new-card-container');
        const mobileBackButton = document.getElementById('new-mobile-backButton');
        const mobileNextButton = document.getElementById('new-mobile-nextGroupButton');
        let mobileCurrentGroup = 1;
        const mobileTotalGroups = mobileGroups.length;

        function updateMobileGroups() {
            mobileGroups.forEach((group, index) => {
                group.classList.toggle('new-hidden', index + 1 !== mobileCurrentGroup);
            });

            mobileBackButton.disabled = mobileCurrentGroup === 1;
            mobileNextButton.disabled = mobileCurrentGroup === mobileTotalGroups;
        }

        mobileBackButton.addEventListener('click', () => {
            if (mobileCurrentGroup > 1) {
                mobileCurrentGroup--;
                updateMobileGroups();
            }
        });

        mobileNextButton.addEventListener('click', () => {
            if (mobileCurrentGroup < mobileTotalGroups) {
                mobileCurrentGroup++;
                updateMobileGroups();
            }
        });

        // Desktop navigation
        const desktopGroups = document.querySelectorAll('.d-none.d-md-block .new-card-container');
        const desktopBackButton = document.getElementById('new-desktop-backButton');
        const desktopNextButton = document.getElementById('new-desktop-nextGroupButton');
        let desktopCurrentGroup = 1;
        const desktopTotalGroups = desktopGroups.length;

        function updateDesktopGroups() {
            desktopGroups.forEach((group, index) => {
                group.classList.toggle('new-hidden', index + 1 !== desktopCurrentGroup);
            });

            desktopBackButton.disabled = desktopCurrentGroup === 1;
            desktopNextButton.disabled = desktopCurrentGroup === desktopTotalGroups;
        }

        desktopBackButton.addEventListener('click', () => {
            if (desktopCurrentGroup > 1) {
                desktopCurrentGroup--;
                updateDesktopGroups();
            }
        });

        desktopNextButton.addEventListener('click', () => {
            if (desktopCurrentGroup < desktopTotalGroups) {
                desktopCurrentGroup++;
                updateDesktopGroups();
            }
        });

        // Initialize groups
        updateMobileGroups();
        updateDesktopGroups();
    </script>
</body>
</html>
