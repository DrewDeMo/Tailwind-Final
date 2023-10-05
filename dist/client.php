<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drew Tailwind Test</title>
    <!--All heading link files below-->
    <?php include 'head_links.php'; ?>
    <!--End heading links-->
</head>
<style>
.tab-content {
    opacity: 0;
    height: 0;
    overflow: hidden;
    padding: 0;
    transition: opacity 0.5s ease, height 0.5s ease, padding 0.5s ease;
}

.tab-content.active {
    opacity: 1;
    height: auto;
    padding: 15px;
    /* This can be adjusted based on your preference or set to 0 if unnecessary */
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

            <?php include 'client/client_subheader.php'; ?>

            <!--Content Start-->
            <div class="flex flex-col space-y-16 px-16">
                <div class="tab-content" id="content-profile">Profile Content</div>
                <div class="tab-content active" id="content-dashboard">Dashboard Content</div>
                <div class="tab-content" id="content-settings">Settings Content</div>
                <div class="tab-content" id="content-contacts">Contacts Content</div>
            </div>



            <script>
            document.addEventListener("DOMContentLoaded", function() {
                let tabs = document.querySelectorAll(".flex.flex-wrap > li");
                let contents = document.querySelectorAll(".tab-content");

                tabs.forEach((tab, index) => {
                    tab.addEventListener("click", function() {
                        // Hide all content areas
                        contents.forEach(content => {
                            content.classList.remove("active");
                        });

                        // Construct the ID for the content section based on the tab's text content
                        let targetId =
                            `content-${tab.textContent.trim().toLowerCase().replace(/ /g, '-')}`;
                        let targetContent = document.getElementById(targetId);

                        if (targetContent) {
                            // Show the clicked tab's content
                            targetContent.classList.add("active");
                        } else {
                            console.warn(`Element with ID ${targetId} not found.`);
                        }

                        // Remove active styles from all tabs
                        tabs.forEach(innerTab => {
                            innerTab.querySelector("a").classList.remove("active");
                        });

                        // Add active styles to clicked tab
                        this.querySelector("a").classList.add("active");
                    });
                });
            });
            </script>
        </div>
    </div>
    </div>

    <!--Script Start-->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.js"></script>
    <!--Custom-->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>