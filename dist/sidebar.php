<div id="main-nav" class=" w-1/2 md:w-1/3 lg:w-64 fixed md:top-0 md:left-0 h-screen lg:block z-30">
    <div class="pleaseWork w-full h-18 flex px-4  items-center mb-16 mt-8 justify-center">

        <img src="img\logos\TCL_Logo_Orange.svg" alt="TCL Logo" class="w-32 h-32 mt-6 rounded-full">
    </div>
    <!--Sidebar Start-->
    <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar"
        aria-controls="sidebar-multi-level-sidebar" type="button"
        class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden  focus:outline-none focus:ring-2 focus:ring-gray-200">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="sidebar-multi-level-sidebar border-1-gray-100"
        class=" left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 "
        aria-label="Sidebar">
        <div class="leftSidebar h-full px-3 py-4 overflow-y-auto ">
            <ul class="space-y-2 font-medium">
                <li id="activeNav" class="group">
                    <a href="index.php" class="flex items-center p-2 rounded-lg group">
                        <i class="las la-tachometer-alt text-2xl "></i>
                        <span class="ml-3 font-semibold">Dashboard</span>
                    </a>
                </li>

                <li class="sideBarItem">
                    <a href="client.php" class="flex items-center p-2 rounded-lg ">
                        <i class="las la-user-circle text-2xl"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap">Client</span>

                    </a>
                </li>
                <li class="sideBarItem">
                    <a href="time_tracker.php" class="flex items-center p-2  rounded-lg    group">
                        <i class="las la-stopwatch   text-2xl"></i>


                        <span class="flex-1 ml-3 whitespace-nowrap">Time Tracker</span>
                        <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium notificationCircle">3</span>
                    </a>
                </li>
                <button type="button"
                    class="sideBarItem flex items-center w-full p-2 text-base  transition duration-75 rounded-lg group "
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <i class="las la-info-circle   text-2xl"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Info</span>
                    <i class="las la-angle-down  font-bold  text-xs"></i>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    <li class="sideBarItem">
                        <a href="#"
                            class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  font-normal text-sm">Vendors</a>
                    </li>
                    <li class="sideBarItem">
                        <a href="email_list.php"
                            class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  font-normal text-sm">E-Mail
                            List</a>
                    </li>
                    <li class="sideBarItem">
                        <a href="#"
                            class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  font-normal text-sm">Promo
                            Guides</a>
                    </li>
                    <li class="group">
                        <a href="#"
                            class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  font-normal text-sm group-hover:font-medium duration-400">Heat
                            Map</a>
                    </li>
                </ul>
                </li>

                <button type="button"
                    class="sideBarItem flex items-center w-full p-2 text-base  transition duration-75 rounded-lg group   "
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-2">
                    <i class="las la-network-wired   text-2xl"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap font-medium">Team</span>
                    <i class="las la-angle-down   text-xs"></i>
                </button>
                <ul id="dropdown-2" class="hidden py-2 space-y-2">
                    <li class="group">
                        <a href="#"
                            class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  font-normal text-sm">Vendors</a>
                    </li>
                    <li class="group">
                        <a href="#"
                            class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  font-normal text-sm">E-Mail
                            Main</a>
                    </li>
                    <li class="sideBarItem">
                        <a href="#"
                            class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  font-normal text-sm">Promo
                            Handbook</a>
                    </li>
                    <li class="group">
                        <a href="#"
                            class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  font-normal text-sm">
                            Org Chart</a>
                    </li>
                    <li class="group">
                        <a href="#"
                            class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  font-normal text-sm">
                            SOPS</a>
                    </li>
                    <li class="group">
                        <a href="#"
                            class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  font-normal text-sm">
                            TCL Store</a>
                    </li>
                    <li class="group">
                        <a href="#"
                            class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  font-normal text-sm">
                            Edit My Profile</a>
                    </li>
                </ul>






                <li class="sideBarItem">
                    <a href="time_tracker.php" class="flex items-center p-2  rounded-lg    group">
                        <i class="las la-glasses   text-2xl"></i>
                        <span class=" flex-1 ml-3 whitespace-nowrap">IT Support</span>
                    </a>
                </li>


                <div class="flex flex-row w-full justify-between">
                    <button
                        style="margin-top:40px; color:white; font:bold; background:#fff; border:1px solid gray; padding:5px; w-2 h-2 border-radius:50px;"
                        data-set-theme="tcl-default" data-act-class="ACTIVECLASS">&nbsp;</button>

                    <button
                        style="margin-top:40px; color:white; font:bold; background:#000; padding:5px; w-2 h-2 border-radius:50px;"
                        data-set-theme="tcl-dark" data-act-class="ACTIVECLASS">&nbsp;</button>

                    <button
                        style="margin-top:40px; color:white; font:bold; background:#cc5500; padding:5px; w-2 h-2 border-radius:50px;"
                        data-set-theme="tcl-orange" data-act-class="ACTIVECLASS">&nbsp;</button>
                </div>


                <!--  <div id="dropdown-cta" class="p-4 mt-6 rounded-lg bg-blue-50 " role="alert">
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
                             -->

            </ul>
        </div>
    </aside>

</div>

<!--End SideBar-->