<script>
document.addEventListener("DOMContentLoaded", function () {
  // Vérifie si l'appareil est en mode mobile
  const isMobile = window.matchMedia("(max-width: 768px)").matches;
  const nextButton = document.getElementById("new-nextGroupButton");
  const backButton = document.getElementById("new-backButton");
  const groups = Array.from(document.querySelectorAll(".new-card-container"));
  let currentGroupIndex = 0;

  // Fonction pour afficher le groupe actuel et masquer les autres
  function updateGroupVisibility() {
    groups.forEach((group, index) => {
      group.classList.remove("visible", "hidden");
      if (index === currentGroupIndex) {
        group.classList.add("visible");
      } else {
        group.classList.add("hidden");
      }
    });
    // Mettre à jour les boutons
    backButton.disabled = currentGroupIndex === 0;
    nextButton.disabled = currentGroupIndex === groups.length - 1;
  }

  // Gestionnaire de clic pour le bouton "Suivant"
  nextButton.addEventListener("click", function () {
    if (currentGroupIndex < groups.length - 1) {
      currentGroupIndex++;
      updateGroupVisibility();
    }
  });

  // Gestionnaire de clic pour le bouton "Précédent"
  backButton.addEventListener("click", function () {
    if (currentGroupIndex > 0) {
      currentGroupIndex--;
      updateGroupVisibility();
    }
  });

  // Initialisation
  updateGroupVisibility();
});
</script>