<!-- Modal Start -->
<div id="authentication-modal2" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="authentication-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900">Add Task</h3>
                <form class="space-y-6" action="#">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Client</label>
                        <div class="flex">
                            <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only">Your
                                Email</label>
                            <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300" type="button">
                                Client
                                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdown-button">
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Window World</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">RoofWorks USA</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Canon Pharmacy</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">TCL Marketing</a></li>
                                </ul>
                            </div>
                            <div class="relative w-full">
                                <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-100 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Search Locations" required>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="default-input" class="block my-2 text-sm font-medium text-gray-900">Media</label>
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Media</option>
                            <option value="US">LA Times</option>
                            <option value="CA">CNN</option>
                            <option value="FR">Spotify</option>
                            <option value="DE">Facebook</option>
                            <option value="DE">Landing Page</option>
                        </select>
                    </div>
                    <div>
                        <label for="default-input" class="block my-2 text-sm font-medium text-gray-900">Type</label>
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Admin</option>
                            <option value="US">Digital</option>
                            <option value="CA">Static</option>
                            <option value="FR">GIS</option>
                            <option value="DE">Audit</option>
                            <option value="DE">Copywriting</option>
                        </select>
                    </div>
                    <div class="mt-2">
                        <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900">Project
                            Description</label>
                        <input type="text" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="flex gap-4">
                        <div class="w-1/2 justify-center align-middle">
                            <label for="default-input" class="block m-2 text-sm font-medium text-gray-900">Type</label>
                            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option selected>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                            </select>
                        </div>

                        <div class="w-1/2 justify-center align-middle">
                            <label for="default-input" class="block my-2 text-sm font-medium text-gray-900">Start
                                Date</label>
                            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option selected>Calendar Popup</option>
                            </select>
                        </div>

                    </div>
                    <button type="submit" class="mt-8 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Submit
                        Changes</button>

                </form>
            </div>
        </div>
    </div>
</div>
<!--Modal Stop-->
