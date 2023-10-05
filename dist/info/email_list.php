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


            <!--Content Start-->
            <div class="flex flex-wrap">
                <?php include 'breadcrumbs.php'; ?>
                Test



            </div>
        </div>

        <div class="flex flex-col bg-white -lg rounded-lg border border-gray-200 h-[400px] relative" style="flex: 1;">
            <!-- Background image -->
            <div class="absolute inset-0 rounded-lg bg-cover bg-center z-0"
                style="background-image: url('img/events/halloween_event.webp');"></div>

            <!-- Gradient overlay -->
            <div class="absolute inset-0 bg-gradient-to-tr from-black to-transparent z-10 rounded-lg"></div>

            <!-- Content -->
            <div class="flex-grow p-4 flex flex-col items-center justify-center relative z-20">
                <!-- Icon -->
                <div class="flex justify-center items-center mb-3">
                    <div class="flex justify-center items-center rounded-full bg-transparent"
                        style="width: 6em; height: 6em; border: 2px solid rgba(255, 255, 255, 0.3); mix-blend-mode: overlay;">
                        <svg fill="white" height="2.5em" xmlns="http://www.w3.org/2000/svg" height="1em"
                            viewBox="0 0 320 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M32.1 29.3C33.5 12.8 47.4 0 64 0H256c16.6 0 30.5 12.8 31.9 29.3l14 168.4c6 72-42.5 135.2-109.9 150.6V448h48c17.7 0 32 14.3 32 32s-14.3 32-32 32H160 80c-17.7 0-32-14.3-32-32s14.3-32 32-32h48V348.4C60.6 333 12.1 269.8 18.1 197.8l14-168.4zm56 98.7H231.9l-5.3-64H93.4l-5.3 64z" />
                        </svg>
                    </div>
                </div>

                <!-- Text and Button -->
                <div class="text-center text-white">
                    <p class="text-2xl font-bold mb-1">Happy Hour</p>
                    <p class="font-medium mb-1">September 28</p>
                    <p class="text-sm mb-4">2:00-3:00</p>
                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        View on Calendar
                    </button>
                </div>
            </div>
        </div>





        <div class="flex flex-col bg-white -lg rounded-lg border border-gray-200 h-[400px] p-2" style="flex: 1;">
            <div class="flex justify-between items-center bg-gray-100 p-2 rounded-lg">
                <div class="flex items-center">
                    <svg class="m-2" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                        <path
                            d="M176 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h16V98.4C92.3 113.8 16 200 16 304c0 114.9 93.1 208 208 208s208-93.1 208-208c0-41.8-12.3-80.7-33.5-113.2l24.1-24.1c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L355.7 143c-28.1-23-62.2-38.8-99.7-44.6V64h16c17.7 0 32-14.3 32-32s-14.3-32-32-32H224 176zm72 192V320c0 13.3-10.7 24-24 24s-24-10.7-24-24V192c0-13.3 10.7-24 24-24s24 10.7 24 24z" />
                    </svg>
                    <span class="text-lg font-semibold text-gray-700">TimeTracker</span>
                </div>
            </div>
            <div class="flex-grow flex flex-col justify-between p-4 space-y-4">
                <div class="space-y-4">
                    <span class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-blue-600 bg-blue-200">
                        Most Recent Project
                    </span>
                    <h3 class="text-lg font-semibold text-gray-800">WordPress Site Audits</h3>
                    <p class="text-xs text-gray-500 font-light">WordPress Site Audits provide an in-depth analysis of
                        your website's performance, security, and SEO.</p>
                    <div class="relative py-2">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-semibold inline-block py-1 px-0 rounded-full text-teal-600">
                                Time:
                            </span>
                            <span class="text-xs font-semibold inline-block pr-2 text-teal-600">
                                26hrs / <span class="hover:cursor-pointer" title="Total Monthly Hrs">90hrs</span>
                            </span>
                        </div>
                        <div class="overflow-hidden h-[28px] text-xs flex rounded bg-teal-200">
                            <div id="progressBar" style="width: 0%;"
                                class="-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-teal-500 transition-all duration-1000 ease-in-out">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between">
                    <a href="time_tracker.php">
                        <button type="button"
                            class="py-2.5 px-5 mr-0 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">
                            View Project
                        </button></a>
                    <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 flex items-center gap-2">
                        <svg fill="white" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                        </svg>

                        Add Time
                    </button>

                </div>
            </div>
        </div>






        <!-- Empty Card 2 - Stop -->
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
