<?php
if (!isset($_SESSION['activeClient'])) {
    $_SESSION['activeClient'] = 'Window World of Altoona';
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

<body>
    <div class="flex flex-wrap overflow-hidden">
        <div class="w-full pl-0 lg:pl-64 min-h-screen mb-12">
            <!--Mast Header Background -->
            <div id="header_bg_swap">
                <?php include 'sidebar.php'; ?>

                <?php include 'navbar.php'; ?>
                <!--Nav Stop-->
                <?php include 'client/client_header.php'; ?>
            </div>
            <!-- End red background section -->

            <div class="w-[96%] mx-auto">
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

            <button id="loadAltoona" style="visibility: hidden; position: absolute;" data-set-theme="ww-blue"
                data-act-class="ACTIVECLASS" onclick="triggerAltoonaClick()">Select Window
                World of Altoona</button>
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
    <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex fixed bottom-0 left-0 transform translate-y-full opacity-0 transition-transform transition-opacity duration-300"
        role="alert" id="slideAlert">
        <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
        <span class="font-semibold mr-2 text-left flex-auto">Get the coolest t-shirts from our brand new store</span>
        <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
        </svg>
    </div>

    <!--Tailwind Flowbite-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.js"></script>
    <!--Tabs-->
    <script src="js/client_tabs.js"></script>
    <script src="client/js/client.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const loadAltoonaButton = document.getElementById('loadAltoona');
        if (loadAltoonaButton) {
            loadAltoonaButton.click();
        }
    });
    </script>

</body>

</html>