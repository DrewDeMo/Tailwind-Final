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

    <!--Better Icons?-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--End Stylesheet linking-->
</head>

<style>
/* You'll still need these lines to handle the icon swapping */
.group:hover .icon {
    display: none !important;
}

.group:hover .icon-hover {
    display: block !important;
}
</style>

<body>
    <div class="flex flex-wrap overflow-hidden">
        <div class="w-full bg-slate-50 pl-0 lg:pl-64 min-h-screen">
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


        </div>
        <div class="flex flex-grow flex-col justify-center space-y-4 w-2/3 ml-4 pl-4">

        </div>


        <!--First Row-->
        <main class="mx-auto pb-4 grid grid-cols-1 md:grid-cols-2 gap-4 px-8">
            <!-- Owner Operator Information -->
            <?php include 'client/client_owners.php'; ?>
            <!-- County Map/Owner Image -->
            <?php include 'client/client_countymap.php'; ?>
        </main>
        <!--First Row End-->


        <!-- Store Location -->
        <div class="flex flex-row w-full gap-4 mx-8 pr-16 mb-8">
            <div class="bg-white rounded-lg  p-6 w-1/4 border border-gray-300">
                <h2 class="text-xl font-semibold mb-4">Location</h2>

                <div class="flex flex-row mt-2">
                    <div class="basis-1/3">
                        <p class="text-slate-600 font-light text-sm">Phone</p> <a href="tel:814-693-0133"
                            class="text-blue-500">814-693-0133</a>
                    </div>
                    <div class="basis-1/3">
                        <p class="text-slate-600 font-light text-sm">Street</p>
                        <p class=" text-slate-900">114 Vision Dr.</p>
                    </div>
                    <div class="basis-1/3">
                        <p class="text-slate-600 font-light text-sm">City</p>
                        <p class=" text-slate-900"> Duncansville</p>
                    </div>
                </div>

                <div class="flex flex-row mt-4">
                    <div class="basis-1/3">
                        <p class="text-slate-600 font-light text-sm">State</p>
                        <p class=" text-slate-900">PA</p>
                    </div>
                    <div class="basis-1/3">
                        <p class="text-slate-600 font-light text-sm">ZIP</p>
                        <p class=" text-slate-900">55555</p>
                    </div>

                    <div class="basis-1/3">
                        &nbsp;
                    </div>
                </div>
                <div
                    class="text-center w-full border border-slate-300 py-2 rounded-lg mt-4 duration-500 hover:bg-gray-100">
                    <p class="text-slate-600 font-light text-sm">Full</p>
                    <p class="text-lg text-slate-900">114 Vision Dr.,
                        Duncansville, PA</p>
                </div>
            </div>


            <!-- Landing Pages -->
            <div class="bg-white rounded-lg p-6 w-1/4 border border-gray-300">
                <h2 class="text-xl font-semibold mb-4">Landing Pages</h2>
                <ul class="text-sm list-inside space-y-1">
                    <div class="my-2 pt-2 border-b border-gray-100">
                        <li>
                            <div class="flex flex-row items-center gap-2 w-full mb-2">
                                <a href="http://fb.windowworlddeals.com/altoona"
                                    class="flex gap-2 items-center text-blue-500 ">
                                    <span class="bg-blue-100 text-blue-600 p-1 rounded-full text-xs px-4 ">FB</span>
                                    <span>Windows LP</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-row items-center gap-2 w-full mb-2">
                                <a href="http://fb.windowworlddeals.com/altoona-2"
                                    class="flex gap-2 items-center text-blue-500 ">
                                    <span class="bg-blue-100 text-blue-600 p-1 rounded-full text-xs px-4 ">FB</span>
                                    <span>Siding & Doors LP</span>
                                </a>
                            </div>
                        </li>
                    </div>
                    <li>
                        <div class="flex flex-row items-center gap-2 w-full mb-2">
                            <a href="http://ppc.windowworlddeals.com/altoona"
                                class="flex gap-2 items-center text-blue-500 ">
                                <span class="bg-yellow-100 text-yellow-600 p-1 rounded-full text-xs px-3 ">PPC</span>
                                <span>Branded LP</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex flex-row items-center gap-2 w-full mb-2">
                            <a href="http://ppc.windowworlddeals.com/altoona-nb"
                                class="flex gap-2 items-center text-blue-500 ">
                                <span class="bg-yellow-100 text-yellow-600 p-1 rounded-full text-xs px-3 ">PPC</span>
                                <span>Non-Branded LP</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex flex-row items-center gap-2 w-full mb-2">
                            <a href="http://ppc.windowworlddeals.com/altoona-comp"
                                class="flex gap-2 items-center text-blue-500 ">
                                <span class="bg-yellow-100 text-yellow-600 p-1 rounded-full text-xs px-3 ">PPC</span>
                                <span>Competitor Branded LP</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
















            <!-- Business Pages -->
            <div class="bg-white rounded-lg border p-6 w-1/4  border-gray-300">
                <h2 class="text-xl font-semibold mb-4">Business Pages</h2>
                <ul class="text-sm list-inside space-y-1">
                    <li>
                        <div
                            class="flex flex-row items-center gap-4 w-full mb-2 p-2 rounded cursor-pointer duration-500 hover:bg-slate-100">
                            <a href="https://www.facebook.com/WindowWorldAltoona"
                                class="flex gap-4 items-center text-blue-500 align-middle justify-center">
                                <span
                                    class="icon-container bg-emerald-100 text-emerald-600 p-1 duration-500 rounded text-xs w-10 h-10 flex items-center justify-center group-hover:bg-emerald-200">
                                    <img class="icon w-full h-full object-cover group-hover:hidden"
                                        src="img/icons/green_leaf.svg" />
                                    <img class="icon-hover w-full h-full object-cover hidden group-hover:block"
                                        src="img/icons/green_leaf_d.svg" />
                                </span>
                                <span class="text-black font-medium group-hover:font-semibold duration-800">Organic
                                    Website</span>
                            </a>
                        </div>
                    </li>

                    <li class="group">
                        <div
                            class="flex flex-row items-center gap-4 w-full mb-2 p-2 rounded cursor-pointer duration-500 hover:bg-slate-100">
                            <a href="https://www.facebook.com/WindowWorldAltoona"
                                class="flex gap-4 items-center text-blue-500 align-middle justify-center">
                                <span
                                    class="bg-blue-500 text-blue-600 p-1 rounded text-xs w-10 h-10 flex items-center justify-center duration-500 group-hover:bg-blue-600">
                                    <img src="img/logos/social_facebook.svg" />
                                </span>
                                <span class="text-black font-medium group-hover:font-semibold duration-800">Facebook
                                    Business Page
                                </span>
                            </a>
                        </div>
                    </li>

                    <li class="group">
                        <div
                            class="flex flex-row items-center gap-4 w-full mb-2 p-2 rounded cursor-pointer duration-500 hover:bg-slate-100">
                            <a href="https://www.facebook.com/WindowWorldAltoona"
                                class="flex gap-4 items-center text-blue-500 align-middle justify-center">
                                <span
                                    class="bg-gray-200 text-blue-600 p-1 rounded text-xs w-10 h-10 flex items-center justify-center duration-500 group-hover:bg-gray-300">
                                    <img class="duration-500 opacity-70 group-hover:opacity-100"
                                        src="img\logos\Google_G.svg" />
                                </span>
                                <span class="text-black font-medium group-hover:font-semibold duration-800">Google
                                    Business
                                    Page</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>


            <!-- Organic -->
            <div class="bg-white rounded-lg g p-6 w-1/4 border border-gray-300">
                <h2 class="text-xl font-semibold mb-4">Global Revisions</h2>
                <div class="p-1 pt-4 pb-4 rounded-lg z-10">

                    <div>
                        <strong>Client Code</strong> Alt
                    </div>
                    <div>
                        <strong>Acct. Manager</strong> <span class="text-slate-600">Carl Mayhew</span>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <!--Content Under Logo -->



    </div>
    </div>
    </div>


    <!--Script Start-->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.js"></script>
    <!-- ApexCharts JS -->
    <script src="assets/apex_charts/apexcharts.js"></script>
    <!--Box Icons-->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!--Custom Script-->
    <script>
    let dropdownOpen = false;

    function toggleDropdown() {
        const dropdown = document.getElementById('dropdown');
        const arrowIcon = document.getElementById('arrowIcon');

        if (dropdownOpen) {
            dropdown.style.transition = 'all 0.2s ease-in-out';
            dropdown.classList.add('translate-y-[-4rem]', 'opacity-0');
            setTimeout(() => {
                dropdown.classList.add('hidden');
            }, 200);
            arrowIcon.style.transition = 'transform 0.2s ease-in-out';
            arrowIcon.classList.remove('rotate-180');
        } else {
            dropdown.classList.remove('hidden');
            setTimeout(() => {
                dropdown.style.transition = 'all 0.2s ease-in-out';
                dropdown.classList.remove('translate-y-[-4rem]', 'opacity-0');
                dropdown.classList.add('translate-y-0', 'opacity-100');
            }, 10);
            arrowIcon.style.transition = 'transform 0.2s ease-in-out';
            arrowIcon.classList.add('rotate-180');
        }

        dropdownOpen = !dropdownOpen;
    }
    </script>
    <!-- Loading End -->
    <!--Custom-->
</body>
