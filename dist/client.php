<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drew Tailwind Test</title>
    <?php include 'head_links.php'; ?>
</head>
<link rel="stylesheet" href="css/clients.css" />

<body>
    <div class="flex flex-wrap overflow-hidden">
        <div class="w-full pl-0 lg:pl-64 min-h-screen mb-12">

            <!--Mast Header Background -->
            <div id="clientHeaderBG" class="bg-ww-navy-950">
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
                <?php include 'client/client_body.php'; ?>
            </div>
        </div>
    </div>

    <!--Preload Colors-->
    <div class="">
        <div class="bg-rwu-theme-50">a</div>
        <div class="bg-rwu-theme-100">a</div>
        <div class="bg-rwu-theme-200">a</div>
        <div class="bg-rwu-theme-300">a</div>
        <div class="bg-rwu-theme-400">a</div>
        <div class="bg-rwu-theme-500">a</div>
        <div class="bg-rwu-theme-600">a</div>
        <div class="bg-rwu-theme-700">a</div>
        <div class="bg-rwu-theme-800">a</div>
        <div class="bg-rwu-theme-900">a</div>
        <div class="bg-rwu-theme-950">a</div>
        <!-- ... all other rwu-red classes ... -->
        <div class="bg-ww-blue-50">a</div>
        <div class="bg-ww-blue-100">a</div>
        <div class="bg-ww-blue-200">a</div>
        <div class="bg-ww-blue-300">a</div>
        <div class="bg-ww-blue-400">a</div>
        <div class="bg-ww-blue-500">a</div>
        <div class="bg-ww-blue-600">a</div>
        <div class="bg-ww-blue-700">a</div>
        <div class="bg-ww-blue-800">a</div>
        <div class="bg-ww-blue-900">a</div>
        <div class="bg-ww-blue-950">a</div>
        <!-- ... all other ww-blue classes ... -->

    </div>
    <!--End Preload Colors-->


    <!--Tailwind Flowbite-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.js"></script>
    <!--Tabs-->
    <script src="js/client_tabs.js"></script>
    <script src="client/js/client.js"></script>


</body>
