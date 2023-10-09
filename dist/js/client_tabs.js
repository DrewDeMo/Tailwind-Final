const clientNavTabs = document.querySelectorAll(".clientNav-tab-link");
const clientNavContentPanes = document.querySelectorAll(".clientNav-tab-pane");
const clientNavIndicator = document.querySelector(".clientNav-indicator");

function adjustClientNavIndicator(activeTab) {
    let leftPos = activeTab.offsetLeft;
    let width = activeTab.offsetWidth;
    clientNavIndicator.style.left = `${leftPos}px`;
    clientNavIndicator.style.width = `${width}px`;
}

// Initialize the indicator position
adjustClientNavIndicator(document.querySelector('.clientNav-tab-link.clientNav-active'));

clientNavTabs.forEach(tab => {
    tab.addEventListener('click', function (e) {
        e.preventDefault();

        let target = this.dataset.tab;
        let targetContent = document.getElementById(target);

        // Manage active classes for tabs
        clientNavTabs.forEach(t => t.classList.remove("clientNav-active"));
        this.classList.add("clientNav-active");

        // Manage active classes for content
        clientNavContentPanes.forEach(pane => pane.classList.remove("clientNav-active"));
        targetContent.classList.add("clientNav-active");

        // Adjust the indicator
        adjustClientNavIndicator(this);
    });
});
