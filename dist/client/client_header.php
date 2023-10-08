<!--Small css stylesheet with glow-dot & logo-fade-in-->
<link rel="stylesheet" href="css/clients.css" />

<div class="flex flex-col mb-6 bg-slate-800 p-5 pb-6">
    <?php include 'breadcrumbs_white.php'; ?>

    <!-- Header -->
    <div class="flex items-center mb-4">

        <!-- Left side: Logo and Search bar -->
        <div class="flex flex-col items-center mb-12 my-4 w-1/2">
            <img class="h-40 px-8 mb-1" src="img/logos/ww_white.svg" alt="Logo" />
            <div class="flex flex-row w-full justify-center align-middle">
                <form class="w-full flex justify-center relative">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative flex items-center w-1/2 px-4 py-1 bg-gray-700 border border-gray-500 border-opacity-50 rounded-full text-sm font-medium text-white">
                        <div class="flex items-center justify-center w-full">
                            <!--Logo left fade in-->
                            <img src="img/logos/ww_search_icon.svg" alt="Logo" class="w-8 h-8 mr-2 logo-fade-in" />
                            <input type="search" id="default-search" class="default-search-input block w-full p-4 pl-6 text-sm text-white border-0 bg-transparent focus:ring-transparent rounded-full" placeholder="Window World of Altoona" required>
                            <div id="autocomplete-dropdown" class="hidden absolute mt-10 w-full bg-gray-700 border border-gray-500 border-opacity-50 rounded-md shadow-lg">
                            </div>
                            <button type="submit" class="flex items-center justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm h-8 w-8 px-2 py-2 text-white ml-2">
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
            <div class="flex items-center justify-center w-2/3 px-4 py-1 text-center bg-gray-700 border border-gray-500 border-opacity-50 rounded-lg text-sm font-medium text-white">
                <div class="mr-2 bg-green-500 w-2 h-2 rounded-full glow-dot"></div>
                Full Service Customer
            </div>
            <div class="flex items-center my-4 text-white">
                <i class="las la-map-marker-alt text-lg pr-2"></i>
                123 Fake Street, Altoona, PA 12345
            </div>
            <div class="flex items-center my-4 text-white">
                <i class="las la-phone text-lg pr-2"></i>
                123-123-1234
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

    <!-- Autocomplete Script -->
    <script>
        const names = [
            "Window World of Binghamton",
            "Window World of Carolinas",
            "Window World of Lubbock",
            "Window World of Maui",
            "Window World of Wyoming Valley"
        ];

        const searchInput = document.getElementById('default-search');
        const dropdown = document.getElementById('autocomplete-dropdown');

        searchInput.addEventListener('input', function() {
            dropdown.innerHTML = '';

            const searchTerm = searchInput.value.toLowerCase();
            const matchingNames = names.filter(name => name.toLowerCase().includes(searchTerm));

            if (matchingNames.length) {
                dropdown.classList.remove('hidden');
                dropdown.classList.add('transform', '-translate-y-1', 'opacity-0');
                setTimeout(() => {
                    dropdown.classList.remove('transform', '-translate-y-1', 'opacity-0');
                }, 10);
            } else {
                dropdown.classList.add('hidden');
            }

            matchingNames.forEach(name => {
                const item = document.createElement('div');
                item.textContent = name;
                item.className = 'p-2 cursor-pointer hover:bg-gray-100';
                item.addEventListener('click', function() {
                    searchInput.value = name;
                    dropdown.innerHTML = '';
                    dropdown.classList.add('hidden');
                });
                dropdown.appendChild(item);
            });
        });

        document.getElementById('default-search').addEventListener('focus', function() {
            document.querySelector('.logo-fade-in').classList.add('logo-active');
        });

        document.getElementById('default-search').addEventListener('blur', function() {
            document.querySelector('.logo-fade-in').classList.remove('logo-active');
        });
    </script>
</div>
