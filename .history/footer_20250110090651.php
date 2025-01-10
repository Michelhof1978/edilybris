document.addEventListener("DOMContentLoaded", () => {
    // Mobile Navigation
    const mobileGroups = document.querySelectorAll(".mobile-books-container");
    const mobileBackBtn = document.getElementById("mobile-back-btnPierreBrandao");
    const mobileNextBtn = document.getElementById("mobile-next-btnPierreBrandao");

    let currentMobileGroup = 0;

    const updateMobileNavigation = () => {
        mobileGroups.forEach((group, index) => {
            group.classList.toggle("mobile-hidden", index !== currentMobileGroup);
        });
        mobileBackBtn.disabled = currentMobileGroup === 0;
        mobileNextBtn.disabled = currentMobileGroup === mobileGroups.length - 1;
    };

    mobileBackBtn.addEventListener("click", () => {
        if (currentMobileGroup > 0) {
            currentMobileGroup--;
            updateMobileNavigation();
        }
    });

    mobileNextBtn.addEventListener("click", () => {
        if (currentMobileGroup < mobileGroups.length - 1) {
            currentMobileGroup++;
            updateMobileNavigation();
        }
    });

    updateMobileNavigation();

    // Desktop Navigation
    const desktopGroups = document.querySelectorAll(".new-card-container");
    const desktopBackBtn = document.createElement("button");
    const desktopNextBtn = document.createElement("button");
    let currentDesktopGroup = 0;

    // Create Desktop Navigation Buttons
    desktopBackBtn.textContent = "Précédent";
    desktopNextBtn.textContent = "Suivant";
    desktopBackBtn.className = "desktop-button";
    desktopNextBtn.className = "desktop-button";

    // Append to the DOM
    const desktopNavContainer = document.createElement("div");
    desktopNavContainer.className = "desktop-navigation";
    desktopNavContainer.appendChild(desktopBackBtn);
    desktopNavContainer.appendChild(desktopNextBtn);
    document.querySelector(".d-none.d-md-block").appendChild(desktopNavContainer);

    const updateDesktopNavigation = () => {
        desktopGroups.forEach((group, index) => {
            group.classList.toggle("new-hidden", index !== currentDesktopGroup);
        });
        desktopBackBtn.disabled = currentDesktopGroup === 0;
        desktopNextBtn.disabled = currentDesktopGroup === desktopGroups.length - 1;
    };

    desktopBackBtn.addEventListener("click", () => {
        if (currentDesktopGroup > 0) {
            currentDesktopGroup--;
            updateDesktopNavigation();
        }
    });

    desktopNextBtn.addEventListener("click", () => {
        if (currentDesktopGroup < desktopGroups.length - 1) {
            currentDesktopGroup++;
            updateDesktopNavigation();
        }
    });

    updateDesktopNavigation();
});
</script>