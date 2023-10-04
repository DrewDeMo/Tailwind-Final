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


            <!--Content Start-->
            <div class="flex flex-wrap mb-8 bg-slate-800">
                <?php include 'breadcrumbs.php'; ?>

                <!-- Container -->
                <div class="w-full flex flex-row">
                    <!-- Logo Box -->
                    <div class="flex-none p-4 m-4">
                        <img class="h-40" src="img/logos/ww_white.svg" alt="Logo" />
                    </div>

                    <!-- Main Content -->
                    <div class="flex flex-grow flex-col justify-center space-y-4 max-w-md">
                        <!-- Text -->
                        <div class="text-4xl text-slate-100 text-opacity-90 font-bold">
                            Altoona
                        </div>

                        <!-- Badge -->
                        <div
                            class="p-1 px-2 mt-2 rounded-lg bg-slate-100 bg-opacity-80 shadow-sm text-slate-800 font-medium w-fit">
                            Full-Service Client
                        </div>

                        <!-- Location -->
                        <div class="flex items-center text-slate-100">
                            <img class="h-4 align-middle mr-2" src="img/icons/loc_white.svg" alt="Location Icon" />
                            114 Vision Dr., Duncansville, PA 16635
                        </div>

                        <!-- Phone -->
                        <div class="flex items-center text-slate-100">
                            <img class="h-4 align-middle mr-2" src="img/icons/phone_white.svg" alt="Phone Icon" />
                            123-123-1324
                        </div>

                        <!-- Owners and Users -->
                        <div class="flex flex-col items-start w-full gap-2">
                            <!-- Owners Label -->
                            <div
                                class="rounded-lg ml-4 w-4/5 text-center py-1 px-1 border text-xs border-slate-50 text-slate-100 border-opacity-10 font-bold">
                                Owners
                            </div>

                            <!-- Users -->
                            <div class="flex gap-4 flex-row text-sm mw-12 pb-4">
                                <div class="flex items-center text-slate-100">
                                    <img class="h-4 align-middle mr-2" src="img/icons/user_white.svg" alt="User Icon" />
                                    Emily Johnson
                                </div>
                                <div class="flex items-center gap-1 text-slate-100">
                                    <img class="h-4 align-middle mr-2" src="img/icons/user_white.svg" alt="User Icon" />
                                    Mark Thompson
                                </div>
                                <div class="flex items-center gap-1 text-slate-100">
                                    <img class="h-4 align-middle mr-2" src="img/icons/user_white.svg" alt="User Icon" />
                                    Laura Williams
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-grow flex-col justify-center space-y-4 w-2/3 ml-4 pl-4">

            </div>


            <main class="mx-auto pb-4 grid grid-cols-1 md:grid-cols-2 gap-4 px-8">
                <!-- Owner Operator Information -->
                <section class="relative rounded-lg shadow-md border border-gray-300 overflow-hidden">
                    <!-- Background Image and Overlay -->
                    <div class="relative top-0 left-0 right-0 h-24 bg-cover bg-center z-0"
                        style="background-image: url('img/photos/clients.webp');">
                        <div class="absolute inset-0 bg-slate-700 opacity-90 rounded-t-lg"></div>

                        <!-- Headline -->
                        <h2
                            class="px-4 drop-shadow-md absolute inset-x-0 bottom-0 h-full flex  items-center text-2xl font-bold text-slate-100 shadow-md z-10">
                            Client & Account
                        </h2>
                    </div>

                    <!-- Content Container -->
                    <div class="p-4 z-10 relative rounded-lg mt-1">
                        <!-- Other Content -->
                        <div class="p-1 pt-4 pb-4 rounded-lg z-10">

                            <div>
                                <strong>Client Code</strong> Alt
                            </div>
                            <div>
                                <strong>Acct. Manager</strong> <span class="text-slate-600">Carl Mayhew</span>
                            </div>
                        </div>
                    </div>
                </section>



                <!-- Owner Operator Information -->
                <section class="relative rounded-lg shadow-md border border-gray-300 overflow-hidden">
                    <!-- Background Image and Overlay -->
                    <div class="relative top-0 left-0 right-0 h-24 bg-cover bg-center z-0"
                        style="background-image: url('img/photos/clients.webp');">
                        <div class="absolute inset-0 bg-slate-700 opacity-90 rounded-t-lg"></div>

                        <!-- Headline -->
                        <h2
                            class="px-4 drop-shadow-md absolute inset-x-0 bottom-0 h-full flex  items-center text-2xl font-bold text-slate-100 shadow-md z-10">
                            Owner/Operators
                        </h2>
                    </div>

                    <!-- Content Container -->
                    <div class="p-4 z-10 relative rounded-lg mt-1">
                        <!-- Other Content -->
                        <div class="p-1 pt-4 pb-4 rounded-lg z-10">
                            <div class="flex flex-grow flex-row w-full">
                                <!-- User Start-->
                                <div class="basis-1/3 text-center my-4 border-r border-gray-200">

                                    <img class="m-auto h-10 opacity-60 hover:opacity-80"
                                        src="img/icons/user_client.svg" />
                                    <div class="my-1 font-medium text-slate-900">Emily Johnson</div>
                                    <div class="my-1 text-xs text-blue-500 bg-blue-100 rounded-lg p-1 m-auto w-fit">
                                        Owner
                                    </div>
                                    <div class="my-1 text-xs text-blue-500 hover:text-blue-600"><a
                                            href="#">e.johnson@windowworld.com</a></div>
                                    <div class="flex flex-row justify-between align-middle w-full mt-4">
                                        <button
                                            class="border border-slate-200 rounded text-xs p-1 px-2 text-slate-500 mx-6 hover:bg-slate-100">Copy</button>
                                        <button
                                            class="bg-blue-400 text-white p-1 text-xs mx-6 px-2 rounded hover:bg-blue-500 ">Mail</button>
                                    </div>
                                </div>
                                <!-- User Stop-->

                                <!-- User Start-->
                                <div class="basis-1/3 text-center my-4 border-r border-gray-200">

                                    <img class="m-auto h-10 opacity-60 hover:opacity-80"
                                        src="img/icons/user_client.svg" />
                                    <div class="my-1 font-medium text-slate-900">Mark Thompson</div>
                                    <div class="my-1 text-xs text-blue-500 bg-blue-100 rounded-lg p-1 m-auto w-fit">
                                        Owner
                                    </div>
                                    <div class="my-1 text-xs text-blue-500 hover:text-blue-600"><a
                                            href="#">m.thompson@windowworld.com</a></div>
                                    <div class="flex flex-row justify-between align-middle w-full mt-4">
                                        <button
                                            class="border border-slate-200 rounded text-xs p-1 px-2 text-slate-500 mx-6 hover:bg-slate-100">Copy</button>
                                        <button
                                            class="bg-blue-400 text-white p-1 text-xs mx-6 px-2 rounded hover:bg-blue-500 ">Mail</button>
                                    </div>
                                </div>
                                <!-- User Stop-->

                                <!-- User Start-->
                                <div class="basis-1/3 text-center my-4">

                                    <img class="m-auto h-10 opacity-60 hover:opacity-80"
                                        src="img/icons/user_client.svg" />
                                    <div class="my-1 font-medium text-slate-900">Sarah Williams</div>
                                    <div class="my-1 text-xs text-blue-500 bg-blue-100 rounded-lg p-1 m-auto w-fit">
                                        Owner
                                    </div>
                                    <div class="my-1 text-xs text-blue-500 hover:text-blue-600"><a
                                            href="#">s.williams@windowworld.com</a></div>
                                    <div class="flex flex-row justify-between align-middle w-full mt-4">
                                        <button
                                            class="border border-slate-200 rounded text-xs p-1 px-2 text-slate-500 mx-6 hover:bg-slate-100">Copy</button>
                                        <button
                                            class="bg-blue-400 text-white p-1 text-xs mx-6 px-2 rounded hover:bg-blue-500 ">Mail</button>
                                    </div>
                                </div>
                                <!-- User Stop-->



                            </div>
                            <button
                                class="flex align-middle justify-center w-[90%] m-auto text-sm bg-blue-500 hover:bg-blue-600 text-slate-100 rounded py-1 mt-4 font-extrabold ">Mail
                                All</button>
                        </div>
                    </div>
                </section>
            </main>


            <!-- Store Location -->
            <div class="flex flex-row w-full gap-4 mx-8 pr-16 mb-8">
                <div class="bg-white rounded-lg shadow p-6 w-1/4 border border-gray-200">
                    <h2 class=" text-xl font-semibold mb-2">Store Location</h2>
                    <address class="text-sm space-y-1">
                        <p class="text-gray-700">Phone: <a href="tel:814-693-0133"
                                class="text-blue-500">814-693-0133</a></p>
                        <p class="text-gray-700">Street: 114 Vision Dr.</p>
                        <p class="text-gray-700">City: Duncansville</p>
                        <p class="text-gray-700">State: PA</p>
                        <p class="text-gray-700">ZIP: 55555</p>
                        <p class="text-gray-700">Full: 114 Vision Dr., Duncansville, PA</p>
                    </address>
                </div>

                <!-- Landing Pages -->
                <div class="bg-white rounded-lg shadow-lg p-6 w-1/4 border border-gray-200">
                    <h2 class="text-xl font-semibold mb-2">Landing Pages</h2>
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
                                    <span
                                        class="bg-yellow-100 text-yellow-600 p-1 rounded-full text-xs px-3 ">PPC</span>
                                    <span>Branded LP</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-row items-center gap-2 w-full mb-2">
                                <a href="http://ppc.windowworlddeals.com/altoona-nb"
                                    class="flex gap-2 items-center text-blue-500 ">
                                    <span
                                        class="bg-yellow-100 text-yellow-600 p-1 rounded-full text-xs px-3 ">PPC</span>
                                    <span>Non-Branded LP</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-row items-center gap-2 w-full mb-2">
                                <a href="http://ppc.windowworlddeals.com/altoona-comp"
                                    class="flex gap-2 items-center text-blue-500 ">
                                    <span
                                        class="bg-yellow-100 text-yellow-600 p-1 rounded-full text-xs px-3 ">PPC</span>
                                    <span>Competitor Branded LP</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Organic -->
                <div class="bg-white rounded-lg shadow-lg p-6 w-1/4 border border-gray-200">
                    <h2 class="text-xl font-semibold mb-2">Organic</h2>
                    <p class="text-sm"><a href="https://www.windowworldaltoona.com"
                            class="text-blue-500">www.windowworldaltoona.com</a></p>
                </div>

                <!-- Business Pages -->
                <div class="bg-white rounded-lg shadow-lg p-6 w-1/4 border border-gray-200">
                    <h2 class="text-xl font-semibold mb-2">Business Pages</h2>
                    <ul class="text-sm list-disc list-inside space-y-1">
                        <li><a href="https://www.facebook.com/WindowWorldAltoona" class="text-blue-500">FB
                                Business</a></li>
                        <li><a href="https://www.google.com/search?q=Window+World+of+Altoona"
                                class="text-blue-500">Google Business Page</a></li>
                    </ul>
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
    <!-- Loading End -->
    <!--Custom-->
</body>
