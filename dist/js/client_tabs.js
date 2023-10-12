// Your existing code for dropdown and client info ...

// Function for client tabs
function initClientTabs() {
    console.log("Initializing client tabs");  // Debugging statement

    const clientNavTabs = document.querySelectorAll(".clientNav-tab-link");
    console.log("Client Nav Tabs:", clientNavTabs);  // Debugging statement

    const clientNavContentPanes = document.querySelectorAll(".clientNav-tab-pane");
    const clientNavIndicator = document.querySelector(".clientNav-indicator");

    function adjustClientNavIndicator(activeTab) {
        if (activeTab !== null) {
            let leftPos = activeTab.offsetLeft;
            let width = activeTab.offsetWidth;
            clientNavIndicator.style.left = `${leftPos}px`;
            clientNavIndicator.style.width = `${width}px`;
        }
    }

    // Initialize the indicator position
    const initialActiveTab = document.querySelector('.clientNav-tab-link.clientNav-active');
    adjustClientNavIndicator(initialActiveTab);

    clientNavTabs.forEach(tab => {
        console.log("Attaching click event to tab:", tab);  // Debugging statement
        tab.addEventListener('click', function (e) {
            e.preventDefault();
            console.log("Tab clicked:", this);  // Additional Debugging statement

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
}

// Your existing DOMContentLoaded event listener
document.addEventListener('DOMContentLoaded', function () {
    // ... (Your existing code inside DOMContentLoaded)

    // Initialize client tabs
    initClientTabs();

    // Re-initialize client tabs when the client is switched
    document.addEventListener('clientSwitched', function () {
        console.log("Client switched event fired");  // Debugging statement
        initClientTabs();
    });
});
