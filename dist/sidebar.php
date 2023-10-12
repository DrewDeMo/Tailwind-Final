               <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

               <!--Sidebar Start-->
               <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar"
                   aria-controls="sidebar-multi-level-sidebar" type="button"
                   class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                   <span class="sr-only">Open sidebar</span>
                   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                       xmlns="http://www.w3.org/2000/svg">
                       <path clip-rule="evenodd" fill-rule="evenodd"
                           d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                       </path>
                   </svg>
               </button>

               <aside id="sidebar-multi-level-sidebar border-1-gray-100"
                   class="left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 border-r-gray-100"
                   aria-label="Sidebar">
                   <div class="h-full px-3 py-4 overflow-y-auto bg-white border-r-gray-100">
                       <ul class="space-y-2 font-medium">
                           <li id="activeNav" class="group">
                               <a href="index.php"
                                   class="flex items-center p-2 rounded-lg hover:bg-tcl-orange-10 group">
                                   <i class="las la-tachometer-alt text-2xl"></i>
                                   <span class="ml-3 font-semibold">Dashboard</span>
                               </a>
                           </li>

                           <li>
                               <a href="client.php" class="flex items-center p-2  rounded-lg hover:bg-gray-100 group">
                                   <i class="las la-user-circle navIcon  text-2xl"></i>
                                   <span class="flex-1 ml-3 whitespace-nowrap">Client</span>

                               </a>
                           </li>
                           <li>
                               <a href="time_tracker.php"
                                   class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
                                   <i class="las la-stopwatch text-gray-600 group-hover:text-gray-900  text-2xl"></i>


                                   <span class="flex-1 ml-3 whitespace-nowrap">Time Tracker</span>
                                   <span
                                       class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full">3</span>
                               </a>
                           </li>
                           <button type="button"
                               class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100"
                               aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                               <i class="las la-info-circle text-gray-600 group-hover:text-gray-900  text-2xl"></i>
                               <span class="flex-1 ml-3 text-left whitespace-nowrap">Info</span>
                               <i
                                   class="las la-angle-down text-gray-600 group-hover:text-gray-900 font-bold  text-xs"></i>
                           </button>
                           <ul id="dropdown-example" class="hidden py-2 space-y-2">
                               <li>
                                   <a href="#"
                                       class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 font-normal text-sm">Vendors</a>
                               </li>
                               <li>
                                   <a href="email_list.php"
                                       class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 font-normal text-sm">E-Mail
                                       List</a>
                               </li>
                               <li>
                                   <a href="#"
                                       class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 font-normal text-sm">Promo
                                       Guides</a>
                               </li>
                               <li class="group">
                                   <a href="#"
                                       class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 font-normal text-sm group-hover:font-medium duration-400">Heat
                                       Map</a>
                               </li>
                           </ul>
                           </li>

                           <button type="button"
                               class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100  "
                               aria-controls="dropdown-example" data-collapse-toggle="dropdown-2">
                               <i class="las la-network-wired text-gray-600 group-hover:text-gray-900  text-2xl"></i>
                               <span class="flex-1 ml-3 text-left whitespace-nowrap font-medium">Team</span>
                               <i class="las la-angle-down text-gray-600 group-hover:text-gray-900  text-xs"></i>
                           </button>
                           <ul id="dropdown-2" class="hidden py-2 space-y-2">
                               <li class="group">
                                   <a href="#"
                                       class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 font-normal text-sm">Vendors</a>
                               </li>
                               <li class="group">
                                   <a href="#"
                                       class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 font-normal text-sm">E-Mail
                                       Main</a>
                               </li>
                               <li>
                                   <a href="#"
                                       class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 font-normal text-sm">Promo
                                       Handbook</a>
                               </li>
                               <li class="group">
                                   <a href="#"
                                       class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 font-normal text-sm">
                                       Org Chart</a>
                               </li>
                               <li class="group">
                                   <a href="#"
                                       class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 font-normal text-sm">
                                       SOPS</a>
                               </li>
                               <li class="group">
                                   <a href="#"
                                       class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 font-normal text-sm">
                                       TCL Store</a>
                               </li>
                               <li class="group">
                                   <a href="#"
                                       class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 font-normal text-sm">
                                       Edit My Profile</a>
                               </li>
                           </ul>

                           <div class="text-gray-500" </ul>
                               </li>




                               <li>
                                   <a href="time_tracker.php"
                                       class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
                                       <i class="las la-glasses text-gray-600 group-hover:text-gray-900  text-2xl"></i>
                                       <span class=" flex-1 ml-3 whitespace-nowrap">IT Support</span>
                                   </a>
                               </li>






                               <div id="dropdown-cta" class="p-4 mt-6 rounded-lg bg-blue-50 " role="alert">
                                   <div class="flex items-center mb-3">
                                       <span
                                           class="bg-tcl-orange-100 text-tcl-orange-800 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-tcl-orange-200 dark:text-tcl-orange-900">Time
                                           Tracker</span>
                                       <button type="button"
                                           class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 inline-flex justify-center items-center w-6 h-6 text-blue-900 rounded-lg focus:ring-2 focus:ring-blue-400 p-1 hover:bg-blue-200 h-6 w-6  dark:text-blue-400 "
                                           data-dismiss-target="#dropdown-cta" aria-label="Close">
                                           <span class="sr-only">Close</span>
                                           <svg class="w-2.5 h-2.5" aria-hidden="true"
                                               xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                               <path stroke="currentColor" stroke-linecap="round"
                                                   stroke-linejoin="round" stroke-width="2"
                                                   d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                           </svg>
                                       </button>
                                   </div>
                                   <p class="mb-3 text-sm text-blue-800 dark:text-blue-400">
                                       Hey Team, the month is wrapping up! Please double-check your time-tracker and
                                       dates. Thanks!
                                   </p>
                                   <a class="text-sm text-blue-800 underline font-medium hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300"
                                       href="#">View Time Tracker</a>
                               </div>
                               <button
                                   style="margin-top:40px; color:white; font:bold; background:#cc5500; padding:5px; border-radius:20%;"
                                   data-set-theme="tcl-default" data-act-class="ACTIVECLASS">Window World Theme</button>

                       </ul>
                   </div>
               </aside>
               <!--End SideBar-->
