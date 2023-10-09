<div id="clientHeader" class="flex flex-col mb-6 bg-roofworks-bg p-5 pb-6">
    <?php include 'breadcrumbs_white.php'; ?>

    <!-- Header -->
    <div class="flex items-center mb-4">

        <!-- Left side: Logo and Search bar -->
        <div class="flex flex-col items-center mb-12 my-4 w-1/2">
            <!-- Add the id attribute here -->
            <img id="clientLogo" class="h-40 px-8 mb-1" src="img/logos/ww_white.svg" alt="Logo" />
            <div class="flex flex-row justify-center align-middle">
                <!-- Adjusted width here -->
                <form class="w-full flex justify-center relative">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative flex items-center w-full px-4 py-1 bg-white/5 border border-white/10 border-opacity-50 rounded-full text-sm font-medium text-white border-fade-in">
                        <div class="flex items-center justify-center w-full">
                            <!-- Logo left fade in -->
                            <img src="img/logos/ww_search_icon.svg" alt="Logo" class="w-8 h-8 mr-2 logo-fade-in" />
                            <input type="search" id="default-search" class="default-search-input block w-full p-4 pl-6  text-white border-0 bg-transparent focus:ring-transparent rounded-full" placeholder="Window World of Altoona" required>
                            <div id="autocomplete-dropdown" class="hidden absolute mt-10 w-full bg-ww-navy-900 border border-ww-navy-700 border-opacity-50 rounded-md shadow-lg">
                            </div>
                            <button type="submit" class="flex items-center justify-center bg-ww-blue-500 duration-800 hover:bg-ww-blue-600 focus:ring-4 focus:outline-none focus:ring-ww-blue-300 font-medium rounded-full text-sm h-8 w-8 px-2 py-2 text-white ml-2">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right side: Details -->
        <div class="w-1/2 border-opacity-50 border-white pl-8">
            <h1 class="mb-2 text-6xl font-extrabold text-white">Altoona</h1>
            <div class="flex items-center justify-center w-2/3 px-4 py-1 text-center bg-white/5 border border-white/10 border-opacity-50 rounded-lg text-sm font-medium text-white">
                <div class="mr-2 bg-green-500 w-2 h-2 rounded-full glow-dot"></div>
                Full Service Customer
            </div>
            <div class="flex items-center my-4 text-white">
                <i class="las la-map-marker-alt text-lg pr-2"></i>
                <div id="clientAddress">123 Fake Street, Altoona, PA 12345</div>
            </div>
            <div class="flex items-center my-4 text-white">
                <i class="las la-phone text-lg pr-2"></i>
                <div id="clientPhone">123-123-1234</div>
            </div>
            <div class="p-1 my-4 w-2/3 text-sm font-medium rounded-full text-white border border-white border-opacity-50 text-center">
                Owners
            </div>
            <div class="w-2/3 pb-4">
                <ul class="flex justify-between text-white gap-4">
                    <li class="text-sm flex items-center"><i class='las la-user-circle text-white text-lg mr-2'></i>Benjamin Hartley</li>
                    <li class="text-sm flex items-center"><i class='las la-user-circle text-white text-lg mr-2'></i>Clara Jeffries</li>
                    <li class="text-sm flex items-center"><i class='las la-user-circle text-white text-lg mr-2'></i>Thomas Whitfield</li>
                </ul>
            </div>
        </div>
    </div>
</div>
