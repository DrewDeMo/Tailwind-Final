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
                    <div class="flex flex-grow flex-col justify-center space-y-4">
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
                                class="rounded-lg mx-auto w-4/5 text-center py-1 px-1 border text-xs border-slate-50 text-slate-100 border-opacity-10 font-bold">
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
                <!-- Client and Account Information -->
                <section class="relative rounded-lg shadow-md border border-gray-300 overflow-hidden">
                    <!-- Background Image and Overlay -->
                    <div class="absolute top-0 left-0 right-0 h-24 bg-cover bg-center z-0"
                        style="background-image: url('img/photos/clients.webp');">
                        <div class="absolute inset-0 bg-slate-700 opacity-90 rounded-t-lg"></div>
                    </div>

                    <!-- Content Container -->
                    <div class="p-4 z-10 relative rounded-lg">
                        <!-- Headline -->
                        <h2 class="text-lg font-semibold mb-2 mt-8 z-20 relative">
                            &nbsp;
                        </h2>

                        <!-- Other Content -->
                        <div class="p-1 pt-8 pb-4 rounded-lg z-10">
                            <div class="pb-2">
                                <span class="text-2xl font-bold text-slate-900">Client and Account</span>
                            </div>
                            <div>
                                <strong>Client Code</strong> <span class="text-slate-600"><br>Alt</span>
                            </div>
                            <div>
                                <strong>Acct. Manager</strong> <span class="text-slate-600"><br>Carl
                                    Mayhew</span>
                            </div>
                            <div>
                                <button type="button"
                                    class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mt-4 w-full">View
                                    Budget</button>
                            </div>
                        </div>
                    </div>
                </section>



                <!-- Owner Operator Information -->
                <section class="relative rounded-lg shadow-md border border-gray-300 overflow-hidden">
                    <!-- Background Image and Overlay -->
                    <div class="absolute top-0 left-0 right-0 h-24 bg-cover bg-center z-0"
                        style="background-image: url('img/photos/clients.webp');">
                        <div class="absolute inset-0 bg-slate-700 opacity-90 rounded-t-lg"></div>
                    </div>

                    <!-- Content Container -->
                    <div class="p-4 z-10 relative rounded-lg">
                        <!-- Headline -->
                        <h2 class="text-lg font-semibold mb-2 mt-8 z-20 relative">
                            &nbsp;
                        </h2>

                        <!-- Other Content -->
                        <div class="p-1 pt-8 pb-4 rounded-lg z-10">
                            <div class="pb-2">
                                <span class="text-2xl font-bold text-slate-900">Client and Account</span>
                            </div>
                            <div>
                                <strong>Client Code</strong> Alt
                            </div>
                            <div>
                                <strong>Acct. Manager</strong> <span class="text-slate-600">Carl Mayhew</span>
                            </div>

                        </div>
                    </div>
                </section>

                <!-- Address Information -->
                <section class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold mb-2">Address</h2>
                    <div>
                        <strong>Street:</strong> 114 Vision Dr. <br>
                        <strong>City:</strong> Duncansville <br>
                        <strong>State:</strong> PA <br>
                        <strong>ZIP:</strong> 16635
                    </div>
                </section>

                <!-- Contact Information -->
                <section class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold mb-2">Contact Information</h2>
                    <div>
                        <strong>Billing Email 1:</strong> dude@gmail.com <br>
                        <strong>Customer List Contact Email 1:</strong> chick@gmail.com
                    </div>
                    <!-- ... more contacts ... -->
                </section>

                <!--Content Under Logo -->
                <div class="w-full flex flex-row">
                    <div class="ml-8"></div>



                </div>


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
