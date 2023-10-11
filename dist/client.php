<?php
if ($_SESSION['activeClient'] === 'Window World of Altoona') {
    include 'path/to/window_world_header.php';
} elseif ($_SESSION['activeClient'] === 'RoofWorks USA') {
    include 'path/to/roofworks_header.php';
}
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drew Tailwind Test</title>
    <?php include 'head_links.php'; ?>
</head>
<link rel="stylesheet" href="css/clients.css" />
<script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>
<input type="hidden" id="isNewSession" value="true">

<body class="bg-gray-50">
    <div class="flex flex-wrap overflow-hidden">
        <div class="w-full pl-0 lg:pl-64 min-h-screen mb-12">
            <!--Mast Header Background -->
            <div id="header_bg_swap">
                <div id="main-nav" class="w-1/2 md:w-1/3 lg:w-64 fixed md:top-0 md:left-0 h-screen lg:block bg-white border-r z-30 hidden">
                    <div class="w-full h-20 flex px-4 items-center mb-16 mt-8 justify-center">
                        <img src="img/TCL_Logo_Black.svg" alt="TCL Logo" class="w-40 h-40 mt-6 rounded-full opacity-25 hover:opacity-80 transition-opacity duration-700 ease-in-out">
                    </div>

                    <!--Nav Start-->
                    <?php include 'sidebar.php'; ?>
                </div>

                <?php include 'navbar.php'; ?>
                <!--Nav Stop-->
                <?php include 'client/client_header.php'; ?>
            </div>
            <!-- End red background section -->

            <div class="w-[90%] mx-auto">
                <div id="clientContent">
                    <?php
                    // Check if the session variable is set
                    if (isset($_SESSION['activeClient'])) {
                        // Use the session variable to conditionally include the correct PHP file
                        if ($_SESSION['activeClient'] === 'RoofWorks USA') {
                            include 'client/client_rwu.php';
                        } else {
                            include 'client/client_ww.php';
                        }
                    }
                    // If the session variable is not set, do not include any client content
                    ?>
                </div>
            </div>


            <!--Helpful buttons for making themes don't remove incase we want to style more-->
            <!-- <div class="flex flex-row justify-between px-90">
                <button style="color:white; font:bold; background:blue; padding:5px; border-radius:20%;"
                    data-set-theme="ww-blue" data-act-class="ACTIVECLASS">Window World Theme</button>
                <button style="color:white; font:bold; background:red; padding:5px; border-radius:20%;"
                    data-set-theme="rwu" data-act-class="ACTIVECLASS">Roof Works
                    Theme</button>
            </div> -->
            <!--End Helpful buttons-->

        </div>
    </div>
    </div>

    <!--Tailwind Flowbite-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.js"></script>
    <!--Tabs-->
    <script src="js/client_tabs.js"></script>
    <script src="client/js/client.js"></script>
</body>

</html>
