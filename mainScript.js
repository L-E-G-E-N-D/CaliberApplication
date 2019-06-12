function setupTabs () {
    document.querySelectorAll(".tabs-container__tabs").forEach(button => {
        button.addEventListener("click", () => {
            const sideBar = button.parentElement;
            const tabsContainer = sideBar.parentElement;
            const tabNumber = button.dataset.forTab;
            const tabToActivate = tabsContainer.querySelector(`.tabs-container__content[data-tab="${tabNumber}"]`);
        
            sideBar.querySelectorAll(".tabs-container__tabs").forEach(button => {
                button.classList.remove("tabs-container__tabs--active");
            });

            tabsContainer.querySelectorAll(".tabs-container__content").forEach(tab => {
                tab.classList.remove("tabs-container__content--active");
            });

            button.classList.add("tabs-container__tabs--active");
            tabToActivate.classList.add("tabs-container__content--active");
        });
    });
}

document.addEventListener("DOMContentLoaded", () => {
    setupTabs();
});
