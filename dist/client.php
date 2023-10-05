<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drew Tailwind Test</title>
    <!--All heading link files below-->
    <?php include 'head_links.php'; ?>
    <!--End heading links-->
</head>

<body>
    <div class="flex flex-wrap overflow-hidden bg-gray-100">
        <div class="w-full bg-gray-100 pl-0 lg:pl-64 min-h-screen mb-12 ">
            <div id="main-nav" class="w-1/2 md:w-1/3 lg:w-64 fixed md:top-0 md:left-0 h-screen lg:block bg-white border-r z-30 hidden">
                <!-- Logo -->
                <div class="w-full h-20 flex px-4 items-center mb-16 mt-8 justify-center">
                    <img src="img/TCL_Logo_Black.svg" alt="TCL Logo" class="w-40 h-40 mt-6 rounded-full opacity-25 hover:opacity-80 transition-opacity duration-700 ease-in-out">
                </div>
                <!--Nav Start-->
                <?php include 'sidebar.php'; ?>
            </div>
            <?php include 'navbar.php'; ?>
            <!--Nav Stop-->
            <?php include 'client/client_header.php'; ?>

            <?php include 'client/client_subheader.php'; ?>

            <!--Content Start-->
            <div class="bg-white border border-gray-200 rounded-lg w-[90%] m-auto p-4 my-4">
                <div class="bg-blue-500/50">Test A</div>
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
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
