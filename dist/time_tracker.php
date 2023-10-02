<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drew Tailwind Test</title>
    <!-- ApexCharts CSS -->
    <link rel="stylesheet" href="assets/apex_charts/apexcharts.css">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="output.css">
    <!-- FontAwesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- New Font -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <!--End External CSS-->
</head>

<body>
    <div class="flex flex-wrap overflow-hidden">
        <div class="w-full bg-white pl-0 lg:pl-64 min-h-screen">
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


            <!--Content Start-->
            <div class="flex flex-wrap">
                <?php include 'breadcrumbs.php'; ?>


                <div class="flex items-stretch w-full space-x-4 ml-8 mr-8">



                    <?php include 'tracker_app.php'; ?>


                </div>
            </div>



        </div>
    </div>
    </div>
    </div>


    <!--Script Start-->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.js">
    </script>
    <!-- ApexCharts JS -->
    <script src="assets/apex_charts/apexcharts.js"></script>
    <!-- Loading Animation -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("progressBar").style.width = "29%";
    });
    </script>
    <!-- Loading End -->

    <!--Custom-->
    <script src="js/popover.js"></script>
    <script src="js/carousel.js"></script>
</body>
