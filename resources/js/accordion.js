document.addEventListener("DOMContentLoaded", () => {
    const accordionContents = document.querySelectorAll(".accordion-content.panel");

    accordionContents.forEach((item) => {
        let header = item.querySelector(".header-accordion");
        let icon = item.querySelector(".fa-plus");

        header.addEventListener("click", () => {
            const isExpanded = item.classList.contains("open");

            // Chiudi tutti i pannelli aperti
            closeAllPanels(accordionContents);

            // Apri il pannello selezionato solo se non era già aperto
            if (!isExpanded) {
                item.classList.add("open");
                icon.classList.add("open");
            }
        });
    });

    function closeAllPanels(panels) {
        panels.forEach((panel) => {
            panel.classList.remove("open");
            const icon = panel.querySelector(".fa-plus");
            if (icon) {
                icon.classList.remove("open");
            }
        });
    }
});
