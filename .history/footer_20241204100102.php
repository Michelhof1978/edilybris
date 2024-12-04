<script>
    // Empêcher le défilement automatique en haut de la page lors de la pagination
    document.addEventListener('DOMContentLoaded', function () {
        if (history.scrollRestoration) {
            // Empêche le navigateur de restaurer automatiquement la position du scroll
            history.scrollRestoration = 'manual';
        }
        
        // Attacher un événement de clic sur les liens de pagination
        document.querySelectorAll('.pagination a').forEach(function(link) {
            link.addEventListener('click', function (e) {
                // Sauvegarde la position actuelle de la page avant que la page ne change
                var scrollPosition = window.scrollY || document.documentElement.scrollTop;

                // Permet de changer de page sans remonter en haut
                window.setTimeout(function () {
                    window.scrollTo(0, scrollPosition); // Restaure la position du scroll après le changement de page
                }, 0);
            });
        });
    });
</script>
