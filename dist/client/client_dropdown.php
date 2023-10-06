<div class="flex">
    <button id="states-button" data-dropdown-toggle="dropdown-states"
        class="flex-shrink-0 pr-0 z-10 inline-flex items-center py-1.25 px-2 text-sm font-medium text-center text-white bg-gray-700 border border-gray-600 rounded-l-lg hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-700 border-r"
        type="button">
        <img class="rounded-full h-6.5 ml-[-6.5px] mr-1" src="img\logos\circlew_blue.svg" />
        Window World <svg class="w-2 h-2 ml-3 mr-1.5 text-gray-500" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 4 4 4-4" />
        </svg>
    </button>

    <div id="dropdown-states" class="z-10 hidden bg-gray-700 divide-y divide-gray-600 rounded-lg shadow w-44 h-29">
        <ul class="py-0.5 text-sm text-gray-200" aria-labelledby="states-button">
            <li>
                <button type="button" class="inline-flex w-full px-3 py-0.6 text-sm text-gray-200 hover:bg-gray-600">
                    <div class="inline-flex items-center">
                        <svg aria-hidden="true" class="h-2.5 w-2.5 rounded-full mr-1.25"
                            xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512">
                            <!-- SVG Content for US flag -->
                        </svg>
                        RoofWorks USA
                    </div>
                </button>
            </li>
            <li>
                <button type="button" class="inline-flex w-full px-3 py-0.6 text-sm text-gray-200 hover:bg-gray-600">
                    <div class="inline-flex items-center">
                        <svg aria-hidden="true" class="h-2.5 w-2.5 rounded-full mr-1.25"
                            xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de" viewBox="0 0 512 512">
                            <!-- SVG Content for DE flag -->
                        </svg>
                        Cannon Pharmacy
                    </div>
                </button>
            </li>
            <li>
                <button type="button" class="inline-flex w-full px-3 py-0.6 text-sm text-gray-200 hover:bg-gray-600">
                    <div class="inline-flex items-center">
                        <img class="rounded-full h-5.5 mr-1" src="img\logos\jockos.webp" />
                        Jocko's
                    </div>
                </button>
            </li>
        </ul>
    </div>

    <button
        class="inline-flex items-center justify-center w-10 h-29 bg-gray-700 hover:bg-gray-600 border border-gray-600 rounded-r-lg focus:ring-4 focus:outline-none focus:ring-gray-700">
        <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
            aria-hidden="true">
            <path fill-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 4.476l5.293 5.292a1 1 0 011.415-1.415l-5.292-5.293A6 6 0 012 8z"
                clip-rule="evenodd" />
        </svg>
    </button>

    <label for="states" class="sr-only">Choose a location</label>
    <select id="states"
        class="ml-2 bg-gray-700 border text-sm border-gray-600 text-white rounded-r-lg border-l focus:ring-gray-500 focus:border-gray-500 block w-full p-1.25 pl-3 pr-5"
        style="background-image: url(data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%235A67D8' viewBox='0 0 20 20' width='10' height='6'%3E%3Cpath d='M7 7l3-3 3 3m0 6l-3 3-3-3'/%3E%3C/svg%3E); background-repeat: no-repeat; background-position: right 0.5rem center;">
        <option selected>Altoona</option>
        <option value="CA">Binghamton</option>
        <option value="TX">Carolinas</option>
        <option value="WH">Carollton</option>
        <option value="FL">Lubbock</option>
        <option value="VG">Maui</option>
        <option value="GE">Oahu</option>
        <option value="MI">Wyoming Valley</option>
    </select>
</div>