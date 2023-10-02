<div class="w-full h-20">
    <nav class="bg-gray-800">
        <div class="mx-auto h-20 flex items-center px-2 sm:px-6 lg:px-8 text-white">


            <div class="mt-4 flex items-center p-0 m-0 h-auto">
                <form method="GET">
                    <div class="relative text-gray-600 focus-within:text-gray-400">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                            <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6">
                                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z">
                                    </path>
                                </svg>
                            </button>
                        </span>
                        <input type="search" name="q" class="py-2 text-sm text-white bg-gray-900 rounded-md pl-10 focus:outline-none focus:bg-white focus:text-gray-900" placeholder="Search..." autocomplete="on">
                    </div>
                </form>
            </div>

            <div class="ml-auto flex items-center space-x-2 fixed top-0 right-2 relative" id="click-section">
                <img src="img/user_photo.webp" alt="User Photo" class="rounded-full w-12 h-12 border border-gray-700 shadow" />
                <button id="dropdownButtonOpen" class="w-5 h-5 text-gray-500 cursor-pointer">
                    <!-- SVG content -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 12a1 1 0 0 1-.7-.29l-3.35-3.44a1 1 0 1 1 1.41-1.41L10 9.58l2.65-2.71a1 1 0 1 1 1.41 1.41l-3.36 3.45a1 1 0 0 1-.7.29z">
                        </path>
                    </svg>
                </button>
                <div class="z-50 absolute right-0 top-12 invisible w-80 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 opacity-0 transition-opacity duration-300" id="popover-content">
                    <button id="dropdownButtonClose" class="text-gray-500 dark:text-gray-400 hover:text-opacity-100 transition-opacity duration-700 rounded-lg text-sm p-1.5 absolute right-2 mt-2">
                        <!-- SVG content -->
                        <svg class="w-5 h-5 text-opacity-20 hover:text-opacity-100 transition-opacity duration-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                            <path d="M8 6.586l4.293-4.293 1.414 1.414L9.414 8l4.293 4.293-1.414 1.414L8 9.414l-4.293 4.293-1.414-1.414L6.586 8 2.293 3.707l1.414-1.414L8 6.586z">
                            </path>
                        </svg>
                    </button>
                    <div class="flex flex-col items-center pt-10 pb-10">
                        <img class="w-24 h-24 mb-3 rounded-full shadow" src="img/user_photo.webp" alt="Bonnie image" />
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                            Alex Thompson</h5>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Developer</span>
                        <div class="flex mt-4 space-x-3 md:mt-6">
                            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-[12px] mr-[5px]" xmlns="http://www.w3.org/2000/svg" fill="white" height="1em" viewBox="0 0 512 512">
                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                </svg>
                                Edit Profile</a>
                            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">
                                <svg class="w-[12px] mr-[5px]" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V256c0 17.7 14.3 32 32 32s32-14.3 32-32V32zM143.5 120.6c13.6-11.3 15.4-31.5 4.1-45.1s-31.5-15.4-45.1-4.1C49.7 115.4 16 181.8 16 256c0 132.5 107.5 240 240 240s240-107.5 240-240c0-74.2-33.8-140.6-86.6-184.6c-13.6-11.3-33.8-9.4-45.1 4.1s-9.4 33.8 4.1 45.1c38.9 32.3 63.5 81 63.5 135.4c0 97.2-78.8 176-176 176s-176-78.8-176-176c0-54.4 24.7-103.1 63.5-135.4z" />
                                </svg>
                                Logout</a>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </nav>
</div>
