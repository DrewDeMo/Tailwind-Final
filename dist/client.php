<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drew Tailwind Test</title>
    <!--All heading link files below-->
    <?php include 'head_links.php'; ?>
    <!--End heading links-->
</head>
<style>
:root {
    --clientNav-active-color: #3B82F6;
    --clientNav-hover-color: #555;
    --clientNav-track-color: #E5E7EB;
    --clientNav-hover-line-color: #bfdbfe;
    /* Lighter blue for hover state */
}

.clientNav-tab-nav {
    display: flex;
    position: relative;
    overflow: hidden;
}

.clientNav-tab-link {
    padding: 0.5rem 1rem 0.75rem;
    /* Increased padding at the bottom */
    cursor: pointer;
    transition: color 0.3s, font-weight 0.3s;
    position: relative;
    z-index: 2;
    color: text-gray-600;
    /* Inactive color */
    font-weight: normal;
}

.clientNav-tab-link:hover {
    color: text-gray-900;
    /* Hover color */
    font-weight: medium;
}

.clientNav-tab-link:hover::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 2px;
    background-color: var(--clientNav-hover-line-color);
    /* Light blue line on hover */
    z-index: 1;
}

.clientNav-tab-link.clientNav-active {
    color: text-gray-900;
    /* Active text color */
    font-weight: medium;
}

.clientNav-tab-link.clientNav-active i {
    color: var(--clientNav-active-color);
    /* Icon color to blue when active */
}

.clientNav-tab-nav::before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 2px;
    background-color: var(--clientNav-track-color);
    z-index: 1;
}

.clientNav-indicator {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 25%;
    height: 2px;
    background-color: var(--clientNav-active-color);
    transition: all 0.3s ease;
    z-index: 2;
}

.clientNav-tab-content {
    transition: opacity 0.3s;
}

.clientNav-tab-pane {
    display: none;
}

.clientNav-tab-pane.clientNav-active {
    display: block;
}

.clientNav-tab-link {
    display: flex;
    align-items: flex-end;
}
</style>


<body>
    <div class="flex flex-wrap overflow-hidden bg-gray-100">
        <div class="w-full bg-gray-100 pl-0 lg:pl-64 min-h-screen mb-12 ">
            <div id="main-nav"
                class="w-1/2 md:w-1/3 lg:w-64 fixed md:top-0 md:left-0 h-screen lg:block bg-white border-r z-30 hidden">
                <!-- Logo -->
                <div class="w-full h-20 flex px-4 items-center mb-16 mt-8 justify-center">
                    <img src="img/TCL_Logo_Black.svg" alt="TCL Logo"
                        class="w-40 h-40 mt-6 rounded-full opacity-25 hover:opacity-80 transition-opacity duration-700 ease-in-out">
                </div>
                <!--Nav Start-->
                <?php include 'sidebar.php'; ?>
            </div>
            <?php include 'navbar.php'; ?>
            <!--Nav Stop-->
            <?php include 'client/client_header.php'; ?>
            <div class="w-[90%] mx-auto">
                <?php include 'client/client_body.php'; ?>
            </div>
        </div>
    </div>
    </div>

    <!--Script Start-->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.js"></script>
    <!--Custom-->
    <script>
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
        tab.addEventListener('click', function(e) {
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
    </script>
</body>

</html>