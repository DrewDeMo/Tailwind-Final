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
            <div class="flex items-center">
                <!-- h-screen takes full viewport height, adjust if needed -->
                <div class="flex flex-row w-full items-center justify-between px-20 mt-10">
                    <div class="text-gray-800 text-4xl font-bold">E-mail List</div>
                    <button class="bg-blue-500 rounded-full px-4 py-3 text-white hover:bg-blue-600 duration-500 transition flex items-center justify-center">
                        Mail Everyone! <span class="mr-2"></span>
                        <box-icon color='white' size='20px' type='solid' name='megaphone'></box-icon>
                    </button>

                </div>
            </div>


            <!--Content Start-->
            <div class="bg-white border border-gray-200 rounded-lg w-[90%] m-auto p-4 my-4">


                <div class="relative overflow-x-auto border border-gray-200 sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 0">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Full Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Internal Use?
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Sending?
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Receiving?
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Description
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Mail
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <!-- Row 1 -->
                            <tr class="bg-white border-b ">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">John
                                    Doe</td>
                                <td class="px-6 py-4 text-blue-500 hover:text-blue-600 duration-500">
                                    j.doe@tclmarketing.com</td>
                                <td class="px-6 py-4 text-center">
                                    <box-icon color='#10b981' name='check'></box-icon>
                                </td>
                                <td class="px-6 py-4 text-emerald-500 font-medium text-center">
                                    <box-icon color='#10b981' name='check'></box-icon>
                                </td>
                                <td class="px-6 py-4 m-auto text-center">
                                    <box-icon color='#ef4444' name='x'></box-icon>
                                </td>
                                <td class="px-6 py-4">Sample description for John.</td>
                                <td class="px-6 py-4">

                                    <button class="bg-blue-400 p-1 rounded-lg hover:bg-blue-500 duration-500">
                                        <box-icon color='#fff' name='mail-send'></box-icon>
                                    </button>
                                </td>
                            </tr>
                            <!-- Row 2 -->
                            <tr class="border-b bg-gray-50 ">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">Jane
                                    Smith</td>
                                <td class="px-6 py-4 text-blue-500 hover:text-blue-600 duration-500">
                                    j.smith@tclmarketing.com</td>
                                <td class="px-6 py-4 text-center">
                                    <box-icon color='#ef4444' name='x'></box-icon>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <box-icon color='#ef4444' name='x'></box-icon>
                                </td>
                                <td class="px-6 py-4 text-emerald-500 font-medium text-center">
                                    <box-icon color='#10b981' name='check'></box-icon>
                                </td>
                                <td class="px-6 py-4">Sample description for Jane.</td>
                                <td class="px-6 py-4">

                                    <button class="bg-blue-400 p-1 rounded-lg hover:bg-blue-500 duration-500">
                                        <box-icon color='#fff' name='mail-send'></box-icon>
                                    </button>
                                </td>
                            </tr>
                            <!-- ... continued with similar rows ... -->
                            <!-- Row 7 -->
                            <tr class="bg-white border-b ">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">Lucas
                                    Brown</td>
                                <td class="px-6 py-4 text-blue-500 hover:text-blue-600 duration-500">
                                    l.brown@tclmarketing.com</td>
                                <td class="px-6 py-4 text-center">
                                    <box-icon color='#10b981' name='check'></box-icon>
                                </td>
                                <td class="px-6 py-4 text-emerald-500 font-medium text-center">
                                    <box-icon color='#10b981' name='check'></box-icon>
                                </td>
                                <td class="px-6 py-4 text-emerald-500 font-medium text-center">
                                    <box-icon color='#10b981' name='check'></box-icon>
                                </td>
                                <td class="px-6 py-4">Sample description for Lucas.</td>
                                <td class="px-6 py-4">

                                    <button class="bg-blue-400 p-1 rounded-lg hover:bg-blue-500 duration-500">
                                        <box-icon color='#fff' name='mail-send'></box-icon>
                                    </button>
                                </td>
                            </tr>
                            <!-- Row 8 -->
                            <tr class="border-b bg-gray-50 ">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">Sophia
                                    Green</td>
                                <td class="px-6 py-4 italic text-gray-300">s.green@tclmarketing.com</td>
                                <td class="px-6 py-4 text-center">
                                    <box-icon color='#ef4444' name='x'></box-icon>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <box-icon color='#ef4444' name='x'></box-icon>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <box-icon color='#ef4444' name='x'></box-icon>
                                </td>
                                <td class="px-6 py-4">Sample description for Sophia.</td>
                                <td class="px-6 py-4">

                                    <button class="bg-gray-300 p-1 rounded-lg">
                                        <box-icon color='#fff' name='mail-send'></box-icon>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
